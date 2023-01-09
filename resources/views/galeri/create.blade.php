@extends('layouts.sbadmin')


@section('content')
<div class="col-md-10">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-info">Tambah Gallery</h6>
      </div>
      
      <div class="card-body">
    
      @if(session('status'))
          <div class="alert alert-success">
            {{session('status')}}
          </div>
        @endif 
        <form action="{{route('galeri.store')}}" enctype="multipart/form-data" method="POST" class="bg-white shadow-sm p-3">
        @csrf
        <div class="row">
          <div class="col-6">
                <label for="">Judul</label>
                <input type="text" name="judul" class="form-control {{$errors->first('judul') ? "is_invalid" : ""}}" value="{{old('judul')}}" required>
                <div class="invalid-feedbeck">{{$errors->first('judul')}}</div>
           </div>
        </div><br>
        <div class="row">
            <div class="col-12">
              <label for="">Foto</label> 
              <input type="file" name="foto" class="form-control {{$errors->first('foto') ? "is-invalid" : ""}}" required>
              <div class="invalid-feedbeck"> {{$errors->first('foto')}}</div>
              <small>*file bertipe Image maximal size 5mb</small>
            </div>
          </div>
          <br>
        <div class="row">
            <div class="col-12">
                <label for="">Keterangan</label>
                <input type="text" name="keterangan" cols="30" rows="10" value="{{old('keterangan')}}" class="form-control {{$errors->first('keterangan') ? "is-invalid" : ""}}">
                <div class="invalid-feedbeck">{{$errors->first('ketarangan')}}</div>
              </div>
        </div><br>
        <button type="submit" class="btn btn-info btn-sm" value="Simpan"><i class="fa fa-save fa-sm"></i> Simpan</button>
        <a href="{{route('galeri.index')}}" class="btn btn-dark btn-sm"><i class="fa fa-arrow-circle-left fa-fw fa-sm"></i>Kembali</a>
        </form>
      </div>
    </div>
</div>
@endsection