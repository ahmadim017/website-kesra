<?php

namespace App\Http\Controllers;

use App\Models\file;
use App\Models\tahun;
use App\Models\kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Jenssegers\Date\Date;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Date as FacadesDate;
use Illuminate\Support\Facades\Validator;

class fileController extends Controller
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
            $$file = file::where('tahun','LIKE','%'.$stahun.'%')->get();
        }else{
            $file = file::where('tahun','LIKE','%'.$ta.'%')->get();
        }
        return view('file.index',['file' => $file,'tahun' => $tahun, 'stahun' => $stahun,'ta' => $ta]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kegiatan = kegiatan::all();
        return view('file.create',['kegiatan' => $kegiatan]);

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
            "norekening" => "required",
            "uraian" => "required",
            "nominal" => "required",
            "penyedia" => "required",
            "tglorder" => "required",
            "tglcair" => "required",
            "tanggal" => "required",
            "tglupload" => "required",
            "file" => "required",
            "id_kategori" => "required",
            "tittle" => "required",
        ])->validated();

        $rupiah = $request->get('nominal');
        $pagu = preg_replace("/[^0-9]/","", $rupiah);
        $pagufix = (int) $pagu;

        $tglupload = Carbon::now()->format('Y-m-d');
        $tahun = Carbon::now()->format('Y');
        $file = new file;
        $file->tanggal = $request->get('tanggal');
        $file->norekening = $request->get('norekening');
        $file->uraian = $request->get('uraian');
        $file->nominal = $pagufix ;
        $file->penyedia = $request->get('penyedia');
        $file->tglorder = $request->get('tglorder');
        $file->tglcair = $request->get('tglcair');
        $file->keterangan = $request->get('keterangan');
        $file->id_kegiatan = $request->get('id_kegiatan');
        $file->tglupload = $tglupload;
        $file->tahun = $tahun;
        if ($request->file('file')) {
            $files = $request->file('file')->store('file','public');
            $file->file = $files;
            $file->tittle = $request->file('file')->getClientOriginalName();
        }
        $file->save();

        return redirect()->route('datafile.index')->with('status','File Berhasil Disimpan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $file = file::findOrfail($id);
        return view('file.show',['file' => $file]);
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
        $file = file::find($id);
        if ($file->file && file_exists(storage_path('app/public/'.$file->file))){
            Storage::delete('public/'. $file->file);
                }
                $file->delete();
            return redirect()->route('datafile.index')->with('Status','Data Berhasil dihapus');
    }
    public function download($id)
    {
        $file = file::find($id);
        return response()->download(storage_path('app/public/'. $file->file));
    }
    public function __construct()
    {
        $this->middleware('auth');
    
    }

}
