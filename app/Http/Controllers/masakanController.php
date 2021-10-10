<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\masakan;
use App\Models\jenis_masakan;
use DB;

class masakanController extends Controller
{

    public function index()
    {
        $masakan = masakan::with('jenis_masakan')->get();
        return view ('pages.waiter.menu.indexMenu', compact('masakan'));
    }


    public function create()
    {
        $jenis_masakan = jenis_masakan::all();
        return view('pages.waiter.menu.createMenu', compact('jenis_masakan'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama_masakan'=>'required',
            'jenis_masakan_id' => 'required',
            'harga'=>'required',
            'status'=>'required',
            'gambar' => 'required'
        ]);

        // dd($request->get('nama_masakan'));

        $masakan = new masakan;
        if ($request->file('gambar')) {
            $image_name = $request->file('gambar')->store('images', 'public');
            $masakan->gambar = $image_name;
        }


        $masakan->nama_masakan = $request->get('nama_masakan');
        $masakan->status = $request->get('status');
        $masakan->harga = $request->get('harga');
        $jenis_masakan = new jenis_masakan;
        $jenis_masakan->id = $request->get('jenis_masakan_id');

        $masakan->jenis_masakan()->associate($jenis_masakan);
        $masakan->save();

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
