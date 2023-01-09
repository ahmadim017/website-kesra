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
<body class="leading-normal tracking-normal text-white gradient">
  <a id="button" class="bg-emerald-700 hover:bg-emerald-800 hover:underline focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"></a>
    <div class="w-full text-gray-700 bg-white/50 backdrop-blur-lg  fixed top-0 left-0 z-10">
    <nav class=" border-gray-200 px-2 sm:px-4 py-2.5 rounded " style="font-family: 'Quicksand', sans-serif;">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
    <a href="{{route('welcome')}}" class="flex items-center">
        <img src="{{asset('img/logo_kesra.png')}}" class="mr-3 h-6 sm:h-9 transform transition hover:scale-105 duration-300 ease-in-out"/>
        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white"></span>
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
          <a href="{{route('welcome')}}#home" class="block py-2 pr-4 pl-3 text-white bg-emerald-700 rounded md:bg-transparent md:text-emerald-700 md:p-0 dark:text-white" aria-current="page">Home</a>
        </li>
        <li>
          <a href="{{route('welcome')}}#beasiswa" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-emerald-700 md:p-0 ">Beasiswa</a>
        </li>
        <li>
          <a href="{{route('welcome')}}#hibah" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-emerald-700 md:p-0 ">Hibah Bidang Keagamaan</a>
        </li>
        <li>
          <a href="{{route('welcome')}}#lembaga" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-emerald-700 md:p-0 ">Sistem Informasi Lembaga</a>
        </li>
        <li>
          <a href="{{route('welcome')}}#bnk" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-emerald-700 md:p-0 ">P4GN BNK</a>
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
          <a href="{{route('welcome')}}#kontak" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-emerald-700 md:p-0 ">Kontak Kami</a>
        </li>
      </ul>
    </div>
    </div>
  </nav>
    </div>
    <section class="bg-white py-8">
    </section>
    <section id="main" class="mt-16">
      @yield('content')
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
    <script>
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
  