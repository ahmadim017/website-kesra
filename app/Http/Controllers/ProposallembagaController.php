<?php

namespace App\Http\Controllers;

use App\Models\catatan;
use App\Models\proposallembaga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class ProposallembagaController extends Controller
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
            $proposallembaga = proposallembaga::all();
        }elseif (Auth::user()->role == "USER"){
            $proposallembaga = proposallembaga::where('created_by',$id)->get();
        }
        return view('proposallembaga.index',['proposallembaga' => $proposallembaga,'catatan' => $catatan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proposallembaga.create');
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
            "npwp" => "required|file|mimes:pdf|max:2048",
            "aktanotaris" => "required|file|mimes:pdf|max:2048",
            "izinoperasional" => "required|file|mimes:pdf|max:2048",
            "terdaftarkesbanglimas" => "required|file|mimes:pdf|max:2048",
            "buktisewagedung" => "required|file|mimes:pdf|max:2048",
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

        $proposallembaga = new proposallembaga();
        $proposallembaga->namaproposal = $request->get('namaproposal');
        $proposallembaga->nohp = $request->get('nohp');
        $proposallembaga->alamat = $request->get('alamat');
        $proposallembaga->kelurahan = $request->get('kelurahan');
        $proposallembaga->kecamatan = $request->get('kecamatan');
        $proposallembaga->created_by = auth::user()->id;
        $proposallembaga->status = 'Pengajuan';

        if ($request->file('fileproposal')) {
            $file = $request->file('fileproposal')->store('fileproposal','public');
            $proposallembaga->fileproposal = $file;
            $request->file('fileproposal')->getClientOriginalExtension();
        }
        if ($request->file('sktj')) {
            $file = $request->file('sktj')->store('sktj','public');
            $proposallembaga->sktj = $file;
            $request->file('sktj')->getClientOriginalExtension();
        }
        if ($request->file('suratpernyataan')) {
            $file = $request->file('suratpernyataan')->store('suratpernyataan','public');
            $proposallembaga->suratpernyataan = $file;
            $request->file('suratpernyataan')->getClientOriginalExtension();
        }
        if ($request->file('suratdomisili')) {
            $file = $request->file('suratdomisili')->store('suratdomisili','public');
            $proposallembaga->suratdomisili = $file;
            $request->file('suratdomisili')->getClientOriginalExtension();
        }
        if ($request->file('susunankepengurusan')) {
            $file = $request->file('susunankepengurusan')->store('susunankepengurusan','public');
            $proposallembaga->susunankepengurusan = $file;
            $request->file('susunankepengurusan')->getClientOriginalExtension();
        }
        if ($request->file('rekomendasicamat')) {
            $file = $request->file('rekomendasicamat')->store('rekomendasicamat','public');
            $proposallembaga->rekomendasicamat = $file;
            $request->file('rekomendasicamat')->getClientOriginalExtension();
        }
        if ($request->file('npwp')) {
            $file = $request->file('npwp')->store('npwp','public');
            $proposallembaga->npwp = $file;
            $request->file('npwp')->getClientOriginalExtension();
        }
        if ($request->file('aktanotaris')) {
            $file = $request->file('aktanotaris')->store('aktanotaris','public');
            $proposallembaga->aktanotaris = $file;
            $request->file('aktanotaris')->getClientOriginalExtension();
        }
        if ($request->file('izinoperasional')) {
            $file = $request->file('izinoperasional')->store('izinoperasional','public');
            $proposallembaga->izinoperasional = $file;
            $request->file('izinoperasional')->getClientOriginalExtension();
        }
        if ($request->file('terdaftarkesbanglimas')) {
            $file = $request->file('terdaftarkesbanglimas')->store('terdaftarkesbanglimas','public');
            $proposallembaga->terdaftarkesbanglimas = $file;
            $request->file('terdaftarkesbanglimas')->getClientOriginalExtension();
        }
        if ($request->file('buktisewagedung')) {
            $file = $request->file('buktisewagedung')->store('buktisewagedung','public');
            $proposallembaga->buktisewagedung = $file;
            $request->file('buktisewagedung')->getClientOriginalExtension();
        }
        if ($request->file('pernyataantidakkonflik')) {
            $file = $request->file('pernyataantidakkonflik')->store('pernyataantidakkonflik','public');
            $proposallembaga->pernyataantidakkonflik = $file;
            $request->file('pernyataantidakkonflik')->getClientOriginalExtension();
        }
        if ($request->file('buktitanah')) {
            $file = $request->file('buktitanah')->store('buktitanah','public');
            $proposallembaga->buktitanah = $file;
            $request->file('buktitanah')->getClientOriginalExtension();
        }
        if ($request->file('identitaspengurus')) {
            $file = $request->file('identitaspengurus')->store('identitaspengurus','public');
            $proposallembaga->identitaspengurus = $file;
            $request->file('identitaspengurus')->getClientOriginalExtension();
        }
        if ($request->file('rekening')) {
            $file = $request->file('rekening')->store('rekening','public');
            $proposallembaga->rekening = $file;
            $request->file('rekening')->getClientOriginalExtension();
        }
        if ($request->file('denahlokasi')) {
            $file = $request->file('denahlokasi')->store('denahlokasi','public');
            $proposallembaga->denahlokasi = $file;
            $request->file('denahlokasi')->getClientOriginalExtension();
        }
         if ($request->file('fotobangunansekretariat')) {
            $file = $request->file('fotobangunansekretariat')->store('fotobangunansekretariat','public');
            $proposallembaga->fotobangunansekretariat = $file;
            $request->file('fotobangunansekretariat')->getClientOriginalExtension();
        }
        if ($request->file('gambarbangunan')) {
            $file = $request->file('gambarbangunan')->store('gambarbangunan','public');
            $proposallembaga->gambarbangunan = $file;
            $request->file('gambarbangunan')->getClientOriginalExtension();
        }
        $proposallembaga->save();
        return redirect()->route('proposallembaga.index')->with('status','Permohonan anda berhasil di ajukan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $catatan = catatan::where('id_lembaga',$id)->get();
        $proposallembaga = proposallembaga::findOrfail($id);
        return view('proposallembaga.show',['proposallembaga' => $proposallembaga,'catatan' => $catatan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proposallembaga = proposallembaga::findOrfail($id);
        return view('proposallembaga.edit',['proposallembaga' => $proposallembaga]);
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
            "npwp" => "file|mimes:pdf|max:2048",
            "aktanotaris" => "file|mimes:pdf|max:2048",
            "izinoperasional" => "file|mimes:pdf|max:2048",
            "terdaftarkesbanglimas" => "file|mimes:pdf|max:2048",
            "buktisewagedung" => "file|mimes:pdf|max:2048",
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

        $proposallembaga = proposallembaga::findOrfail($id);
        $proposallembaga->namaproposal = $request->get('namaproposal');
        $proposallembaga->nohp = $request->get('nohp');
        $proposallembaga->alamat = $request->get('alamat');
        $proposallembaga->kelurahan = $request->get('kelurahan');
        $proposallembaga->kecamatan = $request->get('kecamatan');
        $proposallembaga->status = 'Perbaikan';

        if ($request->file('fileproposal')) {
            if ( $proposallembaga->fileproposal && file_exists(storage_path('app/public/'. $proposallembaga->fileproposal))){
                Storage::delete('public/'. $proposallembaga->fileproposal);
            }
            $file = $request->file('fileproposal')->store('fileproposal','public');
            $proposallembaga->fileproposal = $file;
            $request->file('fileproposal')->getClientOriginalExtension();
        }
        if ($request->file('sktj')) {
            if ( $proposallembaga->sktj && file_exists(storage_path('app/public/'. $proposallembaga->sktj))){
                Storage::delete('public/'. $proposallembaga->sktj);
            }
            $file = $request->file('sktj')->store('sktj','public');
            $proposallembaga->sktj = $file;
            $request->file('sktj')->getClientOriginalExtension();
        }
        if ($request->file('suratpernyataan')) {
            if ( $proposallembaga->suratpernyataan && file_exists(storage_path('app/public/'. $proposallembaga->suratpernyataan))){
                Storage::delete('public/'.$proposallembaga->suratpernyataan);
            }
            $file = $request->file('suratpernyataan')->store('suratpernyataan','public');
            $proposallembaga->suratpernyataan = $file;
            $request->file('suratpernyataan')->getClientOriginalExtension();
        }
        if ($request->file('suratdomisili')) {
            if ($proposallembaga->suratdomisili && file_exists(storage_path('app/public/'.$proposallembaga->suratdomisili))){
                Storage::delete('public/'.$proposallembaga->suratdomisili);
            }
            $file = $request->file('suratdomisili')->store('suratdomisili','public');
            $proposallembaga->suratdomisili = $file;
            $request->file('suratdomisili')->getClientOriginalExtension();
        }
        if ($request->file('susunankepengurusan')) {
            if ($proposallembaga->susunankepengurusan && file_exists(storage_path('app/public/'. $proposallembaga->susunankepengurusan))){
                Storage::delete('public/'.$proposallembaga->susunankepengurusan);
            }
            $file = $request->file('susunankepengurusan')->store('susunankepengurusan','public');
            $proposallembaga->susunankepengurusan = $file;
            $request->file('susunankepengurusan')->getClientOriginalExtension();
        }
        if ($request->file('rekomendasicamat')) {
            if ($proposallembaga->rekomendasicamat && file_exists(storage_path('app/public/'.$proposallembaga->rekomendasicamat))){
                Storage::delete('public/'.$proposallembaga->rekomendasicamat);
            }
            $file = $request->file('rekomendasicamat')->store('rekomendasicamat','public');
            $proposallembaga->rekomendasicamat = $file;
            $request->file('rekomendasicamat')->getClientOriginalExtension();
        }
        if ($request->file('npwp')) {
            if ($proposallembaga->npwp && file_exists(storage_path('app/public/'.$proposallembaga->npwp))){
                Storage::delete('public/'.$proposallembaga->npwp);
            }
            $file = $request->file('npwp')->store('npwp','public');
            $proposallembaga->npwp = $file;
            $request->file('npwp')->getClientOriginalExtension();
        }
        if ($request->file('aktanotaris')) {
            if ($proposallembaga->aktanotaris && file_exists(storage_path('app/public/'.$proposallembaga->aktanotaris))){
                Storage::delete('public/'.$proposallembaga->aktanotaris);
            }
            $file = $request->file('aktanotaris')->store('aktanotaris','public');
            $proposallembaga->aktanotaris = $file;
            $request->file('aktanotaris')->getClientOriginalExtension();
        }
        if ($request->file('izinoperasional')) {
            if ($proposallembaga->izinoperasional && file_exists(storage_path('app/public/'.$proposallembaga->izinoperasional))){
                Storage::delete('public/'.$proposallembaga->izinoperasional);
            }
            $file = $request->file('izinoperasional')->store('izinoperasional','public');
            $proposallembaga->izinoperasional = $file;
            $request->file('izinoperasional')->getClientOriginalExtension();
        }
        if ($request->file('terdaftarkesbanglimas')) {
            if ($proposallembaga->terdaftarkesbanglimas && file_exists(storage_path('app/public/'.$proposallembaga->terdaftarkesbanglimas))){
                Storage::delete('public/'.$proposallembaga->terdaftarkesbanglimas);
            }
            $file = $request->file('terdaftarkesbanglimas')->store('terdaftarkesbanglimas','public');
            $proposallembaga->terdaftarkesbanglimas = $file;
            $request->file('terdaftarkesbanglimas')->getClientOriginalExtension();
        }
        if ($request->file('buktisewagedung')) {
            if ($proposallembaga->buktisewagedung && file_exists(storage_path('app/public/'.$proposallembaga->buktisewagedung))){
                Storage::delete('public/'.$proposallembaga->buktisewagedung);
            }
            $file = $request->file('buktisewagedung')->store('buktisewagedung','public');
            $proposallembaga->buktisewagedung = $file;
            $request->file('buktisewagedung')->getClientOriginalExtension();
        }
        if ($request->file('pernyataantidakkonflik')) {
            if ($proposallembaga->pernyataantidakkonflik && file_exists(storage_path('app/public/'.$proposallembaga->pernyataantidakkonflik))){
                Storage::delete('public/'.$proposallembaga->pernyataantidakkonflik);
            }
            $file = $request->file('pernyataantidakkonflik')->store('pernyataantidakkonflik','public');
            $proposallembaga->pernyataantidakkonflik = $file;
            $request->file('pernyataantidakkonflik')->getClientOriginalExtension();
        }
        if ($request->file('buktitanah')) {
            if ($proposallembaga->buktitanah && file_exists(storage_path('app/public/'.$proposallembaga->buktitanah))){
                Storage::delete('public/'.$proposallembaga->buktitanah);
            }
            $file = $request->file('buktitanah')->store('buktitanah','public');
            $proposallembaga->buktitanah = $file;
            $request->file('buktitanah')->getClientOriginalExtension();
        }
        if ($request->file('identitaspengurus')) {
            if ($proposallembaga->identitaspengurus && file_exists(storage_path('app/public/'. $proposallembaga->identitaspengurus))){
                Storage::delete('public/'.$proposallembaga->identitaspengurus);
            }
            $file = $request->file('identitaspengurus')->store('identitaspengurus','public');
            $proposallembaga->identitaspengurus = $file;
            $request->file('identitaspengurus')->getClientOriginalExtension();
        }
        if ($request->file('rekening')) {
            if ( $proposallembaga->rekening && file_exists(storage_path('app/public/'. $proposallembaga->rekening))){
                Storage::delete('public/'.  $proposallembaga->rekening);
            }
            $file = $request->file('rekening')->store('rekening','public');
            $proposallembaga->rekening = $file;
            $request->file('rekening')->getClientOriginalExtension();
        }
        if ($request->file('denahlokasi')) {
            if ( $proposallembaga->denahlokasi && file_exists(storage_path('app/public/'.  $proposallembaga->denahlokasi))){
                Storage::delete('public/'.$proposallembaga->denahlokasi);
            }
            $file = $request->file('denahlokasi')->store('denahlokasi','public');
            $proposallembaga->denahlokasi = $file;
            $request->file('denahlokasi')->getClientOriginalExtension();
        }
         if ($request->file('fotobangunansekretariat')) {
            if ($proposallembaga->fotobangunansekretariat && file_exists(storage_path('app/public/'. $proposallembaga->fotobangunansekretariat))){
                Storage::delete('public/'.  $proposallembaga->fotobangunansekretariat);
            }
            $file = $request->file('fotobangunansekretariat')->store('fotobangunansekretariat','public');
            $proposallembaga->fotobangunansekretariat = $file;
            $request->file('fotobangunansekretariat')->getClientOriginalExtension();
        }
        if ($request->file('gambarbangunan')) {
            if ($proposallembaga->gambarbangunan && file_exists(storage_path('app/public/'. $proposallembaga->gambarbangunan))){
                Storage::delete('public/'.  $proposallembaga->gambarbangunan);
            }
            $file = $request->file('gambarbangunan')->store('gambarbangunan','public');
            $proposallembaga->gambarbangunan = $file;
            $request->file('gambarbangunan')->getClientOriginalExtension();
        }
        $proposallembaga->save();
        return redirect()->route('proposallembaga.index')->with('status','Permohonan anda berhasil di Perbaiki');
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
        $proposallembaga = proposallembaga::findOrfail($id);
        if ($proposallembaga->status =='Pengajuan') {
            $proposallembaga->status = 'Verifikasi';
            $proposallembaga->verifikasi = auth::user()->id;
            $proposallembaga->save();
        }
       
        return view('proposallembaga.verifikasi',['proposallembaga' => $proposallembaga]);
    }

    public function proses($id)
    {
        $proposallembaga = proposallembaga::findOrfail($id);
        $proposallembaga->verifikasi = auth::user()->id;
        $proposallembaga->status = 'Diterima';
        $proposallembaga->save();
        return redirect()->route('proposallembaga.index')->with('status','Permohonan Diterima');
    }
}
