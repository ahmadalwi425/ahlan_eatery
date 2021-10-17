<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;

class orderWaiterController extends Controller
{
    
    public function index()
    {
        $order = order::all();
        return view ('pages.waiter.order.index', ['meja' => $meja]);
    }

   
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
