@extends('layouts.sbadmin')

@section('content')

<div class="col-md-10">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-info">Tambah Sarana Rumah Ibadah</h6>
      </div>
      
      <div class="card-body">
    
      @if(session('status'))
          <div class="alert alert-success">
            {{session('status')}}
          </div>
        @endif 
        <form action="{{route('rumahibadah.store')}}" enctype="multipart/form-data" method="POST" class="bg-white shadow-sm p-3">
        @csrf
        <div class="row">
          <div class="col-12">
                <label for="">Nomor Ijin</label>
                <input type="text" name="nomorijin" class="form-control {{$errors->first('nomorijin') ? "is-invalid" : ""}}" placeholder="nomor ijin">
                <div class="invalid-feedbeck">{{$errors->first('nomorijin')}}</div>
           </div>
        </div>
        <br>
        <div class="row">
          <div class="col-12">
                <label for="">Nama Sarana</label>
                <input type="text" name="namasarana" class="form-control {{$errors->first('namasarana') ? "is-invalid" : ""}}" placeholder="nama sarana">
                <div class="invalid-feedbeck">{{$errors->first('namasarana')}}</div>
           </div>
        </div>
        <br>
        <div class="row">
          <div class="col-12">
                <label for="">Pimpinan</label>
                <input type="text" name="pimpinan" class="form-control {{$errors->first('pimpinan') ? "is-invalid" : ""}}" placeholder="pimpinan">
                <div class="invalid-feedbeck">{{$errors->first('pimpinan')}}</div>
           </div>
        </div>
        <br>
        <div class="row">
          <div class="col-12">
            <label for="">Jenis Sarana</label> 
            <select name="jenis" class="form-control {{$errors->first('jenis') ? "is-invalid" : ""}}">
            <option value=""></option>
            <option value="Masjid">Masjid</option>
            <option value="Mushola">Mushola</option>
            </select>
            <div class="invalid-feedbeck"> {{$errors->first('kecamatan')}}</div>
          </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <label for="">Alamat</label>
                <textarea name="alamat" id="textarea" class="form-control" placeholder="alamat"></textarea>
            </div>
        </div><br>
        <div class="row">
          <div class="col-12">
                <label for="">Kelurahan/Desa</label>
                <input type="text" name="kelurahan" class="form-control {{$errors->first('kelurahan') ? "is-invalid" : ""}}" placeholder="Kelurahan/Desa">
                <div class="invalid-feedbeck">{{$errors->first('kelurahan')}}</div>
           </div>
        </div>
        <br>
        <div class="row">
          <div class="col-12">
            <label for="">Kecamatan</label> 
            <select name="kecamatan" class="form-control {{$errors->first('kecamatan') ? "is-invalid" : ""}}">
            <option value=""></option>
            <option value="Penajam">Penajam</option>
            <option value="Waru">Waru</option>
            <option value="Babulu">Babulu</option>
            <option value="Sepaku">Sepaku</option>
            </select>
            <div class="invalid-feedbeck"> {{$errors->first('kecamatan')}}</div>
          </div>
        </div>
        <br>
        <button type="submit" class="btn btn-info btn-sm"><i class="fa fa-save fa-sm"></i> Simpan</button>
        <a href="{{route('rumahibadah.index')}}" class="btn btn-dark btn-sm"><i class="fa fa-arrow-circle-left fa-fw fa-sm"></i> Kembali</a>
        </form>
      </div>
    </div>
</div>
@endsection