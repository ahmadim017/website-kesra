@extends('layouts.sbadmin')


@section('content')
<div class="col-md-10">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-info">Tambah Pengumuman</h6>
      </div>
      
      <div class="card-body">
    
      @if(session('status'))
          <div class="alert alert-success">
            {{session('status')}}
          </div>
        @endif 
        <form action="{{route('pengumuman.update',[$pengumuman->id])}}" enctype="multipart/form-data" method="POST" class="bg-white shadow-sm p-3">
        @csrf
        @method('PUT')
        <div class="row">
          <div class="col-12">
                <label for="">Judul</label>
                <input type="text" name="judul" class="form-control {{$errors->first('judul') ? "is_invalid" : ""}}" value="{{$pengumuman->judul}}" required>
                <div class="invalid-feedbeck">{{$errors->first('judul')}}</div>
           </div>
        </div><br>
        <div class="row">
            <div class="col-12">
              <label for="">File PDF</label><br>
              <input type="file" name="file" class="form-control {{$errors->first('file') ? "is-invalid" : ""}}" required>
              <div class="invalid-feedbeck"> {{$errors->first('file')}}</div>
              <small>*file bertipe PDF maximal size 5mb</small>
              <small>*kosongkan jika tidak merubah file</small>
            </div>
          </div>
          <br>
        <div class="row">
            <div class="col-12">
                <label for="">Keterangan</label>
                <input type="text" name="keterangan" cols="30" rows="10" value="{{$pengumuman->keterangan}}" class="form-control {{$errors->first('keterangan') ? "is-invalid" : ""}}">
                <div class="invalid-feedbeck">{{$errors->first('ketarangan')}}</div>
              </div>
        </div><br>
        <button type="submit" class="btn btn-info btn-sm" value="Simpan"><i class="fa fa-save fa-sm"></i> Simpan</button>
        <a href="{{route('pengumuman.index')}}" class="btn btn-dark btn-sm"><i class="fa fa-arrow-circle-left fa-fw fa-sm"></i>Kembali</a>
        </form>
      </div>
    </div>
</div>
@endsection