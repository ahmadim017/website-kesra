@extends('layouts.sbadmin')
@section('header')
<link href="{{asset('public/sbadmin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

@section('footer')
<script src="{{asset('public/sbadmin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/sbadmin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('public/sbadmin/js/demo/datatables-demo.js')}}"></script>
@endsection
@section('content')

<div class="row">
    <div class="col-md-12 text-right">
        <a href="{{route('suratkeluar.create')}}" class="d-none d-sm-inline-block btn btn-info btn-sm shadow-sm"><i class="fa fa-plus-circle fa-sm text-white-50"></i> Tambah Surat Keluar</a>
    </div>
</div>
<br>
<div class="col text-left">
  <form action="{{route('suratkeluar.index')}}">
    <select name="ta" class="form-control-sm w-auto" onchange="this.form.submit()">
      
      @foreach ($tahun as $tahun)
      <option @if ($tahun->tahun === $ta || $tahun->tahun === $stahun ) selected @endif value="{{$tahun->tahun}}">{{$tahun->tahun}}</option>
      @endforeach
    </select>
  </form>
  </div><br>
<div class="card shadow mb-4">
    <!-- Card Header - Accordion -->
    <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
      <h6 class="m-0 font-weight-bold text-primary">Surat Keluar</h6>
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
        <th scope="col">No</th>
        <th scope="col">No Surat</th>
        <th scope="col">Tanggal Surat</th>
        <th scope="col">Tujuan Surat</th>
        <th scope="col">Perihal</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($suratkeluar as $u)
      <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$u->nosurat}}</td>
            <td>{{Date::createFromDate($u->tglsurat)->format('j F Y')}}</td>
            <td>
              {{$u->tujuansurat}}
            </td>
            <td><a href="{{route('suratkeluar.show',[$u->id])}}">{{$u->judul}}</a></td>  
      </tr>
      @endforeach
    </tbody>
  </table>
    </div>
</div>
</div>
</div>
@endsection