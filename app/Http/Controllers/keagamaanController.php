<?php

namespace App\Http\Controllers;

use App\Models\keagamaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class keagamaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rumahibadah = keagamaan::all();
        return view('rumahibadah.index',['rumahibadah' => $rumahibadah]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rumahibadah.create');
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
            "namasarana" => "required",
            "jenis" => "required",
            "alamat" => "required|min:5",
            "kelurahan" => "required",
            "kecamatan" => "required",
        ])->validated();

        $rumahibadah = new keagamaan();
        $rumahibadah->nomorijin = $request->get('nomorijin');
        $rumahibadah->namasarana = $request->get('namasarana');
        $rumahibadah->pimpinan = $request->get('pimpinan');
        $rumahibadah->jenis = $request->get('jenis');
        $rumahibadah->alamat = $request->get('alamat');
        $rumahibadah->kelurahan = $request->get('kelurahan');
        $rumahibadah->kecamatan = $request->get('kecamatan');
        $rumahibadah->save();
        return redirect()->route('rumahibadah.index')->with('status','Data Berhasil ditambahkan');


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
        $rumahibadah = keagamaan::findOrfail($id);
        return view('rumahibadah.edit',['rumahibadah' => $rumahibadah]);
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
            "namasarana" => "required",
            "jenis" => "required",
            "alamat" => "required|min:5",
            "kelurahan" => "required",
            "kecamatan" => "required",
        ])->validated();

        $rumahibadah = keagamaan::findOrfail($id);
        $rumahibadah->nomorijin = $request->get('nomorijin');
        $rumahibadah->namasarana = $request->get('namasarana');
        $rumahibadah->pimpinan = $request->get('pimpinan');
        $rumahibadah->jenis = $request->get('jenis');
        $rumahibadah->alamat = $request->get('alamat');
        $rumahibadah->kelurahan = $request->get('kelurahan');
        $rumahibadah->kecamatan = $request->get('kecamatan');
        $rumahibadah->save();
        return redirect()->route('rumahibadah.index')->with('status','Data Berhasil diupdate');
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
