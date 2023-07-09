<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class RegisterController extends Controller
{
    public function create(){
        return view('register.create');
    }

    public function store(){
        $validated = $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed']
             );

        $validated['password'] = bcrypt($validated['password']);
        $user =User::create($validated);
        auth()->login($user);
        return redirect('/home')->with('success','Thanks for registering!');
    }
}
