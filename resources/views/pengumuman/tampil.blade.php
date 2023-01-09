@extends('layouts.detail')

@section('content')
<div class="mx-auto my-16">
    <div class="" style="height:200px;">
      <div class="flex flex-wrap justify-center text-center py-14">
        <div class="w-full px-4">
          <h1 class="text-4xl font-bold text-white" style="font-family: 'Quicksand', sans-serif;">PENGUMUMAN</h1>
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
              <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">Pengumuman</a>
              </div>
          </li>
         
        </ol>
        </nav>
        <hr class="mt-3">
<section>
    <div class="container mx-auto m-8">

    @foreach ($pengumuman as $p)
            
        <div class='flex items-center my-4'>  
            <div class="rounded-xl border p-6 shadow-md md:w-8/12 sm:w-1/2 bg-white transform transition hover:scale-105 duration-300 ease-in-out">
            <div class="flex w-full items-center border-b pb-3">
              <div class="flex items-center space-x-3">
                <div class="text-sm text-gray-400"><i class="fa-solid fa-calendar-days"></i> {{$p->created_at}}</div>
              </div>
            </div>
        
            <div class="mt-4 mb-6">
              <div class="mb-3 text-xl text-neutral-600 font-bold">{{$p->judul}}</div>
              <div class="text-sm text-neutral-600">{{$p->keterangan}}</div>
            </div>
        
            <div>
              <div class="flex items-center ">
                <div class="flex space-x-4 md:space-x-8">
                    <a href="{{route('pengumuman.download',[$p->id])}}" class="mx-auto lg:mx-0 hover:underline gradient text-white rounded-md my-3 py-2 px-4 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                        Download
                    </a>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
    </div>
</section>
       
@endsection