<?php

namespace App\Http\Controllers;

use App\Models\opd;
use App\Models\suratmasuk;
use App\Models\tahun;
use Illuminate\Support\Facades\Storage;
use Jenssegers\Date\Date;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class suratmasukController extends Controller
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
          $suratmasuk = suratmasuk::where('tahun','LIKE','%'.$stahun.'%')->get();
        }else{
            $suratmasuk = suratmasuk::where('tahun','LIKE','%'.$ta.'%')->get();
        }
        return view('suratmasuk.index',['suratmasuk' => $suratmasuk,'tahun' => $tahun, 'stahun' => $stahun,'ta' => $ta]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $opd = opd::all();
        return view('suratmasuk.create',['opd' => $opd]);
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
            "tglterima" => "required",
            "id_opd" => "required",
            "tittle" => "required",
            "file_surat" => "required|file|mimes:pdf|max:15048",
        ])->validated();
        
        $tahun = Carbon::now()->format('Y');

        $suratmasuk = new suratmasuk;
        $suratmasuk->nosurat = $request->get('nosurat');
        $suratmasuk->tglsurat = $request->get('tglsurat');
        $suratmasuk->judul = $request->get('judul');
        $suratmasuk->tahun = $tahun;
        $suratmasuk->id_opd = $request->get('id_opd');
        $suratmasuk->tglterima = $request->get('tglterima');
        $suratmasuk->keterangan = $request->get('keterangan');
        if ($request->file('file_surat')) {
            $file = $request->file('file_surat')->store('file_suratmasuk','public');
            $suratmasuk->file_surat = $file;
            $suratmasuk->tittle = $request->file('file_surat')->getClientOriginalName();
        }
        $suratmasuk->save();

        return redirect()->route('suratmasuk.index')->with('status','Data Berhasil disimpan');
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
        $suratmasuk = suratmasuk::findOrfail($id);
        return view('suratmasuk.show',['suratmasuk' => $suratmasuk]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $opd = opd::where('status','ACTIVE')->get();
        $suratmasuk = suratmasuk::findOrfail($id);
        return view('suratmasuk.edit',['suratmasuk' => $suratmasuk,'opd' => $opd]);
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
	        "nodisposisi" => "required",
            "tglsurat" => "required",
            "judul" => "required",
            "tglterima" => "required",
            "id_opd" => "required",
            "tittle" => "required",
            "file_surat" => "file|mimes:pdf|max:5048",
        ])->validated();

        $suratmasuk = suratmasuk::findOrfail($id);
	    $suratmasuk->nodisposisi = $request->get('nodisposisi');
        $suratmasuk->nosurat = $request->get('nosurat');
        $suratmasuk->tglsurat = $request->get('tglsurat');
        $suratmasuk->judul = $request->get('judul');
        $suratmasuk->id_opd = $request->get('id_opd');
        $suratmasuk->tglterima = $request->get('tglterima');
        $suratmasuk->keterangan = $request->get('keterangan');
        if ($request->file('file_surat')) {

            if ($suratmasuk->file_surat && file_exists(storage_path('app/public/'.$suratmasuk->file_surat))){
                Storage::delete('public/'.$suratmasuk->file_surat);
            }
            $file = $request->file('file_surat')->store('file_suratmasuk','public');
            $suratmasuk->file_surat = $file;
            $suratmasuk->tittle = $request->file('file_surat')->getClientOriginalName();
        }
        $suratmasuk->save();

        return redirect()->route('suratmasuk.index')->with('status','Data Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $suratmasuk = suratmasuk::findOrfail($id);
        if ($suratmasuk->file_surat && file_exists(storage_path('app/public/'.$suratmasuk->file_surat))){
            Storage::delete('public/'. $suratmasuk->file_surat);
                }
            $suratmasuk->delete();
            return redirect()->route('suratmasuk.index')->with('Status','Data Berhasil dihapus');
    }
    public function download($id)
    {
        $suratmasuk = suratmasuk::findOrfail($id);
        return response()->download(storage_path('app/public/'. $suratmasuk->file_surat));
    }
    public function cetak_pdf($id)
    {
        Date::setlocale('id');
        //$opd = opd::where('status','ACTIVE')->get();
        $suratmasuk = suratmasuk::findOrfail($id);
        $pdf = PDF::loadview('suratmasuk.cetak',['suratmasuk' => $suratmasuk]);
        return $pdf->stream();
    }
    public function __construct()
    {
        $this->middleware('auth');
    
    }
}
