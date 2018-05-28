<?php

namespace Egresados\Http\Controllers;

use Illuminate\Http\Request;

use Egresados\vacants;
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
       $vacants = vacants::paginate(5);
       return view('Pages.Index')->with('vacants' , $vacants);

   }
}
