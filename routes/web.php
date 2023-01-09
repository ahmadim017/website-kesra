<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\beritaController;
use App\Http\Controllers\catatanController;
use App\Http\Controllers\gurungajiController;
use App\Http\Controllers\keagamaanController;
use App\Http\Controllers\lembagaController;
use App\Http\Controllers\pengumumanController;
use App\Http\Controllers\ProposallembagaController;
use App\Http\Controllers\ProposaltempatibadahController;
use App\Http\Controllers\videoController;
use App\Http\Controllers\suratkeluarController;
use App\Http\Controllers\suratmasukController;
use App\Http\Controllers\opdController;
use App\Http\Controllers\fileController;
use App\Http\Controllers\kegiatanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

route::get('/', [App\Http\Controllers\beasiswaController::class, 'index'])->name('welcome');

Auth::routes();

Route::get('/reload-captcha', [App\Http\Controllers\Auth\RegisterController::class, 'reloadCaptcha']);
Route::get('/reload-captcha-login', [App\Http\Controllers\Auth\LoginController::class, 'reloadCaptchalogin']);

Route::resource('user', userController::class);

Route::resource('berita', beritaController::class);

Route::resource('video', videoController::class);

Route::resource('rumahibadah', keagamaanController::class);

route::resource('datalembaga', lembagaController::class);

Route::resource('proposalibadah', ProposaltempatibadahController::class);

Route::resource('proposallembaga', ProposallembagaController::class);

Route::resource('pengumuman', pengumumanController::class);

Route::resource('catatan', catatanController::class);

route::resource('gurungaji', gurungajiController::class);

Route::resource('suratmasuk',suratmasukController::class);

Route::resource('suratkeluar',suratkeluarController::class);

Route::resource('opd',opdController::class);

route::resource('datafile', fileController::class);

route::resource('kegiatan', kegiatanController::class);

Route::get('proposalibadah/verifikasi/{id}',[\App\Http\Controllers\ProposaltempatibadahController::class, 'verifikasi'])->name('proposalibadah.verifikasi');
Route::post('proposalibadah/proses/{id}',[\App\Http\Controllers\ProposaltempatibadahController::class, 'proses'])->name('proposalibadah.proses');

Route::get('proposallembaga/verifikasi/{id}',[\App\Http\Controllers\ProposallembagaController::class, 'verifikasi'])->name('proposallembaga.verifikasi');
Route::post('proposallembaga/proses/{id}',[\App\Http\Controllers\ProposallembagaController::class, 'proses'])->name('proposallembaga.proses');
Route::post('proposallembaga/verifikasi/catatan/',[App\http\controllers\catatanController::class, 'lembaga'])->name('catatan.lembaga');

Route::post('reset/{user}/rubah',[\App\Http\Controllers\resetController::class, 'update'])->name('update');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/indexpengumuman', [App\Http\Controllers\beasiswaController::class, 'tampil'])->name('indexpengumuman');
Route::get('/indexpengumuman/download/{id}', [App\Http\Controllers\beasiswaController::class, 'pengumumandownload'])->name('pengumuman.download');
route::get('/indexberita/',[\App\Http\Controllers\beasiswaController::class, 'tampilberita'])->name('indexberita');
route::get('/indexberita/{id}/detail',[\App\Http\Controllers\beasiswaController::class, 'beritashow'])->name('indexberita.detail');
route::get('/datasaranakeagamaan',[\App\Http\Controllers\beasiswaController::class, 'rumahibadah'])->name('rumahibadah.tampil');
route::get('/datakelembagaan',[\App\Http\Controllers\beasiswaController::class, 'datalembaga'])->name('datalembaga.tampil');
route::get('/dataguru',[\App\Http\Controllers\beasiswaController::class, 'gurungaji'])->name('gurungaji.tampil');
route::get('/keagamaan',[\App\Http\Controllers\beasiswaController::class, 'keagamaan'])->name('keagamaan.index');


Route::group(['middleware' => 'auth'], function () {

    route::get('/dasboard', [App\Http\Controllers\dashboardController::class, 'index'])->name('dashboard.index');

    Route::get('/password',[\App\Http\Controllers\passwordController::class, 'password'])->name('user.password');

    Route::patch('password',[\App\Http\Controllers\passwordController::class, 'gantipassword'])->name('user.gantipassword');
});

route::get('/suratkeluar/{id}/download',[\App\Http\Controllers\suratkeluarController::class, 'download'])->name('suratkeluar.download');

route::get('/suratmasuk/{id}/download',[\App\Http\Controllers\suratmasukController::class,'download'])->name('suratmasuk.download');

route::get('/datafile/{id}/download',[\App\Http\Controllers\fileController::class,'download'])->name('file.download');