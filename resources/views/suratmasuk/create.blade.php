@extends('layouts.sbadmin')

@section('content')
<div class="col-md-8">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Surat Masuk</h6>
      </div>
      
      <div class="card-body">
    
      @if(session('status'))
          <div class="alert alert-success">
            {{session('status')}}
          </div>
        @endif 
        <form action="{{route('suratmasuk.store')}}" enctype="multipart/form-data" method="POST" class="bg-white shadow-sm p-3">
        @csrf
        <div class="row">
          <div class="col-6">
            <label for="">No Surat</label>
          <input type="text" name="nosurat" class="form-control {{$errors->first('nosurat') ? "is-invalid" : ""}}" placeholder="Nomor Surat">
          <div class="invalid-feedbeck">{{$errors->first('nosurat')}}</div>
        </div>
          <div class="col-6">
            <label for="">Tanggal Surat</label>
          <input type="date" class="form-control {{$errors->first('tglsurat') ? "is-invalid" : ""}}" name="tglsurat">
          <div class="invalid-feedbeck">{{$errors->first('tglsurat')}}</div>
        </div>
        </div><br>
        <div class="row">
          <div class="col-12">
            <label for="">Judul</label> 
            <input type="text" name="judul" class="form-control {{$errors->first('judul') ? "is-invalid" : ""}}" placeholder="Perihal/Judul">
            <div class="invalid-feedbeck"> {{$errors->first('judul')}}</div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-12">
            <label for="">Asal Surat</label>
            <select name="id_opd" class="form-control {{$errors->first('id_opd') ? "is-invalid" : ""}}">
                <option value=""></option>
                @foreach ($opd as $o)
                    <option value="{{$o->id}}">{{$o->nama}}</option>
                @endforeach
            </select>
            <div class="invalid-feedbeck"> {{$errors->first('id_opd')}}</div>
          </div>
        </div><br>
        <div class="row">
            <div class="col-6">
                <label for="">Tanggal Terima Surat</label>
              <input type="date" class="form-control {{$errors->first('tglterima') ? "is-invalid" : ""}}" name="tglterima">
              <div class="invalid-feedbeck">{{$errors->first('tglterima')}}</div>
            </div>
        </div><br>
        <div class="row">
          <div class="col-12">
            <label for="">Keterangan</label>
            <input type="text" name="keterangan" placeholder="keterangan" class="form-control {{$errors->first('keterangan') ? "is-invalid" : ""}}">
            <div class="invalid-feedbeck"> {{$errors->first('keterangan')}}</div>
          </div>
        </div><br>
        <div class="row">
          <div class="col-12">
            <label for="">File Surat</label>
            <input type="file" class="form-control {{$errors->first('file_surat') ? "is-invalid" : ""}}" name="file_surat" required>
          <div class="invalid-feedbeck"> {{$errors->first('file_surat')}}</div>
            <small>*file bertipe PDF maximal size 5mb</small>
          </div>
        </div><br>
        <button type="submit" class="btn btn-primary btn-sm" value="Simpan"><i class="fa fa-save fa-sm"></i> Simpan</button>
        <a href="{{route('suratmasuk.index')}}" class="btn btn-primary btn-sm"><i class="fa fa-arrow-circle-left fa-fw fa-sm"></i>Kembali</a>
        </form>
      </div>
    </div>
</div>
@endsection