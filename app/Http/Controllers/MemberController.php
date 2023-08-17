<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;
use Illuminate\Support\Facades\Session;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Member::orderBy('name', 'ASC')->paginate(20);
        return view('admin.member.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.member.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMemberRequest $request)
    {
        $member = Member::factory()->create([
            'name' => $request->name,
            'email' => $request->email,
            'bio' => $request->bio,
            'brief_bio' => $request->brief_bio,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
            'phone' => $request->phone,
            'membership_type' => $request->membership_type,
            'role' => $request->role
        ]);

        if($request->has('image')){
            $image = $request->image;
            $image_new_name = time().".".$image->getClientOriginalExtension();
            $image->move('storage/member', $image_new_name);
            $member->image = 'storage/member/' . $image_new_name;
            $member->save();
        }

        Session::flash('success', 'Member created Successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        return view('admin.member.edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMemberRequest $request, Member $member)
    {
        $member->name = $request->name;
        $member->email = $request->email;
        $member->bio = $request->bio;
        $member->brief_bio = $request->brief_bio;
        $member->facebook = $request->facebook;
        $member->twitter = $request->twitter;
        $member->instagram = $request->instagram;
        $member->linkedin = $request->linkedin;
        $member->phone = $request->phone;
        $member->membership_type = $request->membership_type;
        $member->role = $request->role;

        if($request->has('image')){
            $image = $request->image;
            $image_new_name = time().".".$image->getClientOriginalExtension();
            $image->move('storage/member', $image_new_name);
            $member->image = 'storage/member/' . $image_new_name;
            $member->save();
        }

        $member->save();

        Session::flash('success', 'User updated successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        if($member){
            $member->delete();
            Session::flash('success', 'Member deleted successfully');
        }
    }
}
