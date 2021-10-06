<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::User()->level == 1){
            return view('pages.admin.index');
        }else{

        $masakan = DB::table('masakan')->get();
        return view ('pages.waiter.menu.indexMenu', compact('masakan'));
        }
    }
}
