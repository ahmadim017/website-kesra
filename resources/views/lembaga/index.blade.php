@extends('layouts.detail')
@section('script')
<script src="https://kit.fontawesome.com/83fe09b92c.js" crossorigin="anonymous"></script>
@endsection
@section('content')
<div class="mx-auto my-16">
    <div class="" style="height:200px;">
      <div class="flex flex-wrap justify-center text-center py-14">
        <div class="w-full px-4">
          <h1 class="xl:text-4xl sm:text-xl md:text-2xl font-bold text-white" style="font-family: 'Quicksand', sans-serif;">Daftar Kelembagaan Keagamaan Di Kabupaten Penajam Paser Utara</h1>
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
            <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">Kelembagaan Keagamaan</a>
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
        <section>
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
                        <div class="p-5">
                          <div class="flex justify-center">
                          <div class="text-white p-3 text-center inline-flex items-center justify-center w-20 h-20 mb-6 shadow-lg rounded-full bg-emerald-700">
                            <i class="fa-solid fa-building-columns text-3xl"></i>
                          </div>
                          </div>
                            <a href="#">
                                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 text-center" style="font-family: 'Quicksand', sans-serif;">Data Kelembagaan</h5>
                            </a>
                            <a href="#">
                              <h1 class="text-lg text-gray-700 text-center">
                              Menyediakan data data kelembagaan seperti Madrasah Diniah, Taman Kanak-Kanak Al-Quran, Taman Pendidikan Al-Quran dan Pesantren.</h1>
                            </a>
                        </div>
                    </div>

                    <div class="max-w-sm bg-white  rounded-lg shadow-md transform transition hover:scale-105 duration-300 ease-in-out">
                      <div class="p-5">
                        <div class="flex justify-center">
                        <div class="text-white p-3 text-center inline-flex items-center justify-center w-20 h-20 mb-6 shadow-lg rounded-full bg-emerald-700">
                          <i class="fa-solid fa-mosque text-3xl"></i>
                        </div>
                        </div>
                          <a href="#">
                              <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 text-center" style="font-family: 'Quicksand', sans-serif;">Data Sarana Keagamaan</h5>
                          </a>
                          <a href="#">
                            <h1 class="text-lg text-gray-700 text-center">
                           Menyediakan data-data sarana keagamaan seperti diantaranya Mushola dan Masjid.</h1>
                          </a>
                      </div>
                  </div>

                  <div class="max-w-sm bg-white  rounded-lg shadow-md transform transition hover:scale-105 duration-300 ease-in-out">
                    <div class="p-5">
                      <div class="flex justify-center">
                      <div class="text-white p-3  inline-flex items-center justify-center w-20 h-20 mb-6 shadow-lg rounded-full bg-emerald-700">
                        <i class="fa-solid fa-chalkboard-user text-3xl"></i>
                      </div>
                      </div>
                        <a href="#">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 text-center" style="font-family: 'Quicksand', sans-serif;">Data Guru Ngaji</h5>
                        </a>
                        <a href="#">
                          <h1 class="text-lg text-center text-gray-700">
                           data-data Guru Ngaji Peyuluh Agama Islam Dan Kifayah di desa desa kabupaten Penajam Paser Utara.</h1>
                        </a>
                    </div>
                </div>



                    </div>  
              </div>
            </div>
        </section>
    </div>
  </div>
  
@endsection