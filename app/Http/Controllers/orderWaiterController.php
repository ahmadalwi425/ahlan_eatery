<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use App\Models\order_detail;

class orderWaiterController extends Controller
{
    
    public function index()
    {
        $stattrigger = "diproses";
        $order = order::where('status_order',$stattrigger)->get();
        return view ('pages.waiter.order.openOrder', compact('order'));
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
        $data = order_detail::where('id_order',$id)->get();
        dd($data);
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
