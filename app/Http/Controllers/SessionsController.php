<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{

    public function create(){
        return view('sessions.create');
    }

    public function store(){
        //validate the form
        $this->validate(request(), [
            'email' => 'required|email',
            'password' => 'required'
            ]);
        if(!auth()->attempt(request(['email', 'password']))){
            return back()->withErrors([
                'message' => 'Please check your credentials and try again'
                ]);
        }
        session()->regenerate();
        return redirect('/home')->with('success', 'You have been logged in');
    }
    public function destroy(){
        auth()->logout();
        return redirect('/home')->with('success', 'You have been logged out');
    }
}
