<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\masakan;
use DB;

class masakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masakan = DB::table('masakan')->get();
        return view ('pages.employee.indexMenu', compact('masakan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.employee.createMenu');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id'=>'required',
            'nama_masakan'=>'required',
            'harga'=>'required',
            'status'=>'required',
        ]);

        masakan::create($request->all());

        return redirect()->route('pages.employee.indexMenu')
            ->with('Sukses, masakan telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $masakan = DB::table('masakan')->where('id', $id)->first();
        return view('pages.employee.editMenu', compact('masakan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id'=>'required',
            'nama_masakan'=>'required',
            'harga'=>'required',
            'status'=>'required',
        ]);

        masakan::find($id)->update($request->all());

        return redirect()->route ('pages.employee.indexMenu')
            ->with('Sukses, menu berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        masakan::find($id)->delete();
        return redirect()-> route('pages.employee.indexMenu')
            ->with('Sukses, menu berhasil diperbarui');
    }
}
