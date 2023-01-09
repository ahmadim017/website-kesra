@extends('layouts.sbadmin')


@section('content')
<div class="col-md-10">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-info">Edit Data Lembaga</h6>
      </div>
      
      <div class="card-body">
    
      @if(session('status'))
          <div class="alert alert-success">
            {{session('status')}}
          </div>
        @endif 
        <form action="{{route('datalembaga.update',[$datalembaga->id])}}" enctype="multipart/form-data" method="POST" class="bg-white shadow-sm p-3">
        @csrf
        @method('PUT')
        <div class="row">
          <div class="col-12">
                <label for="">Nomor Ijin</label>
                <input type="text" name="nomorijin" value="{{$datalembaga->nomorijin}}" class="form-control {{$errors->first('nomorijin') ? "is-invalid" : ""}}" placeholder="nomor ijin">
                <div class="invalid-feedbeck">{{$errors->first('nomorijin')}}</div>
           </div>
        </div>
        <br>
        <div class="row">
          <div class="col-12">
                <label for="">Nama Lembaga</label>
                <input type="text" name="nama" value="{{$datalembaga->nama}}" class="form-control {{$errors->first('nama') ? "is-invalid" : ""}}">
                <div class="invalid-feedbeck">{{$errors->first('nama')}}</div>
           </div>
        </div>
        <br>
        <div class="row">
          <div class="col-12">
                <label for="">Ketua</label>
                <input type="text" name="ketua" value="{{$datalembaga->ketua}}" class="form-control {{$errors->first('ketua') ? "is-invalid" : ""}}" placeholder="ketua">
                <div class="invalid-feedbeck">{{$errors->first('ketua')}}</div>
           </div>
        </div>
        <br>
        <div class="row">
          <div class="col-12">
                <label for="">Sekretaris</label>
                <input type="text" name="sekretaris" value="{{$datalembaga->sekretaris}}" class="form-control {{$errors->first('sekretaris') ? "is-invalid" : ""}}" placeholder="sekretaris">
                <div class="invalid-feedbeck">{{$errors->first('sekretaris')}}</div>
           </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <label for="">Alamat</label>
                <textarea name="alamat" id="textarea" class="form-control" placeholder="alamat">{{$datalembaga->alamat}}</textarea>
            </div>
        </div><br>
        <div class="row">
          <div class="col-12">
                <label for="">Kelurahan/Desa</label>
                <input type="text" name="kelurahan" value="{{$datalembaga->kelurahan}}" class="form-control {{$errors->first('kelurahan') ? "is-invalid" : ""}}" placeholder="Kelurahan/Desa">
                <div class="invalid-feedbeck">{{$errors->first('kelurahan')}}</div>
           </div>
        </div>
        <br>
        <div class="row">
          <div class="col-12">
            <label for="">Kecamatan</label> 
            <select name="kecamatan" class="form-control {{$errors->first('kecamatan') ? "is-invalid" : ""}}">
            <option value=""></option>
            <option @if ($datalembaga->kecamatan == 'Penajam') selected @endif value="Penajam">Penajam</option>
            <option @if ($datalembaga->kecamatan == 'Waru') selected @endif value="Waru">Waru</option>
            <option @if ($datalembaga->kecamatan == 'Babulu') selected @endif value="Babulu">Babulu</option>
            <option @if ($datalembaga->kecamatan == 'Sepaku') selected @endif value="Sepaku">Sepaku</option>
            </select>
            <div class="invalid-feedbeck"> {{$errors->first('kecamatan')}}</div>
          </div>
        </div>
        <br>
        <button type="submit" class="btn btn-info btn-sm" value="Simpan"><i class="fa fa-save fa-sm"></i> Simpan</button>
        <a href="{{route('datalembaga.index')}}" class="btn btn-dark btn-sm"><i class="fa fa-arrow-circle-left fa-fw fa-sm"></i> Kembali</a>
        </form>
      </div>
    </div>
</div>
@endsection