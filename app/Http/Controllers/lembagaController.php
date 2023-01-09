<?php

namespace App\Http\Controllers;

use App\Models\lembaga;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class lembagaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalembaga = lembaga::all();
        return view('datalembaga.index',['datalembaga' => $datalembaga]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datalembaga.create');
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
            "ketua" => "required",
            "alamat" => "required|min:5",
            "kelurahan" => "required",
            "kecamatan" => "required",
        ])->validated();

        $datalembaga = new lembaga();
        $datalembaga->nomorijin = $request->get('nomorijin');
        $datalembaga->nama = $request->get('nama');
        $datalembaga->ketua = $request->get('ketua');
        $datalembaga->sekretaris = $request->get('sekretaris');
        $datalembaga->alamat = $request->get('alamat');
        $datalembaga->kelurahan = $request->get('kelurahan');
        $datalembaga->kecamatan = $request->get('kecamatan');
        $datalembaga->save();
        return redirect()->route('datalembaga.index')->with('status','Data Berhasil ditambahkan');
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
        $datalembaga = lembaga::findOrfail($id);
        return view('datalembaga.edit',['datalembaga' => $datalembaga]);
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
            "ketua" => "required",
            "alamat" => "required|min:5",
            "kelurahan" => "required",
            "kecamatan" => "required",
        ])->validated();

        $datalembaga = lembaga::findORfail($id);
        $datalembaga->nomorijin = $request->get('nomorijin');
        $datalembaga->nama = $request->get('nama');
        $datalembaga->ketua = $request->get('ketua');
        $datalembaga->sekretaris = $request->get('sekretaris');
        $datalembaga->alamat = $request->get('alamat');
        $datalembaga->kelurahan = $request->get('kelurahan');
        $datalembaga->kecamatan = $request->get('kecamatan');
        $datalembaga->save();
        return redirect()->route('datalembaga.index')->with('status','Data Berhasil ditambahkan');
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
