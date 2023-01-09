<?php

namespace App\Http\Controllers;

use App\Models\suratkeluar;
use App\Models\tahun;
use Illuminate\Support\Facades\Date as FacadesDate;
use Illuminate\Support\Facades\Storage;
use Jenssegers\Date\Date;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class suratkeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        Date::setlocale('id');
        $tahun = tahun::all();
	    $ta = Carbon::now()->format('Y');
        $stahun = $request->get('ta');
        if ($stahun) {
            $suratkeluar = suratkeluar::where('tahun','LIKE','%'.$stahun.'%')->get();
        }else{
            $suratkeluar = suratkeluar::where('tahun','LIKE','%'.$ta.'%')->get();
        }
        return view('suratkeluar.index',['suratkeluar' => $suratkeluar,'tahun' => $tahun, 'stahun' => $stahun,'ta' => $ta]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('suratkeluar.create');
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
            "nosurat" => "required",
            "tglsurat" => "required",
            "judul" => "required",
            "tujuansurat" => "required",
            "file_surat" => "required|file|mimes:pdf|max:5048",
        ])->validated();
        
        $tahun = Carbon::now()->format('Y');

        $suratkeluar = new suratkeluar;
        $suratkeluar->nosurat = $request->get('nosurat');
        $suratkeluar->tglsurat = $request->get('tglsurat');
        $suratkeluar->judul = $request->get('judul');
        $suratkeluar->tahun = $tahun;
        $suratkeluar->tujuansurat = $request->get('tujuansurat');
        $suratkeluar->keterangan = $request->get('keterangan');
        if ($request->file('file_surat')) {
            $file = $request->file('file_surat')->store('file_suratkeluar','public');
            $suratkeluar->file_surat = $file;
            $suratkeluar->tittle = $request->file('file_surat')->getClientOriginalName();
        }
        $suratkeluar->save();

        return redirect()->route('suratkeluar.index')->with('status','Data Berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Date::setlocale('id');
        $suratkeluar = suratkeluar::findOrfail($id);
        return view('suratkeluar.show',['suratkeluar' => $suratkeluar]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $suratkeluar = suratkeluar::findOrfail($id);
        return view('suratkeluar.edit',['suratkeluar' => $suratkeluar]);
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
            "nosurat" => "required",
            "tglsurat" => "required",
            "judul" => "required",
            "tujuansurat" => "required",
            "file_surat" => "file|mimes:pdf|max:5048",
        ])->validated();
        

        $suratkeluar = suratkeluar::findOrfail($id);
        $suratkeluar->nosurat = $request->get('nosurat');
        $suratkeluar->tglsurat = $request->get('tglsurat');
        $suratkeluar->judul = $request->get('judul');
        $suratkeluar->tujuansurat = $request->get('tujuansurat');
        $suratkeluar->keterangan = $request->get('keterangan');
        if ($request->file('file_surat')) {

            if ($suratkeluar->file_surat && file_exists(storage_path('app/public/'.$suratkeluar->file_surat))){
                Storage::delete('public/'.$suratkeluar->file_surat);
            }
            $file = $request->file('file_surat')->store('file_suratkeluar','public');
            $suratkeluar->file_surat = $file;
            $suratkeluar->tittle = $request->file('file_surat')->getClientOriginalName();
        }
        $suratkeluar->save();

        return redirect()->route('suratkeluar.index')->with('status','Data Berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $suratkeluar = suratkeluar::findOrfail($id);
        if ($suratkeluar->file_surat && file_exists(storage_path('app/public/'.$suratkeluar->file_surat))){
            Storage::delete('public/'. $suratkeluar->file_surat);
                }
            $suratkeluar->delete();
            return redirect()->route('suratkeluar.index')->with('Status','Data Berhasil dihapus');
    }

    public function download($id)
    {
        $suratkeluar = suratkeluar::findOrfail($id);
        return response()->download(storage_path('app/public/'. $suratkeluar->file_surat));
    }

    public function __construct()
    {
        $this->middleware('auth');
    
    }
}
