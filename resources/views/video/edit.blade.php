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
        <h6 class="m-0 font-weight-bold text-info">Edit Kegiatan</h6>
      </div>
      
      <div class="card-body">
    
      @if(session('status'))
          <div class="alert alert-success">
            {{session('status')}}
          </div>
        @endif 
        <form action="{{route('video.update',[$video->id])}}" enctype="multipart/form-data" method="POST" class="bg-white shadow-sm p-3">
        @csrf
        @method('PUT')
        <div class="row">
          <div class="col-12">
                <label for="">Judul</label>
                <input type="text" name="judul" value="{{$video->judul}}" class="form-control {{$errors->first('judul') ? "is-invalid" : ""}}" placeholder="Judul kegiatan">
                <div class="invalid-feedbeck">{{$errors->first('judul')}}</div>
           </div>
        </div>
        <br>
        <div class="row">
          <div class="col-12">
            <label for="">Link Youtube</label>
            <input type="text" name="link" value="{{$video->link}}" class="form-control {{$errors->first('link') ? "is-invalid" : ""}}" placeholder="link youtube">
            <div class="invalid-feedbeck">{{$errors->first('link')}}</div>
       </div>
        </div><br>
        <div class="row">
            <div class="col-12">
                <label for="">content</label>
            <textarea name="isi" id="textarea" cols="30" rows="10" class="textarea form-control">{{$video->content}}</textarea>
            </div>
        </div><br>
        <div class="row">
            <div class="col-2">
                <label for="">Status</label>
                <select name="status" class="form-control">
                    <option @if ($video->status == "ACTIVE") selected @endif value="ACTIVE">ACTIVE</option>
                    <option @if ($video->status == "INACTIVE") selected @endif value="INACTIVE">INACTIVE</option>
                </select>
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-info btn-sm" value="Simpan"><i class="fa fa-save fa-sm"></i> Simpan</button>
        <a href="{{route('video.index')}}" class="btn btn-dark btn-sm"><i class="fa fa-arrow-circle-left fa-fw fa-sm"></i>Kembali</a>
      </form> <br>
      <form action="{{route('video.destroy',[$video->id])}}" method="POST">
        @csrf
        @method('DELETE')
      <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
        </form>
      </div>
    </div>
</div>
@endsection