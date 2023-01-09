<?php

namespace App\Http\Controllers;

use App\Models\catatan;
use App\Models\proposalibadah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class ProposaltempatibadahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catatan = catatan::all();
        $id = auth::user()->id;
        if (Auth::user()->role == "VERIFIKATOR" || Auth::user()->role == "ADMIN") {
            $proposalibadah = proposalibadah::all();
        }elseif (Auth::user()->role == "USER"){
            $proposalibadah = proposalibadah::where('created_by',$id)->get();
        }
        
        return view('proposalibadah.index',['proposalibadah' => $proposalibadah,'catatan' => $catatan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proposalibadah.create');
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
            "namaproposal" => "required",
            "nohp" => "required",
            "alamat" => "required|min:5",
            "kelurahan" => "required",
            "kecamatan" => "required",
            "fileproposal" => "required|file|mimes:pdf|max:5048",
            "sktj" => "required|file|mimes:pdf|max:2048",
            "suratpernyataan" => "required|file|mimes:pdf|max:2048",
            "suratdomisili" => "required|file|mimes:pdf|max:2048",
            "susunankepengurusan" => "required|file|mimes:pdf|max:2048",
            "rekomendasicamat" => "required|file|mimes:pdf|max:2048",
            "rekomendasikemenag" => "required|file|mimes:pdf|max:2048",
            "pernyataantidakkonflik" => "required|file|mimes:pdf|max:2048",
            "buktitanah" => "required|file|mimes:pdf|max:2048",
            "identitaspengurus" => "required|file|mimes:pdf|max:2048",
            "rekening" => "required|file|mimes:pdf|max:2048",
            "denahlokasi" => "required|file|mimes:pdf|max:2048",
            "fotobangunansekretariat" => "required|file|mimes:pdf|max:2048",
            "gambarbangunan" => "file|mimes:pdf|max:2048",
        ],

         $messages = [
            'required' => 'Pastikan isian tidak kosong',
            'mimes' => 'Pastikan File Bertipe PDF',
            'max' => 'file yang di upload maximal 2mb',
         ],
        )->validated($messages);

        $proposalibadah = new proposalibadah();
        $proposalibadah->namaproposal = $request->get('namaproposal');
        $proposalibadah->nohp = $request->get('nohp');
        $proposalibadah->alamat = $request->get('alamat');
        $proposalibadah->kelurahan = $request->get('kelurahan');
        $proposalibadah->kecamatan = $request->get('kecamatan');
        $proposalibadah->created_by = auth::user()->id;
        $proposalibadah->status = 'Pengajuan';

        if ($request->file('fileproposal')) {
            $file = $request->file('fileproposal')->store('fileproposal','public');
            $proposalibadah->fileproposal = $file;
            $request->file('fileproposal')->getClientOriginalExtension();
        }
        if ($request->file('sktj')) {
            $file = $request->file('sktj')->store('sktj','public');
            $proposalibadah->sktj = $file;
            $request->file('sktj')->getClientOriginalExtension();
        }
        if ($request->file('suratpernyataan')) {
            $file = $request->file('suratpernyataan')->store('suratpernyataan','public');
            $proposalibadah->suratpernyataan = $file;
            $request->file('suratpernyataan')->getClientOriginalExtension();
        }
        if ($request->file('suratdomisili')) {
            $file = $request->file('suratdomisili')->store('suratdomisili','public');
            $proposalibadah->suratdomisili = $file;
            $request->file('suratdomisili')->getClientOriginalExtension();
        }
        if ($request->file('susunankepengurusan')) {
            $file = $request->file('susunankepengurusan')->store('susunankepengurusan','public');
            $proposalibadah->susunankepengurusan = $file;
            $request->file('susunankepengurusan')->getClientOriginalExtension();
        }
        if ($request->file('rekomendasicamat')) {
            $file = $request->file('rekomendasicamat')->store('rekomendasicamat','public');
            $proposalibadah->rekomendasicamat = $file;
            $request->file('rekomendasicamat')->getClientOriginalExtension();
        }
        if ($request->file('rekomendasikemenag')) {
            $file = $request->file('rekomendasikemenag')->store('rekomendasikemenag','public');
            $proposalibadah->rekomendasikemenag = $file;
            $request->file('rekomendasikemenag')->getClientOriginalExtension();
        }
        if ($request->file('pernyataantidakkonflik')) {
            $file = $request->file('pernyataantidakkonflik')->store('pernyataantidakkonflik','public');
            $proposalibadah->pernyataantidakkonflik = $file;
            $request->file('pernyataantidakkonflik')->getClientOriginalExtension();
        }
        if ($request->file('buktitanah')) {
            $file = $request->file('buktitanah')->store('buktitanah','public');
            $proposalibadah->buktitanah = $file;
            $request->file('buktitanah')->getClientOriginalExtension();
        }
        if ($request->file('identitaspengurus')) {
            $file = $request->file('identitaspengurus')->store('identitaspengurus','public');
            $proposalibadah->identitaspengurus = $file;
            $request->file('identitaspengurus')->getClientOriginalExtension();
        }
        if ($request->file('rekening')) {
            $file = $request->file('rekening')->store('rekening','public');
            $proposalibadah->rekening = $file;
            $request->file('rekening')->getClientOriginalExtension();
        }
        if ($request->file('denahlokasi')) {
            $file = $request->file('denahlokasi')->store('denahlokasi','public');
            $proposalibadah->denahlokasi = $file;
            $request->file('denahlokasi')->getClientOriginalExtension();
        }
         if ($request->file('fotobangunansekretariat')) {
            $file = $request->file('fotobangunansekretariat')->store('fotobangunansekretariat','public');
            $proposalibadah->fotobangunansekretariat = $file;
            $request->file('fotobangunansekretariat')->getClientOriginalExtension();
        }
        if ($request->file('gambarbangunan')) {
            $file = $request->file('gambarbangunan')->store('gambarbangunan','public');
            $proposalibadah->gambarbangunan = $file;
            $request->file('gambarbangunan')->getClientOriginalExtension();
        }
        $proposalibadah->save();
        return redirect()->route('proposalibadah.index')->with('status','Permohonan anda berhasil di ajukan');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $catatan = catatan::where('id_permohonan',$id)->get();
        $proposalibadah = proposalibadah::findOrfail($id);
        return view('proposalibadah.show',['proposalibadah' => $proposalibadah,'catatan' => $catatan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proposalibadah = proposalibadah::findOrfail($id);
        return view('proposalibadah.edit',['proposalibadah' => $proposalibadah]);
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
            "namaproposal" => "required",
            "nohp" => "required",
            "alamat" => "required|min:5",
            "kelurahan" => "required",
            "kecamatan" => "required",
            "fileproposal" => "file|mimes:pdf|max:5048",
            "sktj" => "file|mimes:pdf|max:2048",
            "suratpernyataan" => "file|mimes:pdf|max:2048",
            "suratdomisili" => "file|mimes:pdf|max:2048",
            "susunankepengurusan" => "file|mimes:pdf|max:2048",
            "rekomendasicamat" => "file|mimes:pdf|max:2048",
            "rekomendasikemenag" => "file|mimes:pdf|max:2048",
            "pernyataantidakkonflik" => "file|mimes:pdf|max:2048",
            "buktitanah" => "file|mimes:pdf|max:2048",
            "identitaspengurus" => "file|mimes:pdf|max:2048",
            "rekening" => "file|mimes:pdf|max:2048",
            "denahlokasi" => "file|mimes:pdf|max:2048",
            "fotobangunansekretariat" => "file|mimes:pdf|max:2048",
            "gambarbangunan" => "file|mimes:pdf|max:2048",
        ],

         $messages = [
            'required' => 'Pastikan isian tidak kosong',
            'mimes' => 'Pastikan File Bertipe PDF',
            'max' => 'file yang di upload maximal 2mb',
         ],
        )->validated($messages);

        $proposalibadah = proposalibadah::findOrfail($id);
        $proposalibadah->namaproposal = $request->get('namaproposal');
        $proposalibadah->nohp = $request->get('nohp');
        $proposalibadah->alamat = $request->get('alamat');
        $proposalibadah->kelurahan = $request->get('kelurahan');
        $proposalibadah->kecamatan = $request->get('kecamatan');
        $proposalibadah->status = 'Perbaikan';

        if ($request->file('fileproposal')) {
            if ($proposalibadah->file && file_exists(storage_path('app/public/'. $proposalibadah->fileproposal))){
                Storage::delete('public/'.  $proposalibadah->fileproposal);
            }
            $file = $request->file('fileproposal')->store('fileproposal','public');
            $proposalibadah->fileproposal = $file;
            $request->file('fileproposal')->getClientOriginalExtension();
        }
        if ($request->file('sktj')) {
            if ($proposalibadah->sktj && file_exists(storage_path('app/public/'. $proposalibadah->sktj))){
                Storage::delete('public/'.  $proposalibadah->sktj);
            }
            $file = $request->file('sktj')->store('sktj','public');
            $proposalibadah->sktj = $file;
            $request->file('sktj')->getClientOriginalExtension();
        }
        if ($request->file('suratpernyataan')) {
            if ($proposalibadah->suratpernyataan && file_exists(storage_path('app/public/'. $proposalibadah->suratpernyataan))){
                Storage::delete('public/'.  $proposalibadah->suratpernyataan);
            }
            $file = $request->file('suratpernyataan')->store('suratpernyataan','public');
            $proposalibadah->suratpernyataan = $file;
            $request->file('suratpernyataan')->getClientOriginalExtension();
        }
        if ($request->file('suratdomisili')) {
            if ($proposalibadah->suratdomisili && file_exists(storage_path('app/public/'. $proposalibadah->suratdomisili))){
                Storage::delete('public/'.  $proposalibadah->suratdomisili);
            }
            $file = $request->file('suratdomisili')->store('suratdomisili','public');
            $proposalibadah->suratdomisili = $file;
            $request->file('suratdomisili')->getClientOriginalExtension();
        }
        if ($request->file('susunankepengurusan')) {
            if ($proposalibadah->susunankepengurusan && file_exists(storage_path('app/public/'. $proposalibadah->susunankepengurusan))){
                Storage::delete('public/'.  $proposalibadah->susunankepengurusan);
            }
            $file = $request->file('susunankepengurusan')->store('susunankepengurusan','public');
            $proposalibadah->susunankepengurusan = $file;
            $request->file('susunankepengurusan')->getClientOriginalExtension();
        }
        if ($request->file('rekomendasicamat')) {
            if ($proposalibadah->rekomendasicamat && file_exists(storage_path('app/public/'. $proposalibadah->rekomendasicamat))){
                Storage::delete('public/'.  $proposalibadah->rekomendasicamat);
            }
            $file = $request->file('rekomendasicamat')->store('rekomendasicamat','public');
            $proposalibadah->rekomendasicamat = $file;
            $request->file('rekomendasicamat')->getClientOriginalExtension();
        }
        if ($request->file('rekomendasikemenag')) {
            if ($proposalibadah->rekomendasikemenag && file_exists(storage_path('app/public/'. $proposalibadah->rekomendasikemenag))){
                Storage::delete('public/'.  $proposalibadah->rekomendasikemenag);
            }
            $file = $request->file('rekomendasikemenag')->store('rekomendasikemenag','public');
            $proposalibadah->rekomendasikemenag = $file;
            $request->file('rekomendasikemenag')->getClientOriginalExtension();
        }
        if ($request->file('pernyataantidakkonflik')) {
            if ($proposalibadah->pernyataantidakkonflik && file_exists(storage_path('app/public/'. $proposalibadah->pernyataantidakkonflik))){
                Storage::delete('public/'.  $proposalibadah->pernyataantidakkonflik);
            }
            $file = $request->file('pernyataantidakkonflik')->store('pernyataantidakkonflik','public');
            $proposalibadah->pernyataantidakkonflik = $file;
            $request->file('pernyataantidakkonflik')->getClientOriginalExtension();
        }
        if ($request->file('buktitanah')) {
            if ($proposalibadah->buktitanah && file_exists(storage_path('app/public/'. $proposalibadah->buktitanah))){
                Storage::delete('public/'.  $proposalibadah->buktitanah);
            }
            $file = $request->file('buktitanah')->store('buktitanah','public');
            $proposalibadah->buktitanah = $file;
            $request->file('buktitanah')->getClientOriginalExtension();
        }
        if ($request->file('identitaspengurus')) {
            if ($proposalibadah->identitaspengurus && file_exists(storage_path('app/public/'. $proposalibadah->identitaspengurus))){
                Storage::delete('public/'.  $proposalibadah->identitaspengurus);
            }
            $file = $request->file('identitaspengurus')->store('identitaspengurus','public');
            $proposalibadah->identitaspengurus = $file;
            $request->file('identitaspengurus')->getClientOriginalExtension();
        }
        if ($request->file('rekening')) {
            if ($proposalibadah->rekening && file_exists(storage_path('app/public/'. $proposalibadah->rekening))){
                Storage::delete('public/'.  $proposalibadah->rekening);
            }
            $file = $request->file('rekening')->store('rekening','public');
            $proposalibadah->rekening = $file;
            $request->file('rekening')->getClientOriginalExtension();
        }
        if ($request->file('denahlokasi')) {
            if ($proposalibadah->denahlokasi && file_exists(storage_path('app/public/'. $proposalibadah->denahlokasi))){
                Storage::delete('public/'.  $proposalibadah->denahlokasi);
            }
            $file = $request->file('denahlokasi')->store('denahlokasi','public');
            $proposalibadah->denahlokasi = $file;
            $request->file('denahlokasi')->getClientOriginalExtension();
        }
         if ($request->file('fotobangunansekretariat')) {
            if ($proposalibadah->fotobangunansekretariat && file_exists(storage_path('app/public/'. $proposalibadah->fotobangunansekretariat))){
                Storage::delete('public/'.  $proposalibadah->fotobangunansekretariat);
            }
            $file = $request->file('fotobangunansekretariat')->store('fotobangunansekretariat','public');
            $proposalibadah->fotobangunansekretariat = $file;
            $request->file('fotobangunansekretariat')->getClientOriginalExtension();
        }
        if ($request->file('gambarbangunan')) {
            if ($proposalibadah->gambarbangunan && file_exists(storage_path('app/public/'. $proposalibadah->gambarbangunan))){
                Storage::delete('public/'.  $proposalibadah->gambarbangunan);
            }
            $file = $request->file('gambarbangunan')->store('gambarbangunan','public');
            $proposalibadah->gambarbangunan = $file;
            $request->file('gambarbangunan')->getClientOriginalExtension();
        }
        $proposalibadah->save();
        return redirect()->route('proposalibadah.index')->with('status','Permohonan anda berhasil diPerbaiki');

        
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
    public function verifikasi($id)
    {
        $proposalibadah = proposalibadah::findOrfail($id);
        if ($proposalibadah->status =='Pengajuan') {
            $proposalibadah->status = 'Verifikasi';
            $proposalibadah->verifikasi = auth::user()->id;
            $proposalibadah->save();
        }
       
        return view('proposalibadah.verifikasi',['proposalibadah' => $proposalibadah]);
    }

    public function proses($id)
    {
        $proposalibadah = proposalibadah::findOrfail($id);
        $proposalibadah->verifikasi = auth::user()->id;
        $proposalibadah->status = 'Diterima';
        $proposalibadah->save();
        return redirect()->route('proposalibadah.index')->with('status','Permohonan Diterima');
    }

   
   
}
