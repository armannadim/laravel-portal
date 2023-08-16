<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index(){
        $users = User::latest()->paginate(20);
        return view('admin.user.index', compact('users'));
    }

    public function create(){
        return view('admin.user.create');
    }

    public function show(User $user){

    }

    public function store(Request $request){

        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8'
        ]);
        $user = User::factory()->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'description' => $request->description
        ]);
        Session::flash('success', 'User created Successfully');
        return redirect()->back();
    }

    public function edit(User $user){
        return view('admin.user.edit', compact('user'));
    }

    /**
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, User $user){
        $this->validate($request, [
            'name' => "required|string|max:255",
            'email' => "required|email|unique:users,email,$user->id",
            'password' => "sometimes|nullable|min:8"
        ]);


        $user->name = $request->name;
        $user->email = $request->email;
        if($request->password){
            $user->password = bcrypt($request->password);
        }
        $user->description = $request->description;
        $user->save();

        Session::flash('success', 'User updated successfully');
        return redirect()->back();
    }

    public function delete(User $user){
        if($user){
            $user->delete();
            Session::flash('success', 'User deleted successfully');
        }
    }

    public function profile(){
        $user = Auth::user();
        return view('admin.user.show', compact('user'));
    }

    public function profile_update(Request $request){
        $user = auth()->user();
        $this->validate($request, [
            'name' => "required|string|max:255",
            'email' => "required|email|unique:users,email,$user->id",
            'password' => "sometimes|nullable|min:8",
            'image' => 'sometimes|nullable|image|max:2048'
        ]);


        $user->name = $request->name;
        $user->email = $request->email;
        if($request->has('passowrd') && $request->password !== null){
            $user->password = bcrypt($request->password);
        }
        $user->description = $request->description;
        $user->save();

        if($request->has('image')){
            $image = $request->image;
            $image_new_name = time().".".$image->getClientOriginalExtension();
            $image->move('storage/user', $image_new_name);
            $user->image = 'storage/user/' . $image_new_name;
            $user->save();
        }

        Session::flash('success', 'Profile updated successfully');
        return redirect()->back();
    }
}

