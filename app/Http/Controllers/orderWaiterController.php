<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use App\Models\order_detail;

class orderWaiterController extends Controller
{
    
    public function index()
    {
        $stattrigger = 0;
        $order = order::where('status_order',$stattrigger)->get();
        return view('pages.waiter.order.openOrder', compact('order'));
    }

    public function closeOrder()
    {
        $stattrigger = 1;
        $order = order::where('status_order',$stattrigger)->get();
        return view ('pages.waiter.order.closeOrder', compact('order'));
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
        $order = order::where('id',$id)->first();
        $orderDetail = order_detail::where('id_order', $id)->with('masakan')->get();
        // dd($data);
        return view('pages.waiter.order.orderDetail', compact('order', 'orderDetail'));


    }

    
    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        
    }

    public function updateStatus(Request $request, $id)
    {
        $status = $request->get('status');
        // dd($status);
        $order = order::where('id', $id)->first();
        $order->status_order = $request->get('status');
        $order->save();

        $order = order::where('id',$id)->get();
        $orderDetail = order_detail::where('id_order', $id)->get();
        return view('pages.waiter.order.closeOrder', compact('order', 'orderDetail'));
    }

    
    public function destroy($id)
    {
        //
    }
}
