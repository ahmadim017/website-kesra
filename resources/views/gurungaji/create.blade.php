@extends('layouts.sbadmin')

@section('content')

<div class="col-md-10">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-info">Tambah Data Guru Baca/Tulis AL-Quran</h6>
      </div>
      
      <div class="card-body">
    
      @if(session('status'))
          <div class="alert alert-success">
            {{session('status')}}
          </div>
        @endif 
        <form action="{{route('gurungaji.store')}}" enctype="multipart/form-data" method="POST" class="bg-white shadow-sm p-3">
        @csrf
        <div class="row">
          <div class="col-12">
                <label for="">Nama</label>
                <input type="text" name="nama" class="form-control {{$errors->first('nama') ? "is-invalid" : ""}}" placeholder="nama">
                <div class="invalid-feedbeck">{{$errors->first('nama')}}</div>
           </div>
        </div>
        <br>
        <div class="row">
          <div class="col-12">
                <label for="">Jenis Kelamin</label>
                <select name="jeniskelamin" class="form-control {{$errors->first('jeniskelamin') ? "is-invalid" : ""}}">
                  <option value=""></option>
                  <option value="Laki-laki">Laki-Laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
                <div class="invalid-feedbeck">{{$errors->first('jeniskelamin')}}</div>
           </div>
        </div>
        <br>
        <div class="row">
          <div class="col-12">
                <label for="">Nomor Hp</label>
                <input type="text" name="nohp" class="form-control {{$errors->first('nohp') ? "is-invalid" : ""}}" placeholder="nohp">
                <div class="invalid-feedbeck">{{$errors->first('nohp')}}</div>
           </div>
        </div>
        <br>
        <div class="row">
          <div class="col-12">
                <label for="">Alamat</label>
                <input type="text" name="alamat" class="form-control {{$errors->first('alamat') ? "is-invalid" : ""}}" placeholder="alamat">
                <div class="invalid-feedbeck">{{$errors->first('alamat')}}</div>
           </div>
        </div>
        <br>
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