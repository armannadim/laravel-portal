<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqs = Faq::orderby('order','asc')->paginate(20);
        return view('admin.faq.index',compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $member = Faq::factory()->create([
            'question' => $request->question,
            'answer' => $request->answer,
            'order' => $request->order
        ]);

        Session::flash('success', 'FAQ created Successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Faq $faq)
    {
        return view('admin.faq.edit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Faq $faq)
    {
        $f = Faq::find($request->id);
        $f->question = $request->question;
        $f->answer = $request->answer;
        $f->order = $request->order;

        $f->save();

        Session::flash('success', 'FAQ updated Successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faq $faq)
    {
        if($faq){
            $faq->delete();
            Session::flash('success', 'FAQ deleted successfully');
        }
        return redirect()->route('faq.index');
    }
}
