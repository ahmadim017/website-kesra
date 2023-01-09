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
<div class="row">
    <div class="col-md-12 text-right">
    <a href="{{route('datalembaga.create')}}" class="btn btn-secondary btn-sm"><i class="fa fa-plus-circle fa-sm"></i> Tambah Lembaga</a>
    </div> 
</div><br>

<div class="card shadow mb-4">
    <!-- Card Header - Accordion -->
    <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
      <h6 class="m-0 font-weight-bold text-secondary">Data Lembaga Keagamaan</h6>
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
        <th scope="col">Nomor Ijin</th>
        <th scope="col">Nama Lembaga</th>
        <th scope="col">Pimpinan</th>
        <th scope="col">Kecamatan</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($datalembaga as $b)
      <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$b->nomorijin}}</a></td>
            <td><a href="{{route('datalembaga.edit',[$b->id])}}">{{$b->nama}}</a></td>    
            <td>{{$b->ketua}}</td>
            <td>{{$b->kecamatan}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</div>
</div>
</div> 
@endsection