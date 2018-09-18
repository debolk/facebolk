<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
	public function __construct()
	{
		$this->middleware('guest', ['except' => 'destroy']);
	}

    public function create()
    {
    	return view('sessions.create');
    }

    public function destroy()
    {
    	auth()->logout();

    	return redirect('/login');
    }

    public function store()
    {
    	//Attempt to authenticate the user
    	if (! auth()->attempt(request(['email', 'password']))) {
    		return back()->withErrors([
    			'message' => 'Invalid credentials provided'
    		]);
    	}

    	//Redirect to the home page
    	return redirect()->home();
    }
}
