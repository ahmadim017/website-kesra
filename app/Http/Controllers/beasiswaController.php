<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\gurungaji;
use App\Models\keagamaan;
use App\Models\lembaga;
use App\Models\pengumuman;
use Illuminate\Http\Request;

class beasiswaController extends Controller
{
    public function index()
    {
        
        $pengumuman = pengumuman::paginate(6);
        $berita = berita::where('status','ACTIVE')->latest()->paginate(3);
        return view('welcome',['berita' => $berita,'pengumuman' => $pengumuman]);
    }

    public function tampil()
    {
        $pengumuman = pengumuman::paginate(6);
        return view('pengumuman.tampil',['pengumuman' => $pengumuman]);
    }

    public function pengumumandownload($id)
    {
        $pengumuman = pengumuman::find($id);
        return response()->download(storage_path('app/public/'. $pengumuman->file));
    }

    public function beritashow($id)
    {
        $terkait = berita::where('id','!=', $id)->where('status','ACTIVE')->latest()->paginate(6);
        $pengumuman = pengumuman::latest()->paginate(3);
        $berita = berita::find($id);
        $berita->view +=1;
        $berita->save();
        return view('berita.detail',['berita' => $berita,'terkait' => $terkait,'pengumuman' => $pengumuman]);
    }
    public function tampilberita()
    {
        $berita = berita::latest()->paginate(6);
        return view('berita.tampil',['berita' => $berita]);
    }

    public function keagamaan()
    {
        return view('keagamaan.index');
    }

    public function rumahibadah(Request $request)
    {
        $kecamatan = $request->get('kecamatan');
        if ($kecamatan){
        $rumahibadah = keagamaan::where('kecamatan',$kecamatan)->paginate(10);
        }else{
            $rumahibadah = keagamaan::all();
        }
        return view('rumahibadah.tampil',['rumahibadah' => $rumahibadah,'kecamatan' => $kecamatan]);
    }

    public function datalembaga(Request $request)
    {
        $kecamatan = $request->get('kecamatan');
        if ($kecamatan){
            $lembaga = lembaga::where('kecamatan',$kecamatan)->paginate(10);
        }else{
        $lembaga = lembaga::all();
        }
        return view('datalembaga.tampil',['lembaga' => $lembaga,'kecamatan' => $kecamatan]);
    }

    public function gurungaji(Request $request)
    {
        $kecamatan = $request->get('kecamatan');
        if ($kecamatan){
            $gurungaji = gurungaji::where('kecamatan',$kecamatan)->paginate(10);
        }else{
        $gurungaji = gurungaji::all();
        }
        return view('gurungaji.tampil',['gurungaji' => $gurungaji,'kecamatan' => $kecamatan]);
    }
}
