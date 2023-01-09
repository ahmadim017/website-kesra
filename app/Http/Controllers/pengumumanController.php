<?php

namespace App\Http\Controllers;

use App\Models\pengumuman;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class pengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengumuman = pengumuman::all();
        return view('pengumuman.index',['pengumuman' => $pengumuman]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengumuman.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(),[
            "judul" => "required",
            "file" => "required|mimes:pdf|max:5048"
        ])->validated();

        $pengumuman = new pengumuman();
        $pengumuman->judul = $request->get('judul');
        $pengumuman->keterangan = $request->get('keterangan');
        if ($request->file('file')) {
            $file = $request->file('file')->store('file','public');
            $pengumuman->file = $file;
            $pengumuman->tittle = $request->file('file')->getClientOriginalName();
        }
        $pengumuman->save();
        return redirect()->route('pengumuman.index')->with('status','Data Berhasil disimpan');
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
        $pengumuman = pengumuman::find($id);
        return view('pengumuman.edit',['pengumuman' => $pengumuman]);
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
        $validation = Validator::make($request->all(),[
            "judul" => "required",
            "file" => "mimes:pdf|max:5048"
        ])->validated();

        $pengumuman = pengumuman::findOrfail($id);
        $pengumuman->judul = $request->get('judul');
        $pengumuman->keterangan = $request->get('keterangan');
        if ($request->file('file')) {

            if ($pengumuman->file && file_exists(storage_path('app/public/'.$pengumuman->file))){
                Storage::delete('public/'.$pengumuman->file);
            }
            $file = $request->file('file')->store('foto','public');
            $pengumuman->file = $file;
            $pengumuman->tittle = $request->file('file')->getClientOriginalName();
        }
        $pengumuman->save();
        return redirect()->route('pengumuman.index')->with('status','Data Berhasil diupdate');
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
        $this->middleware(function($request, $next){
            if(Auth::user()->role == "ADMIN"){
                return $next($request);
            }
            return redirect()->guest('/404');
        });
    }
    
}
