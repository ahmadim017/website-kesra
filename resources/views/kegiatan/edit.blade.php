@extends('layouts.sbadmin')

@section('content')

<div class="col-md-8">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Kegiatan</h6>
          </div>
    <div class="card-body">

    @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif
    
    <form action="{{route('kegiatan.update',[$kegiatan->id])}}" method="POST" enctype="multipart/form-data" class="bg-white shadow-sm p-3">
    @csrf
    <input type="hidden" value="PUT" name="_method">
    <label for="">Nama Kegiatan</label>
    <input type="text" value="{{$kegiatan->nama}}" name="nama" class="form-control {{$errors->first('nama') ? "is-invalid" : ""}}" placeholder="Nama Kegiatan">
    <div class="invalid-feedbeck">
        {{$errors->first('nama')}}
    </div>
    <br>
    <button class="btn btn-primary btn-sm" value="submit"><i class="fa fa-save fa-sm"></i> Simpan</button>
    <a href="{{route('kegiatan.index')}}" class="btn btn-primary btn-sm"><i class="fa fa-arrow-circle-left fa-fw fa-sm"></i>Kembali</a>
    </form>
    
@endsection