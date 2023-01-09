@extends('layouts.detail')

@section('content')
<div class="mx-auto my-16">
    <div class="" style="height:200px;">
      <div class="flex flex-wrap justify-center text-center py-14">
        <div class="w-full px-4">
          <h1 class="text-4xl font-bold text-white" style="font-family: 'Quicksand', sans-serif;">Hibah Bidang Keagamaan</h1>
        </div>
      </div>
    </div>
  </div>

  <div id="blog" class="bg-white px-4 xl:px-4 py-14">
    <div class="mx-auto container">
      <nav class="flex" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
          <li class="inline-flex items-center">
            <a href="{{route('welcome')}}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
            <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
            Home
            </a>
          </li>
          <li>
            <div class="flex items-center">
            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
            <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">Hibah Bidang Keagamaan</a>
            </div>
        </li>
          <li>
              <div class="flex items-center">
              <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
              <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">Selengkapnya</a>
              </div>
          </li>
         
        </ol>
        </nav>
        <hr class="mt-3 mb-5">
        
        <section class="" style="font-family: 'Quicksand', sans-serif;">
            <div class="container mx-auto m-8">
            <h1 class="w-full my-2 mt-12 text-4xl font-bold leading-tight text-center text-gray-800">
                PROSEDUR DAN PERSYARATAN PENGAJUAN HIBAH
              </h1>
              <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
              </div>
              <div class="flex flex-wrap mb-6">
                <div class="w-full sm:w-1/3 p-6">
                  <img class="w-full z-50" src="{{asset('img/keagamaan.png')}}" style="width:500px;height:500px;"/>
                </div>
                <div class="w-5/6 sm:w-2/3 p-3">
                  <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                    Pengajuan Hibah Rumah Ibadah/ Ponpes/ Kelompok Swadaya
                  </h3>
                  <p class="text-gray-600 mb-8 text-justify">
                    Pengajuan permohonon hibah keagamaan dapat diajukan secara online melalui laman Website Resmi <a href="#"><u>Kesra.setda.penajamkab.go.id</u></a> dengan registrasi akun terlebih dahulu kemudian mengisi Form Pengajuan Hibah yang meliputi Identitas Pemohon Hibah dan Dokumen Pendukung. 
                    Panduan pengisian dapat dilihat di menu Panduan Pengajuan. Selanjutnya, permohonan yang telah diajukan akan diverifikasi oleh Bagian Kesejahteraan Rakyat. Permohonan yang telah terverifikasi akan ditampilkan di laman website resmi <a href="#"><u>Kesra.setda.penajamkab.go.id</u></a>. 
                    Kemudian akan usulkan sebagai Calon Penerima Hibah kepada Bupati Penajam Paser Utara sesuai prosedur yang diatur dalam perundang-undangan. <br>
                  </p>
                  <h3 class="text-xl text-gray-800 font-bold leading-none mb-3">
                    Persyaratan yang wajib dipenuhi dalam Pengajuan Permohonan Hibah Rumah Ibadah/Ponpes/Kelompok Swadaya.
                  </h3><br>
                  <p class="text-lg text-gray-800 font-bold leading-none mb-3">Berikut adalah Daftar Isian dalam Formulir Permohonan Hibah Keagamaan :</p>
                  <ul class="list-disc list-outside text-gray-600 ml-6">
                    <li>Nama Proposal.</li>
                    <li>Nomor Telp/HP.</li>
                    <li>Alamat.</li>
                    <li>Kelurahan/Desa.</li>
                    <li>Kecamatan.</li>
                  </ul>
                  <h3 class="text-xl text-gray-800 font-bold leading-none mb-3 mt-3">
                    Persyaratan Dokumen Yang wajib di Upload, maximal 5mb dan Bertipe PDF.
                  </h3>
                  <ul class="list-disc list-outside text-gray-600 ml-6">
                    <li>Proposal Permohonan Kepada Bupati Penajam Paser Utara yang terdiri dari (Latar Belakang, maksud dan tujuan, rinican rencana kegiatan, jadwal kegiatan dan rincian anggaran belanja).</li>
                    <li>Surat Keterangan Tanggung Jawab.</li>
                    <li>Surat Pernyataan Menyediakan Dana Pendamping.</li>
                    <li>Surat Keterangan Domisili.</li>
                    <li>Rekomendasi Camat.</li>
                    <li>Rekomendasi Kantor Kementerian Agama Kab.PPU.</li>
                    <li>Surat Pernyataan Tidak Terjadi Konflik diketahui Lurah/ Kepala Desa.</li>
                    <li>Bukti Kepemilikan Tanah.</li>
                    <li>scan Document KTP Pengurus (Ketua, Sekretaris, dan Bendahara).</li>
                    <li>Scan Rekening Bank Kaltimtara atas nama Pengurus/Lembaga.</li>
                    <li>Denah Lokasi Sekretariat /Bangunan.</li>
                    <li>Foto Bangunan Sekretariat dan Plang Sekretariat.</li>
                    <li>Gambar Rencana Bangunan (Bagi Penggunaan Bangunan /Fisik Baru).</li>
                  </ul> 
              
                
                </div>

              </div>
            </div>
        </section>
        <section class=" gradient">
            <div class="container mx-auto py-3" style="font-family: 'Quicksand', sans-serif;"> 
                <h1 class="w-full xl:text-xl sm:text-md md:text-lg font-bold leading-tight text-center text-white">
                    Ajukan Permohonan, Jika Belum Punya Akun Registrasi/Login Disini. <a href="{{route('login')}}" target="_blank" class="mx-auto lg:mx-0 hover:underline bg-gray-400 text-white font-bold rounded-full my-2 py-1 px-3 xl:text-xl sm:text-md md:text-lg shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                        Login
                      </a>
                </h1>
               
          
              </div>
        </section>
        <section style="font-family: 'Quicksand', sans-serif;">
                
                <div class="flex flex-wrap mt-12">
                    
                    <div class="w-5/6 sm:w-2/3 p-3">
                      <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                        Pengajuan Hibah Organisasi Kemasyarakatan Keagamaan
                      </h3>
                      <p class="text-gray-600 mb-8 text-justify">
                        Pengajuan permohonon hibah keagamaan dapat diajukan secara online melalui laman Website Resmi <a href="#"><u>Kesra.setda.penajamkab.go.id</u></a> dengan registrasi akun terlebih dahulu kemudian mengisi Form Pengajuan Hibah yang meliputi Identitas Pemohon Hibah dan Dokumen Pendukung. 
                        Panduan pengisian dapat dilihat di menu Panduan Pengajuan. Selanjutnya, permohonan yang telah diajukan akan diverifikasi oleh Bagian Kesejahteraan Rakyat. Permohonan yang telah terverifikasi akan ditampilkan di laman website resmi <a href="#"><u>Kesra.setda.penajamkab.go.id</u></a>. 
                        Kemudian akan usulkan sebagai Calon Penerima Hibah kepada Bupati Penajam Paser Utara sesuai prosedur yang diatur dalam perundang-undangan. <br>
                      </p>
                      <h3 class="text-xl text-gray-800 font-bold leading-none mb-3">
                        Persyaratan yang wajib dipenuhi dalam Pengajuan Permohonan Hibah Organisasi Kemasyarakatan Keagamaan.
                      </h3><br>
                      <p class="text-lg text-gray-800 font-bold leading-none mb-3">Berikut adalah Daftar Isian dalam Formulir Permohonan Hibah Keagamaan :</p>
                      <ul class="list-disc list-outside text-gray-600 ml-6">
                        <li>Nama Proposal.</li>
                        <li>Nomor Telp/HP.</li>
                        <li>Alamat.</li>
                        <li>Kelurahan/Desa.</li>
                        <li>Kecamatan.</li>
                      </ul>
                      <h3 class="text-xl text-gray-800 font-bold leading-none mb-3 mt-3">
                        Persyaratan Dokumen Yang wajib di Upload, maximal 5mb dan Bertipe PDF.
                      </h3>
                      <ul class="list-disc list-outside text-gray-600 ml-6">
                        <li>Proposal Permohonan Kepada Bupati Penajam Paser Utara yang terdiri dari (Latar Belakang, maksud dan tujuan, rinican rencana kegiatan, jadwal kegiatan dan rincian anggaran belanja).</li>
                        <li>Surat Keterangan Tanggung Jawab.</li>
                        <li>Surat Keterangan Domisili.</li>
                        <li>Susunan Kepengurusan</li>
                        <li>Akta Notaris</li>
                        <li>Surat Keterangan Terdaftar pada Kesbanglimas Kab.PPU (min. 3 Tahun).</li>
                        <li>Nomor Pokok Wajin Pajak (NPWP)</li>
                        <li>Izin Operasional / Tanda Daftar Lembaga dari Instansi Berwenang</li>
                        <li>Bukti Kontrak Sewa Gedung/Bangunan (bagi yang menyewa)</li>
                        <li>Rekomendasi Camat.</li>
                        <li>Surat Pernyataan Tidak Terjadi Konflik diketahui Lurah/ Kepala Desa.</li>
                        <li>Bukti Kepemilikan Tanah.</li>
                        <li>scan Document KTP Pengurus (Ketua, Sekretaris, dan Bendahara).</li>
                        <li>Scan Rekening Bank Kaltimtara atas nama Pengurus/Lembaga.</li>
                        <li>Denah Lokasi Sekretariat /Bangunan.</li>
                        <li>Foto Bangunan Sekretariat dan Plang Sekretariat.</li>
                        <li>Gambar Rencana Bangunan (Bagi Penggunaan Bangunan /Fisik Baru).</li>
                      </ul> 
                     
                    </div>
                    <div class="w-full sm:w-1/3 p-6">
                        <img class="w-full z-50" src="{{asset('img/ormas.png')}}" style="width:450px;height:450px;"/>
                      </div>
                </div>
             
        </section>
        <section>
          <div class="container mx-auto py-3" style="font-family: 'Quicksand', sans-serif;"> 
            <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
              CATATAN PENTING :
            </h3>
           
            <ul class="list-disc list-outside text-gray-600 ml-6">
                <li>Disarankan untuk menggunakan Browser Chrome untuk optimalisasi upload dokumen persyaratan (tidak disarankan menggunakan mozilla firefox, Opera, ataupun IE)</li>
                <li>Jika ingin melakukan proses scanning dokumen (menjadi bentuk Pdf) dapat memanfaatkan aplikasi scanner berbasis android. Simak rekomendasi aplikasinya <a target="_blank" class="hover:underline text-emerald-700" href="https://jalantikus.com/tips/aplikasi-scanner-pemindai-dokumen-android/"><i>di sini.</i> </a> </li>
                <li>Untuk menggabungkan beberapa foto menjadi satu file Pdf dapat menggunakan situs online yang direkomendasikan <a target="_blank" class="hover:underline text-emerald-700" href="https://smallpdf.com/id/jpg-ke-pdf"><i>disini</i> </a> atau <a target="_blank" class="hover:underline text-emerald-700" href="https://www.ilovepdf.com/jpg_to_pdf"><i>disini.</i> </a></li>
                <li>Untuk mengecilkan (kompres) ukuran Pdf dapat menggunakan situs online yang direkomendasikan <a target="_blank" class="hover:underline text-emerald-700" href="https://www.ilovepdf.com/compress_pdf"><i>disini</i> </a> atau <a target="_blank" class="hover:underline text-emerald-700" href="https://smallpdf.com/id/mengompres-pdf"><i>disini.</i> </a></li>
            </ul>
            </div>
        </section>
  </div>
  </div>
@endsection