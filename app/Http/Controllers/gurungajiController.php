<?php

namespace App\Http\Controllers;

use App\Models\gurungaji;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class gurungajiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gurungaji = gurungaji::all();
        return view('gurungaji.index',['gurungaji' => $gurungaji]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gurungaji.create');
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
            "nama" => "required",
            "jeniskelamin" => "required",
            "alamat" => "required|min:5",
            "nohp" => "required",
            "kelurahan" => "required",
            "kecamatan" => "required",
        ])->validated();

        $gurungaji = new gurungaji();
        $gurungaji->nama = $request->get('nama');
        $gurungaji->nohp = $request->get('nohp');
        $gurungaji->jeniskelamin = $request->get('jeniskelamin');
        $gurungaji->alamat = $request->get('alamat');
        $gurungaji->kelurahan = $request->get('kelurahan');
        $gurungaji->kecamatan = $request->get('kecamatan');
        $gurungaji->save();
        return redirect()->route('gurungaji.index')->with('status','Data Berhasil ditambahkan');
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
        $gurungaji = gurungaji::findOrfail($id);
        return view('gurungaji.edit',['gurungaji' => $gurungaji]);
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
            "nama" => "required",
            "jeniskelamin" => "required",
            "alamat" => "required|min:5",
            "nohp" => "required",
            "kelurahan" => "required",
            "kecamatan" => "required",
        ])->validated();

        $gurungaji = gurungaji::findOrfail($id);
        $gurungaji->nama = $request->get('nama');
        $gurungaji->nohp = $request->get('nohp');
        $gurungaji->jeniskelamin = $request->get('jeniskelamin');
        $gurungaji->alamat = $request->get('alamat');
        $gurungaji->kelurahan = $request->get('kelurahan');
        $gurungaji->kecamatan = $request->get('kecamatan');
        $gurungaji->save();
        return redirect()->route('gurungaji.index')->with('status','Data Berhasil diupdate');
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
