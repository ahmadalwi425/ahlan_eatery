<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\masakan;
use Illuminate\Http\Request;
use Carbon\Carbon;

class orderController extends Controller
{
    
    public function index(Request $request)
    {
        

        


    }

    public function pesanmeja($id)
    {
        $no_table = $id;
        // dd($no_table);
        do{
            $no_pesanan = random_int(100000, 999999);
        }while(order::where('id',$no_pesanan)->get()->count() > 0);
        return view('passtable', compact('no_pesanan','no_table'));

        
    }


    public function dataPesanan(Request $request)
    {
         $request->validate([
            'no_table'=>'required',
            'no_pesanan' => 'required',
            'nama_pemesan'=>'required',
        ]);

        $no_table = $request->get('no_table');
        $no_pesanan = $request->get('no_pesanan');
        $nama_pemesan = $request->get('nama_pemesan');
        $masakan = masakan::all();

        // dd($nama_pemesan, $no_table, $no_pesanan);
        return view('pages.customer.order', compact('no_table','no_pesanan', 'nama_pemesan', 'masakan'));
        
        
    }

    public function orderList(Request $request)
    {
        $data = json_decode($request->get('order-list'), true);
        dd($request->get('no_table'));
    }


    
    public function create()
    {
        
    }
    public function cekorder()
    {
        $stat = false;
        $kondisi = "diproses";
        if(order::where('status_order',$kondisi)->get()->count() > 0){
            $stat = true;
        }
        return $stat;
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
