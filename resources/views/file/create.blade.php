@extends('layouts.sbadmin')

@section('footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
      // Format mata uang.
      $( '#nominal' ).mask('000.000.000.000.000', {reverse: true});
  
  })
</script>
@endsection
@section('content')
<div class="col-md-8">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah File</h6>
      </div>
      
      <div class="card-body">
    
      @if(session('status'))
          <div class="alert alert-success">
            {{session('status')}}
          </div>
        @endif 
        <form action="{{route('datafile.store')}}" enctype="multipart/form-data" method="POST" class="bg-white shadow-sm p-3">
        @csrf
        <div class="row">
          <div class="col-6">
            <label for="">Tanggal</label> 
            <input type="date" name="tanggal" class="form-control {{$errors->first('tanggal') ? "is-invalid" : ""}}" value="{{old('tanggal')}}" placeholder="tanggal">
            <div class="invalid-feedbeck"> {{$errors->first('tanggal')}}</div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-12">
            <label for="">No rekening</label> 
            <input type="text" name="norekening" class="form-control {{$errors->first('norekening') ? "is-invalid" : ""}}"  value="{{old('norekening')}}" placeholder="norekening">
            <div class="invalid-feedbeck"> {{$errors->first('norekening')}}</div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-12">
            <label for="">Uraian</label> 
            <input type="text" name="uraian" class="form-control {{$errors->first('uraian') ? "is-invalid" : ""}}" value="{{old('uraian')}}" placeholder="uraian">
            <div class="invalid-feedbeck"> {{$errors->first('uraian')}}</div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-6">
            <label for="">Nominal</label> 
            <input type="text" name="nominal" id="nominal" class="form-control {{$errors->first('nominal') ? "is-invalid" : ""}}" value="{{old('nominal')}}" placeholder="nominal">
            <div class="invalid-feedbeck"> {{$errors->first('nominal')}}</div>
          </div>
          <div class="col-6">
            <label for="">Penyedia</label> 
            <input type="text" name="penyedia" class="form-control {{$errors->first('penyedia') ? "is-invalid" : ""}}" value="{{old('penyedia')}}" placeholder="penyedia">
            <div class="invalid-feedbeck"> {{$errors->first('penyedia')}}</div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-6">
            <label for="">Tanggal Order</label> 
            <input type="date" name="tglorder" class="form-control {{$errors->first('tglorder') ? "is-invalid" : ""}}"  value="{{old('tglorder')}}" placeholder="tglorder">
            <div class="invalid-feedbeck"> {{$errors->first('tglorder')}}</div>
          </div>
          <div class="col-6">
            <label for="">Tanggal Cair</label> 
            <input type="date" name="tglcair" class="form-control {{$errors->first('tglcair') ? "is-invalid" : ""}}" value="{{old('tglcair')}}" placeholder="tglcair">
            <div class="invalid-feedbeck"> {{$errors->first('tglcair')}}</div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-12">
            <label for="">Kegiatan</label> 
            <select name="id_kegiatan" class="form-control {{$errors->first('id_kegiatan') ? "is-invalid" : ""}}">
              <option value=""></option>
              @foreach ($kegiatan as $k)
                  <option value="{{$k->id}}">{{$k->nama}}</option>
              @endforeach
            </select>
            <div class="invalid-feedbeck"> {{$errors->first('id_kegiatan')}}</div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-12">
            <label for="">Keterangan</label>
            <input type="text" name="keterangan" placeholder="keterangan" class="form-control {{$errors->first('keterangan') ? "is-invalid" : ""}}">
            <div class="invalid-feedbeck"> {{$errors->first('keterangan')}}</div>
          </div>
        </div><br>
        <div class="row">
          <div class="col-12">
            <label for="">File</label>
            <input type="file" class="form-control {{$errors->first('file') ? "is-invalid" : ""}}" name="file">
          <div class="invalid-feedbeck"> {{$errors->first('file')}}</div>
            <small>*file bertipe PDF maximal size 10mb</small>
          </div>
        </div><br>
        <button type="submit" class="btn btn-primary btn-sm" value="Simpan"><i class="fa fa-save fa-sm"></i> Simpan</button>
        <a href="{{route('datafile.index')}}" class="btn btn-primary btn-sm"><i class="fa fa-arrow-circle-left fa-fw fa-sm"></i>Kembali</a>
        </form>
      </div>
    </div>
</div>
@endsection