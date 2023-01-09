<?php

namespace App\Http\Controllers;

use App\Models\catatan;
use App\Models\proposalibadah;
use App\Models\proposallembaga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class catatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->get('id_permohonan');
        $catatan = new catatan();
        $catatan->id_permohonan = $request->get('id_permohonan');
        $catatan->verifikator = Auth::user()->id;
        $catatan->keterangan = $request->get('keterangan');
        $catatan->save();
        $proposalibadah = proposalibadah::findOrfail($id);
        $proposalibadah->status = 'Tidak Sesuai';
        $proposalibadah->save();
        return redirect()->route('proposalibadah.index')->with('Status','Permohonan Tidak Sesuai');
    }

    public function lembaga(Request $request)
    {
        $id = $request->get('id_lembaga');
        $catatan = new catatan();
        $catatan->id_lembaga = $request->get('id_lembaga');
        $catatan->verifikator = Auth::user()->id;
        $catatan->keterangan = $request->get('keterangan');
        $catatan->save();
        $proposallembaga = proposallembaga::findOrfail($id);
        $proposallembaga->status = 'Tidak Sesuai';
        $proposallembaga->save();
        return redirect()->route('proposallembaga.index')->with('Status','Permohonan Tidak Sesuai');
    }
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function __construct()
    {
        $this->middleware('auth');
       
    }
}
