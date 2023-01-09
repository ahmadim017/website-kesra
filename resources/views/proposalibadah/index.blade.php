@extends('layouts.sbadmin')
@section('header')
<link href="{{asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

@section('footer')
<script src="{{asset('sbadmin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('sbadmin/js/demo/datatables-demo.js')}}"></script>
@endsection

@section('content')
@if(Auth::user()->role == "VERIFIKATOR" || Auth::user()->role == "ADMIN")


<div class="card shadow mb-4">
    <!-- Card Header - Accordion -->
    <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
      <h6 class="m-0 font-weight-bold text-secondary">Permohonan Tempat Ibadah/Ponpes/Klompok Swadaya</h6>
    </a>

    <!-- Card Content - Collapse -->
    <div class="collapse show" id="collapseCardExample">
      <div class="card-body">

    @if(session('status'))
      <div class="alert alert-success">
        {{session('status')}}
      </div>
    @endif 
  
    @if(session('Status'))
      <div class="alert alert-danger">
      {{session('Status')}}
    </div>
    @endif
<div class="table-responsive">    
<table class="table table-striped" id="dataTable">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Proposal</th>
        <th scope="col">Kecamatan</th>
        <th scope="col">Status</th>
        <th scope="col">Pemohon</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($proposalibadah as $b)
      <tr>
            <td>{{$loop->iteration}}</td>
            <td><a href="{{route('proposalibadah.show',[$b->id])}}">{{$b->namaproposal}}</a></td> 
            <td>{{$b->kecamatan}}</td>   
            <td>
                @if ($b->status == 'Pengajuan')
                <span class="badge badge-info">{{$b->status}}</span>
                @elseif ($b->status == 'Verifikasi')
                <span class="badge badge-warning">{{$b->status}}</span>
                @elseif ($b->status == 'Diterima')
                <span class="badge badge-primary">{{$b->status}}</span>
                @elseif ($b->status == 'Ditolak')
                <span class="badge badge-danger">{{$b->status}}</span>
                @elseif ($b->status == 'Tidak Sesuai')
                <span class="badge badge-secondary">{{$b->status}}</span>
                @elseif ($b->status == 'Perbaikan')
                <span class="badge badge-success">{{$b->status}}</span>
                @endif
            </td>
        <td>{{$b->user->name}}</td>
        <td>
          @if ($b->status == 'Diterima')
          <a href="{{route('proposalibadah.verifikasi',[$b->id])}}" class="btn btn-danger btn-sm">Batalkan</a>
          @elseif ($b->status == 'Ditolak')
          <button class="btn btn-danger btn-sm" disabled>Ditolak</button>
          @else
          <a href="{{route('proposalibadah.verifikasi',[$b->id])}}" class="btn btn-warning btn-sm">Verifikasi</a>
          @endif
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</div>
</div>
</div>
@else
<div class="row mb-3 mx-2">
  <div class="col-12 ">
    <h3>Riwayat Permohonan Proposal Online</h3>
  </div>
</div>
<div class="row mx-2 mb-3">
  <div class="col-md-12">
      <a href="{{route('proposalibadah.create')}}" class="btn btn-secondary center-block"><i class="fa fa-plus-circle fa-sm"></i> Tambah Permohonan Proposal Tempat Ibadah</a>
  </div>
</div>

  <div class="row mx-2 mt-3">   
@foreach ($proposalibadah as $b)

<div class="col-3 col-4 mb-4">
        
          <div class="card border-0 shadow p-2 rounded-xl">
            <div class="card-header">
            <b>{{$b->namaproposal}}</b> 
            </div>
            <ul class="list-group list-group-flush">
              @if($b->status == 'Tidak Sesuai' || $b->status == 'Perbaikan')
              <li class="list-group-item">
                <b>Catatan</b><br>
                @foreach($catatan as $c)
                    @if ($b->id == $c->id_permohonan)
                    <b>{{$c->user->name}}</b><br>
                    {{$c->created_at}} <br>
                    {{$c->keterangan}} <br>
                    <hr>
                    @endif
                @endforeach
              </li>
              @endif
              <li class="list-group-item">
              <b>Status Permohonan</b> <br>
              @if ($b->status == 'Pengajuan')
              <span class="badge badge-info">{{$b->status}}</span>
              @elseif ($b->status == 'Verifikasi')
              <span class="badge badge-warning">{{$b->status}}</span>
              @elseif ($b->status == 'Diterima')
              <span class="badge badge-primary">{{$b->status}}</span>
              @elseif ($b->status == 'Ditolak')
              <span class="badge badge-danger">{{$b->status}}</span>
              @elseif ($b->status == 'Tidak Sesuai')
              <span class="badge badge-secondary">{{$b->status}}</span>
              @elseif ($b->status == 'Perbaikan')
              <span class="badge badge-success">{{$b->status}}</span>
              @endif
              </li>
              <li class="list-group-item"><b>Tanggal Permohonan</b><br>{{$b->created_at}}</li>
              <li class="list-group-item"><b>Nama Pemohon</b><br>{{$b->user->name}}</li>
            </ul>
            <div class="card-body text-center">
              @if ($b->status == 'Tidak Sesuai')
              <a href="{{route('proposalibadah.edit',[$b->id])}}" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i> Perbaiki Permohonan</a>
              @else
              @endif
                <a class="btn btn-primary" href="{{route('proposalibadah.show',[$b->id])}}"><i class="fa-solid fa-magnifying-glass"></i> Periksa Riwayat</a>
            </div>
          </div>
      </div>
@endforeach
  </div>
@endif

@endsection