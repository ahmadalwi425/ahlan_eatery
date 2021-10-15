<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Models\masakan;
use App\Models\jenis_masakan;
use App\Models\User;


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
        // dd('yes');
        if(Auth::User()->level == 1){
            $waiter = User::where('level', '2')->get();
            // dd($waiter);
            return view('pages.admin.indexWaiter', compact('waiter'));
        }else{
        $masakan = masakan::with('jenis_masakan')->get();
        return view ('pages.waiter.menu.indexMenu', compact('masakan'));
        }
    }
    public function scan()
    {
        return view('qrcode.scan');
    }
}
