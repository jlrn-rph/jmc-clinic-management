<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cookie;
use Redirect;
use DB;
use App\Doctor;
class HomeController extends Controller
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
      return response (view('home'))->cookie('home_cookie', 'home', 2);

    }
}
