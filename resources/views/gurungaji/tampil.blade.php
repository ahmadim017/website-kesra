@extends('layouts.detail')

@section('content')
<div class="mx-auto my-16">
    <div class="" style="height:200px;">
      <div class="flex flex-wrap justify-center text-center py-14">
        <div class="w-full px-4">
          <h1 class="text-4xl font-bold text-white" style="font-family: 'Quicksand', sans-serif;">Data Guru Baca/Tulis Al-Quran</h1>
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
              <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">Data Guru Baca/Tulis Al-Quran</a>
              </div>
          </li>
         
        </ol>
        </nav>
        <hr class="mt-3">
        <section>
            <div class="container mx-auto m-8" style="font-family: 'Quicksand', sans-serif;">
                <div class="mb-5">
                    <label for="countries" class="block mb-4 text-sm font-medium text-gray-900 " >Pilih Kecamatan</label>
                    <form action="#" >
                      <select name="kecamatan" onchange="this.form.submit()" style="font-family: 'Quicksand', sans-serif;" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option  @if ($kecamatan == '') selected @endif value=""></option>
                        <option @if ($kecamatan == 'Penajam') selected @endif value="Penajam">Penajam</option>
                        <option @if ($kecamatan == 'Waru') selected @endif value="Waru">Waru</option>
                        <option @if ($kecamatan == 'Babulu') selected @endif value="Babulu">Babulu</option>
                        <option @if ($kecamatan == 'Sepaku') selected @endif value="Sepaku">Sepaku</option>
                      </select>
                    </form>
                  </div>
          
                <div class="overflow-x-auto relative">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="py-3 px-6">
                                    #
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Nama
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Jenis Kelamin
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Nomor HP
                                </th>
                                <th scope="col" class="py-3 px-6">
                                   Kelurahan/Desa
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Kecamatan
                                </th>
                                <th>
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gurungaji as $r)
                                
                           
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                   {{$loop->iteration}}
                                </th>
                                <td class="py-4 px-6">
                                   {{$r->nama}}
                                </td>
                                <td class="py-4 px-6">
                                    {{$r->jeniskelamin}}
                                </td>
                                <td class="py-4 px-6">
                                    {{$r->nohp}}
                                </td>
                                <td class="py-4 px-6">
                                    {{$r->kelurahan}}
                                </td>
                                <td >
                                    {{$r->kecamatan}}
                                </td>
                                <td class="py-4 px-6">
                                    <button class="block text-white bg-emerald-700 hover:bg-emerald-800 focus:ring-4 focus:outline-none font-medium rounded-xl text-sm px-3 py-2 text-center" type="button" data-modal-toggle="defaultModal-{{$r->id}}">
                                        Detail
                                      </button>
                                </td>
                            </tr>
                            @endforeach
                           
                        </tbody>
                    </table>
                </div>
                  <div class="flex justify-center">
                    
                  </div>
                  
        </section>

        <!-- Main modal -->
        @foreach ($gurungaji as $r)
            
        
<div style="font-family: 'Quicksand', sans-serif;" id="defaultModal-{{$r->id}}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
    <div class="relative w-full h-full max-w-2xl md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    {{$r->nama}}
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal-{{$r->id}}">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                    <div class="flex flex-col pb-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Jenis Kelamin</dt>
                        <dd class="text-lg font-semibold">{{$r->jeniskelamin}}</dd>
                    </div>
                    <div class="flex flex-col py-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Nomor Hp</dt>
                        <dd class="text-lg font-semibold">{{$r->nohp}}</dd>
                    </div>
                    <div class="flex flex-col py-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">alamat</dt>
                        <dd class="text-lg font-semibold">{{$r->alamat}}</dd>
                    </div>
                    <div class="flex flex-col py-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Kelurahan/Desa</dt>
                        <dd class="text-lg font-semibold">{{$r->kelurahan}}</dd>
                    </div>
                    <div class="flex flex-col py-3">
                        <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Kecamatan</dt>
                        <dd class="text-lg font-semibold">{{$r->kecamatan}}</dd>
                    </div>
                </dl>
            </div>
            <!-- Modal footer -->
           
        </div>
    </div>
</div>
@endforeach
@endsection