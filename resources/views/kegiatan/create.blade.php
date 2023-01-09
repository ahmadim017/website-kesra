@extends('layouts.sbadmin') 
@section('content')
<div class="col-md-8">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Kegiatan</h6>
      </div>
      
      <div class="card-body">
    
      @if(session('status'))
          <div class="alert alert-success">
            {{session('status')}}
          </div>
        @endif 

        <form action="{{route('kegiatan.store')}}" class="bg-white shadow-sm p-3" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">Nama Kegiatan</label>
        <input type="text" name="nama" value="{{old('nama')}}" id="nama" class="form-control {{$errors->first('nama') ? "is-invalid" : ""}}" placeholder="Nama Dinas">
        <div class="invalid-feedbeck">
            {{$errors->first('nama')}}
        </div><br>
        
        <button type="submit" value="Simpan" class="btn btn-primary btn-sm"><i class="fa fa-save fa-sm"></i> Simpan</button>
        <a href="{{route('kegiatan.index')}}" class="btn btn-primary btn-sm"><i class="fa fa-arrow-circle-left fa-fw fa-sm"></i>Kembali</a>
        </form>

      </div>
    </div>
</div>
@endsection
