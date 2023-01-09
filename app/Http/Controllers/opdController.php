<?php

namespace App\Http\Controllers;

use App\Models\opd;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class opdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $opd = opd::all();
        return view('opd.index',['opd' => $opd]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('opd.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->All(),[
            "nama" => "required",
            "status" => "required"
        ])->validate();

        $opd = new opd;
        $opd->nama = $request->get('nama');
        $opd->status = $request->get('status');
        $opd->save();

        return redirect()->route('opd.index')->with('status','Data Berhasil disimpan');
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
        $opd = opd::findOrfail($id);
        return view('opd.edit',['opd' => $opd]);
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
        $validation = Validator::make($request->All(),[
            "nama" => "required",
            "status" => "required"
        ])->validate();
        
        $opd = opd::findOrfail($id);
        $opd->nama = $request->get('nama');
        $opd->status = $request->get('status');
        $opd->save();
        return redirect()->route('opd.index')->with('status','Data Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $opd = opd::findOrfail($id);
        $opd->delete();
        return redirect()->route('opd.index')->with('Status','Data Berhasil dihapus');
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
