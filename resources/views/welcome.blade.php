<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="icon" type="image/png" sizes="192x192" href="{{asset('img/apple-icon.png')}}">
  <title>Sekretariat Daerah - Bagian Kesra</title>
 
<script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;622&family=Quicksand:wght@700&family=Roboto&display=swap" rel="stylesheet">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--Replace with your tailwind.css once created-->
@yield('header')
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
<link href="{{asset('asset/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<!-- Define your gradient here - use online tools to find a gradient matching your branding-->
<style>
  .gradient {
    background: linear-gradient(90deg, #047857 0%, #374151 100%);
  }
 
</style>
</head>
<body class="leading-normal tracking-normal text-white bg-gradient-to-r from-emerald-700 to-gray-700">
  <a id="button" class="bg-emerald-700 hover:bg-emerald-800 hover:underline focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"></a>
    <div class="w-full text-gray-700 bg-white/50 backdrop-blur-lg  fixed top-0 left-0 z-10">
    <nav class=" border-gray-200 px-2 sm:px-4 py-2.5 rounded " style="font-family: 'Quicksand', sans-serif;">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
    <a href="#home" class="flex items-center">
        <img src="{{asset('img/logo_kesra.png')}}" class="mr-3 h-6 sm:h-9 transform transition hover:scale-105 duration-300 ease-in-out"/>
        <span class="self-center text-xl font-semibold whitespace-nowrap"></span>
    </a>
    <div class="flex md:order-2">
        <a href="{{route('login')}}" class="text-white bg-emerald-700 hover:bg-emerald-800 hover:underline focus:outline-none font-medium rounded-full transform transition hover:scale-105 duration-300 ease-in-out text-sm px-5 py-2.5 text-center mr-3 md:mr-0 ">Login</a>
        <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-cta" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
      </button>
    </div>
    <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="navbar-cta">
      <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
        <li>
          <a href="#home" class="block py-2 pr-4 pl-3 text-white bg-emerald-700 rounded md:bg-transparent md:text-emerald-700 md:p-0 dark:text-white" aria-current="page">Home</a>
        </li>
        <li>
          <a href="#lembaga" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-emerald-700 md:p-0 ">Sistem Informasi Lembaga</a>
        </li>
        <li>
          <a href="#hibah" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-emerald-700 md:p-0 ">Hibah Bidang Keagamaan</a>
        </li>
        
        <li>
          <a href="#beasiswa" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-emerald-700 md:p-0 ">Beasiswa</a>
        </li>
        <li>
          <a href="#bnk" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-emerald-700 md:p-0 ">BNK</a>
        </li>
        <li>
            <a href="#pengumuman" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-emerald-700 md:p-0 ">Pengumuman</a>
          </li>
        <li>
          <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex justify-between items-center py-2 pr-4 pl-3 w-full font-medium text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-emerald-700 md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Informasi<svg class="ml-1 w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
            <!-- Dropdown menu -->
            <div id="dropdownNavbar" class="hidden z-10 w-44 font-normal bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
              <ul class="py-1 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                <li>
                  <a href="{{route('indexpengumuman')}}" class="block py-2 px-4 hover:bg-gray-100 ">Pengumuman</a>
                </li>
                <li>
                  <a href="{{route('indexberita')}}" class="block py-2 px-4 hover:bg-gray-100 ">Berita</a>
                </li>
              </ul>
          </div>
         </li>
         <li>
          <a href="#kontak" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-emerald-700 md:p-0 ">Kontak Kami</a>
        </li>
      </ul>
    </div>
    </div>
  </nav>
    </div>
    <section class="bg-white py-8">
    </section>
  <section id="home">
  <div class="pt-4">
    <div class="container px-6 mx-auto flex flex-wrap flex-col md:flex-row items-center">
      <!--Left Col-->
      <div class="flex flex-col w-full md:w-2/4 justify-center items-start text-center md:text-left">
        <p class="uppercase xl:text-3xl md:text-2xl sm:text-xl tracking-loose w-full mt-3" style="font-family: 'Roboto', sans-serif;"> Selamat Datang Di</p>
        <h1 class="my-4 xl:text-4xl md:text-2xl sm:text-xl font-bold leading-tight" style="font-family: 'Roboto', sans-serif;">
          PEMERINTAH KABUPATEN PENAJAM PASER UTARA <span class="t text-amber-200"></span>
        </h1>
        <p class="uppercase xl:text-3xl md:text-2xl sm:text-xl tracking-loose w-full" style="font-family: 'Roboto', sans-serif;"> Sekretariat Daerah Bagian Kesra</p>
      </div>
      <!--Right Col-->
      <div class="w-full md:w-2/4 justify-end mb-8">
        <img class="w-full z-50" src="{{asset('img/bupati4.png')}}" style="width:420px;height:420px;" />
      </div>
    </div>
  </div>
  <div class="relative -mt-12 lg:-mt-24">
    <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
          <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
          <path
            d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
            opacity="0.100000001"
          ></path>
          <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
        </g>
        <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
          <path
            d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"
          ></path>
        </g>
      </g>
    </svg>
  </div>
  </section>
  <section id="lembaga" class="bg-white py-3">
    <div class="container mx-auto m-8">
      <h1 class="w-full my-2 mt-12 text-4xl font-bold leading-tight text-center text-gray-800 " style="font-family: 'Quicksand', sans-serif;">
          Sistem Informasi Lembaga
        </h1>
        <div class="w-full mb-12">
          <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div class="flex justify-center px-4 xl:px-0 py-4">
          <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 pb-6 gap-8">
            <div class="max-w-sm bg-white  rounded-lg  shadow-md transform transition hover:scale-105 duration-300 ease-in-out">
              <a href="{{route('datalembaga.tampil')}}">
              <div class="p-5">
                <div class="flex justify-center">
                <div class="text-white p-3 text-center inline-flex items-center justify-center w-20 h-20 mb-6 shadow-lg rounded-full bg-emerald-700">
                  <i class="fa-solid fa-building-columns text-3xl"></i>
                </div>
                </div>
                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 text-center" style="font-family: 'Quicksand', sans-serif;">Data Kelembagaan</h5>
                    <h1 class="text-lg text-gray-700 text-center">
                    Menyediakan data data kelembagaan seperti Madrasah Diniah, Taman Kanak-Kanak Al-Quran, Taman Pendidikan Al-Quran dan Pesantren.</h1>
              </div>
            </a>
          </div>

          <div class="max-w-sm bg-white  rounded-lg shadow-md transform transition hover:scale-105 duration-300 ease-in-out">
            <a href="{{route('rumahibadah.tampil')}}">
            <div class="p-5">
              <div class="flex justify-center">
              <div class="text-white p-3 text-center inline-flex items-center justify-center w-20 h-20 mb-6 shadow-lg rounded-full bg-emerald-700">
                <i class="fa-solid fa-mosque text-3xl"></i>
              </div>
              </div>
                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 text-center" style="font-family: 'Quicksand', sans-serif;">Data Sarana Keagamaan</h5>
                  <h1 class="text-lg text-gray-700 text-center">
                 Menyediakan data-data sarana keagamaan seperti diantaranya Mushola dan Masjid.</h1>
            </div>
          </a>
        </div>

        <div class="max-w-sm bg-white  rounded-lg shadow-md transform transition hover:scale-105 duration-300 ease-in-out">
          <a href="{{route('gurungaji.tampil')}}">
          <div class="p-5">
            <div class="flex justify-center">
            <div class="text-white p-3  inline-flex items-center justify-center w-20 h-20 mb-6 shadow-lg rounded-full bg-emerald-700">
              <i class="fa-solid fa-chalkboard-user text-3xl"></i>
            </div>
            </div>
                  <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 text-center" style="font-family: 'Quicksand', sans-serif;">Data Guru Baca/Tulis Alquran</h5>
                <h1 class="text-lg text-center text-gray-700">
                 data-data Guru Ngaji Peyuluh Agama Islam Dan Kifayah di kabupaten Penajam Paser Utara.</h1>
          </div>
        </a>
      </div>



          </div>  
    </div>
  </div>
</section>
  <section id="hibah" class="bg-white py-3">
      <div class="container max-w-5xl mx-auto m-8">
        <h1 class="w-full my-2 text-4xl font-bold leading-tight text-center text-gray-800" style="font-family: 'Quicksand', sans-serif;">
          Hibah Pemerintah Daerah
        </h1>
        <div class="w-full mb-4">
          <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div class="flex flex-wrap">
          <div class="w-full sm:w-1/2 p-6">
            <img class="w-full z-50" src="{{asset('img/keagamaan.png')}}" width="100px"/>
          </div>
          <div class="w-5/6 sm:w-1/2 p-6">
            <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3" style="font-family: 'Quicksand', sans-serif;">
              Bidang Keagamaan
            </h3>
            <p class="text-gray-600 mb-8 text-justify">
              Hibah Keagamaan adalah pemberian uang dari Pemerintah Daerah kepada Badan dan Lembaga Bidang Keagamaan, yang secara spesifik telah ditetapkan peruntukannya, bersifat tidak wajib dan tidak mengikat, serta tidak secara terus menerus yang bertujuan untuk menunjang penyelenggaraan kesejahteraan masyarakat.
              <br />
            </p>
            <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
             <a href="{{route('keagamaan.index')}}"> Informasi Selengkapnya</a>
             
            </button>
          
          </div>
          
        </div>
        
      </div>
  </section>
<section id="beasiswa"  class="bg-white py-3">
  <div class="container max-w-5xl mx-auto m-8">
      <h1 class="w-full my-2 text-4xl font-bold leading-tight text-center text-gray-800" style="font-family: 'Quicksand', sans-serif;">
        Program Beasiswa
      </h1>
      <div class="w-full mb-4">
        <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
      </div>
      <div class="flex flex-wrap">
        <div class="w-5/6 sm:w-1/2 p-6">
          <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3" style="font-family: 'Quicksand', sans-serif;">
            Beasiswa Mahasiswa Berprestasi Akademik
          </h3>
          <p class="text-gray-600 mb-8 text-justify">
            Beasiswa Prestasi Akademik diberikan dan ditujukan bagi mahasiswa yang sudah menempuh semester 3 kuliah diploma maupun sarjana di perguruan tinggi negeri dan swasta di tanah air . Beasiswa ini dimaksudkan bisa membantu biaya pendidikan mahasiswa demi kelancaran studi.
            <br />
          </p>
          <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3" style="font-family: 'Quicksand', sans-serif;">
            Beasiswa Mahasiswa Tugas Akhir
          </h3>
          <p class="text-gray-600 mb-8 text-justify">
            Beasiswa Tugas Akhir diberikan dan ditujukan bagi mahasiswa yang melaksanakan Tugas Akhir di perguruan tinggi negeri dan swasta di tanah air. Beasiswa ini dimaksudkan bisa membantu biaya pendidikan mahasiswa demi kelancaran studi.
            <br />
          </p>
          <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            <a href="https://beasiswa.penajamkab.go.id/" target="_blank">
            Registrasi
          </a>
        </button>
        </div>
        
        <div class="w-full sm:w-1/2 p-6">
          <img class="w-full z-50" src="{{asset('img/3.png')}}" width="100px"/>
        </div>
      </div>
      
    </div>
</section>
<section id="bnk" class="bg-white py-3">
  <div class="container max-w-5xl mx-auto m-8">
    <h1 class="w-full my-2 text-4xl font-bold leading-tight text-center text-gray-800" style="font-family: 'Quicksand', sans-serif;">
      BNK PPU
    </h1>
    <div class="w-full mb-4">
      <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
    </div>
    <div class="flex flex-wrap">
      <div class="w-5/6 sm:w-1/2 p-6">
        <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3" style="font-family: 'Quicksand', sans-serif;">
          Pencegahan Pemberantasan Penyalahgunaan Narkotika
        </h3>
        <p class="text-gray-600 mb-8 text-justify">
          P4GN adalah singkatan dari pencegahan pemberantasan penyalahgunaan dan peredaran gelap narkotika, sebuah upaya yang terus menerus dilakukan oleh berbagai komponen masyarakat dan Pemerintah serta dunia ( khususnya Pemda PPU dan BNK PPU), untuk masyarakat dari resiko penyalahgunaan adiksi narkotika, psikotropika dan zat adiktif lainnya
          <br />
        </p>
        <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
          Informasi Selengkapnya
        </button>
      </div>
      
      <div class="w-full sm:w-1/2 p-6">
        <img class="w-full z-50 " src="{{asset('img/5.png')}}" width="100px"/>
      </div>
    </div>
    
  </div>
</section>
  <section id="pengumuman" class="events">
    <div class="container mx-auto py-3" style="font-family: 'Quicksand', sans-serif;"> 
      <h1 class="w-full my-2 text-4xl font-bold leading-tight text-center text-white mb-6">
        PENGUMUMAN
      </h1>
     
      <div class="events-slider swiper text-center mx-auto">
        <div class="swiper-wrapper">

          @foreach ($pengumuman as $p)
          <div class="swiper-slide">
            <div class="row event-item">
              <div class="xl:text-xl sm:text-md md:text-lg text-white font-semibold leading-none mb-3  justify-center">
                <h3>"{{$p->judul}}"</h3>
              </div>
              <div class="xl:text-xl sm:text-md md:text-lg my-6">
                <a href="{{route('indexpengumuman')}}" class="mx-auto lg:mx-0 bg-white text-gray-600 font-semibold rounded-full my-4 shadow-lg hover:underline focus:outline-none transform transition hover:scale-105 duration-300 ease-in-out text-sm px-5 py-2.5 text-center mr-3 md:mr-0 ">
                  Informasi Selengkapnya
                </a>
              </div>
              
            </div>
          </div>
          @endforeach

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section>
<section id="berita" class="bg-gray-100 py-4">
    <div class="container mx-auto m-8">
      <h1 class="w-full my-2 text-4xl font-bold leading-tight text-center text-gray-800">
       Berita Terkini
      </h1>
      <div class="w-full mb-4">
        <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
      </div>

        <div class="flex justify-center px-4 xl:px-0 py-4">
            <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 pb-6 gap-8">
              @foreach ($berita as $b)
              <div class="max-w-sm bg-white  rounded-lg border border-gray-200 shadow-md transform transition hover:scale-105 duration-300 ease-in-out">
                <a href="{{route('indexberita.detail',[$b->id])}}">
                    <img class="rounded-t-lg " src="{{asset('storage/'.$b->file)}}" alt="" />
                </a>
                <div class="p-5">
                    <a href="{{route('indexberita.detail',[$b->id])}}">
                        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">{!!Str::limit($b->judul, 100)!!}&hellip;</h5>
                    </a>
                    <a href="{{route('indexberita.detail',[$b->id])}}">
                      <h1 class="text-lg text-gray-900">{!!Str::limit($b->isi, 150)!!}&hellip;</h1>
                    </a>
                    <div class="my-3 border-t">
                      <div class="text-sm text-gray-500 my-3"><i class="fa-solid fa-calendar-days"></i> {{$b->created_at}}</div>
                    </div>
                </div>
            </div>
              @endforeach
            </div>
        </div>
        <div class="flex justify-center">
          <a href="{{route('indexberita')}}" class="mx-auto lg:mx-0 hover:underline gradient text-white font-semibold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            Selengkapnya
          </a>
        </div>
    </div>
</section>
    <section id="kontak"  class="bg-white py-4">
      <div class="container max-w-6xl mx-auto m-8">
          <h1 class="w-full my-2 text-4xl font-bold leading-tight text-center text-gray-800">
           Kontak Kami
          </h1>
          <div class="w-full mb-4">
            <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
          </div>
          <div class="flex flex-wrap">
            <div class="w-5/6 sm:w-1/2 p-6">
              <h3 class="text-2xl text-gray-800 font-bold leading-none mb-3">
                Bagian Kesra Sekretariat Daerah Kabupaten Penajam Paser Utara (Kantor Bupati lantai 2)
              </h3>
              <ul class="text-gray-800">
                <li class="mb-4">
                    <a href="https://www.google.com/maps/place/Kantor+Bupati+Kabupaten+Penajam+Paser+Utara/@-1.310064,116.727372,16z/data=!4m5!3m4!1s0x0:0x413f1df9f1c5a655!8m2!3d-1.3101202!4d116.7272802?hl=en" class="hover:underline"><i class="fa fa-map-marker" aria-hidden="true"></i> Jalan Propinsi Km 9 KeL Nipah-nipah Kec. Penajam Kabupaten Penajam Paser Utara Provinsi Kalimantan Timur Kode Pos 76144</a>
                </li>
                <li class="mb-4">
                    <a href="https://api.whatsapp.com/send?phone=6282190420841" class="hover:underline"><i class="fa-solid fa-phone"></i> 082190420841</a>
                </li>
                <li class="mb-4">
                    <a href="#" class="hover:underline"><i class="fa-solid fa-envelope"></i> bagiankesra.ppu@gmail.com</a>
                </li>
            </ul>
              <p>

              </p>
            </div>
            
            <div class="w-full sm:w-1/2 p-6">
              
                <iframe width="100%" height="100%"  scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d510584.83881778276!2d116.36507636630866!3d-1.199474621125316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df13eeb416f5ecf%3A0x413f1df9f1c5a655!2sKantor%20Bupati%20Kabupaten%20Penajam%20Paser%20Utara!5e0!3m2!1sen!2sid!4v1658457440477!5m2!1sen!2sid" style=""></iframe>
              
            </div>
          </div>
          
        </div>
</section>
  <section id="footer" class="bg-gray-100 py-4">
    <footer style="font-family: 'Quicksand', sans-serif;">
      <div class="container mx-auto m-8">
        <div class="grid grid-cols-2 gap-8 py-8 px-8 md:grid-cols-2">
            <div>
                <h2 class="mb-6 text-sm font-semibold text-gray-800 uppercase">Hubungi Kami</h2>
                <ul class="text-gray-800">
                  <li>
                    <a href="https://api.whatsapp.com/send?phone=6282190420841" target="_blank" class="flex items-center p-3 text-base font-bold  transform transition hover:scale-105 duration-300 ease-in-out">
                      <img width="40px" src="{{asset('img/wa.png')}}" alt="">
                      <span class="flex-1 ml-3 whitespace-nowrap" style="font-family: 'Quicksand', sans-serif;">WhatsApp</span>
                  </a>
                  </li>
                  <li>
                    <a href="https://www.instagram.com/pemkabppu/" target="_blank" class="flex items-center p-3 text-base font-bold  transform transition hover:scale-105 duration-300 ease-in-out">
                      <img width="40px" src="{{asset('img/ig.png')}}" alt="">
                      <span class="flex-1 ml-3 whitespace-nowrap" style="font-family: 'Quicksand', sans-serif;">Instagram</span>
                  </a>
                  </li>
                  <li>
                    <a href="https://www.facebook.com/pemkabpenajampaserutara" target="_blank" class="flex items-center p-3 text-base font-bold transform transition hover:scale-105 duration-300 ease-in-out">
                      <img width="40px" src="{{asset('img/fb.png')}}" alt="">
                      <span class="flex-1 ml-3 whitespace-nowrap" style="font-family: 'Quicksand', sans-serif;">Facebook</span>
                  </a>
                  </li>
                    <li>
                      <a href="https://www.lapor.go.id/" target="_blank" class="flex items-center p-3 text-base font-bold transform transition hover:scale-105 duration-300 ease-in-out">
                        <img width="40px" src="{{asset('img/lapor.jpg')}}" alt="">
                        <span class="flex-1 ml-3 whitespace-nowrap" style="font-family: 'Quicksand', sans-serif;">Lapor</span>
                    </a>
                    </li>
                </ul>
            </div>
            
            <div>
                <h2 class="mb-6 text-sm font-semibold text-gray-800 uppercase ">Tautan Terkait</h2>
                <ul class="text-gray-800">
                  <li class="mb-4">
                    <a href="https://lpse.penajamkab.go.id/eproc4" target="_blank" class="hover:underline" >Layanan Pengadaan (LPSE)</a>
                </li>
                <li class="mb-4">
                    <a href="https://penajamkab.go.id/" target="_blank" class="hover:underline">Pemerintah Kabupaten Penajam Paser Utara</a>
                </li>
                <li class="mb-4">
                    <a href="https://diskominfo.penajamkab.go.id/" target="_blank" class="hover:underline">Diskominfo Penajam Paser Utara</a>
                </li>
                <li class="mb-4">
                    <a href="https://bkd.penajamkab.go.id/" target="_blank" class="hover:underline">BKPSDM Penajam Paser Utara</a>
                </li>
                <li class="mb-4">
                    <a href="https://disdukcapil.penajamkab.go.id/" target="_blank" class="hover:underline">Disdukcapil Penajam Paser Utara</a>
                </li>
                <li class="mb-4">
                    <a href="http://inspektorat.penajamkab.go.id/" target="_blank" class="hover:underline">Inspektorat Penajam Paser Utara</a>
                </li>

                </ul>
            </div>
            
        </div>
        
      </div>
    </footer>
  </section>
  <section>
    <div class="py-6 px-10 bg-white dark:bg-gray-700 md:flex md:items-center md:justify-between">
      <span class="text-sm text-gray-500 dark:text-gray-300 sm:text-center pl-5">© 2022 <a href="#">Sekretariat Daerah Bagian Kesra</a>.
      </span>
  </div>
  </section>  
  @yield('script')
  <script src="https://kit.fontawesome.com/83fe09b92c.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js" integrity="sha512-BdHyGtczsUoFcEma+MfXc71KJLv/cd+sUsUaYYf2mXpfG/PtBjNXsPo78+rxWjscxUYN2Qr2+DbeGGiJx81ifg==" crossorigin="anonymous"></script>
  <script src="{{asset('asset/swiper/swiper-bundle.min.js')}}"></script>
  <script>
    var typing=new Typed(".t", {
       strings: ["", "MAJU", "MODERN", "RELIGIUS"],
       typeSpeed: 100,
       backSpeed: 60,
       backDelay: 2000,
       loop: true,
   });

  new Swiper('.events-slider', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });

  new Swiper('.berita-slider', {
    loop: true,
    slidesPerView: '3',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });

  var btn = $('#button');
  
  $(window).scroll(function() {
    if ($(window).scrollTop() > 300) {
      btn.addClass('show');
    } else {
      btn.removeClass('show');
    }
  });
  
  btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop:0}, '300');
  });
  
  </script>
  </body>
  </html>
