<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //to get the loggedIn user id
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        //to return listings made by a user
        return view('dashboard')->with('listings', $user->listings);
    }
}
