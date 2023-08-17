<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messages = Contact::orderBy('created_at','DESC')->paginate(20);
        return view('admin.contact.index', ['messages'=>$messages]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $message = Contact::find($id);
        if($message){
            return view('admin.contact.show', compact('message'));
        }else{
            Session::flash('error', 'No message found.');
            return redirect()->route('dashboard');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $contact = Contact::find($id);
        if($contact){
            $contact->delete();
            Session::flash('success', 'Message deleted Successfully');
        }
        return redirect()->route('contact.index');
    }
}
