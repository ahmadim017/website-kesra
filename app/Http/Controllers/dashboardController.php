<?php

namespace App\Http\Controllers;

use App\Models\keagamaan;
use App\Models\proposalibadah;
use App\Models\proposallembaga;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    public function index()
    {
        $keagamaan = proposallembaga::where('status','Pengajuan')->count();
        $ibadah = proposalibadah::where('status','Pengajuan')->count();
        $permohonan = $keagamaan + $ibadah;
        $keagamaanverif = proposallembaga::where('status','Verifikasi')->count();
        $ibadahverif = proposalibadah::where('status','Verifikasi')->count();
        $verifikasi = $keagamaanverif + $ibadahverif;
        $keagamaanterima = proposallembaga::where('status','Diterima')->count();
        $ibadahterima = proposalibadah::where('status','Diterima')->count();
        $diterima = $keagamaanterima +  $ibadahterima;
        $keagamaantidak = proposallembaga::where('status','Tidak Sesuai')->count();
        $ibadahtidak = proposalibadah::where('status','Tidak Sesuai')->count();
        $tidaksesuai = $keagamaantidak +  $ibadahtidak;

        $penajam = keagamaan::where('jenis','Masjid')->where('kecamatan','Penajam')->count();
        $waru = keagamaan::where('jenis','Masjid')->where('kecamatan','Waru')->count();
        $babulu = keagamaan::where('jenis','Masjid')->where('kecamatan','Babuulu')->count();
        $sepaku = keagamaan::where('jenis','Masjid')->where('kecamatan','Sepaku')->count();
        $totalmasjid = [$penajam,$waru,$babulu,$sepaku];

        $penajamm = keagamaan::where('jenis','Mushola')->where('kecamatan','Penajam')->count();
        $warum = keagamaan::where('jenis','Mushola')->where('kecamatan','Waru')->count();
        $babulum = keagamaan::where('jenis','Mushola')->where('kecamatan','Babuulu')->count();
        $sepakum = keagamaan::where('jenis','Mushola')->where('kecamatan','Sepaku')->count();
        $totalmushola = [$penajamm,$warum,$babulum,$sepakum];
        $totalpenajam = $penajam + $penajamm;
        $totalwaru = $waru + $warum;
        $totalbabulu = $babulu + $babulum;
        $totalsepaku = $sepaku + $sepakum;
        $totalkecamatan = [$totalpenajam,$totalwaru,$totalbabulu,$totalsepaku];

        $gurungaji = DB::table('gurungaji')->select(DB::raw('count(*) as total, kecamatan'))
        ->where('kecamatan','<>',1)->groupBy('kecamatan')->get();
        $data = [];

        foreach ($gurungaji as $u) {
            $data[] = [$u->kecamatan,$u->total];
        }
        
        return view('dashboard.index',['data' => $data,'totalkecamatan'=> $totalkecamatan,'totalmushola' => $totalmushola,'totalmasjid'=> $totalmasjid,'permohonan' => $permohonan,'verifikasi' => $verifikasi,'diterima' => $diterima,'tidaksesuai' => $tidaksesuai,'keagamaan' => $keagamaan,'ibadah' => $ibadah]);
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
