<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\masakan;
use DB;

class masakanController extends Controller
{

    public function index()
    {
        $masakan = DB::table('masakan')->get();
        return view ('pages.waiter.menu.indexMenu', compact('masakan'));
    }


    public function create()
    {
        return view('pages.waiter.menu.createMenu');
    }


    public function store(Request $request)
    {
        $request->validate([
            'id'=>'required',
            'nama_masakan'=>'required',
            'harga'=>'required',
            'status'=>'required',
        ]);

        masakan::create($request->all());

        return redirect()->route('masakan.index')
            ->with('Sukses, masakan telah ditambahkan');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $masakan = DB::table('masakan')->where('id', $id)->first();
        return view('pages.waiter.menu.editMenu', compact('masakan'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'id'=>'required',
            'nama_masakan'=>'required',
            'harga'=>'required',
            'status'=>'required',
        ]);

        masakan::find($id)->update($request->all());

        return redirect()->route ('masakan.index')
            ->with('Sukses, menu berhasil diperbarui');
    }


    public function destroy($id)
    {
        masakan::find($id)->delete();
        return redirect()-> route('masakan.index')
            ->with('Sukses, menu berhasil diperbarui');
    }
}
