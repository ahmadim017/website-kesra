@extends('layouts.sbadmin')

@section('header')

<script src="//cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>

@endsection

@section('footer')

<script>
  var konten = document.getElementById("textarea");
     CKEDITOR.replace(textarea,{
     language:'en-gb'
   });
   
    // $('.textarea').ckeditor(); // if class is prefered.
</script>
@endsection
@section('content')
<div class="col-md-10">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-info">Tambah Kegiatan</h6>
      </div>
      
      <div class="card-body">
    
      @if(session('status'))
          <div class="alert alert-success">
            {{session('status')}}
          </div>
        @endif 
        <form action="{{route('video.store')}}" enctype="multipart/form-data" method="POST" class="bg-white shadow-sm p-3">
        @csrf
        <div class="row">
          <div class="col-12">
                <label for="">Judul</label>
                <input type="text" name="judul" class="form-control {{$errors->first('judul') ? "is-invalid" : ""}}" placeholder="Judul Berita">
                <div class="invalid-feedbeck">{{$errors->first('judul')}}</div>
           </div>
        </div>
        <br>
        <div class="row">
          <div class="col-12">
            <label for="">Link Youtube</label>
            <input type="text" name="link" class="form-control {{$errors->first('link') ? "is-invalid" : ""}}" placeholder="link Youtube">
            <div class="invalid-feedbeck">{{$errors->first('link')}}</div>
       </div>
        </div><br>
        <div class="row">
            <div class="col-12">
                <label for="">content</label>
                <textarea name="content" id="textarea" cols="30" rows="10" class="form-control"></textarea>
            </div>
        </div><br>
        <button type="submit" class="btn btn-info btn-sm" value="Simpan"><i class="fa fa-save fa-sm"></i> Simpan</button>
        <a href="{{route('video.index')}}" class="btn btn-dark btn-sm"><i class="fa fa-arrow-circle-left fa-fw fa-sm"></i>Kembali</a>
        </form>
      </div>
    </div>
</div>
@endsection