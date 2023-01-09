@extends('layouts.sbadmin')

@section('content')
<div class="col-md-12">
  <div class="card shadow mb-4">
      <!-- Card Header - Accordion -->
      <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
        <h6 class="m-0 font-weight-bold text-primary">Detail Surat Masuk</h6>
      </a>
  
      <!-- Card Content - Collapse -->
      <div class="collapse show" id="collapseCardExample">
        <div class="card-body">
          <div class="table-responsive">
<table class="table">
  <tr>
      <th class="bg-light" width="200">No surat</th>
      <td colspan="3"><strong>{{$suratmasuk->nosurat}}</strong></td>
  </tr>
  <tr>
      <th class="bg-light">Tanggal Surat</th>
  <td colspan="3"><strong>{{Date::createFromDate($suratmasuk->tglsurat)->format('j F Y')}}</strong></td>
  </tr>
  <tr>
    <th class="bg-light">Tanggal Terima Surat</th>
  <td colspan="3"><strong>{{Date::createFromDate($suratmasuk->tglterima)->format('j F Y')}}</strong></td>
  </tr>
  <tr>
    <th class="bg-light">Judul/Perihal</th>
<td><strong>{{$suratmasuk->judul}}</strong></td>
</tr>
  <tr>
      <th class="bg-light">Asal Surat</th>
  <td><strong>{{$suratmasuk->opd->nama}}</strong></td>
  </tr>
  <tr>
      <th class="bg-light">Keterangan</th>
  <td><strong>{{$suratmasuk->keterangan}}</strong></td>
  </tr>
  <tr>
      <th class="bg-light">File Surat Usulan</th>
  <td><strong><a href="{{route('suratmasuk.download',[$suratmasuk->id])}}"><i class="fas fa-download fa-fw fa-sm"></i>{{$suratmasuk->tittle}}</a></strong></td>
  </tr>
</table>
</div>

<a href="{{route('suratmasuk.edit',[$suratmasuk->id])}}" class="btn btn-primary btn-sm">Edit</a> 
              <form onsubmit="return confirm('Apakah Anda Yakin Ingin Menghapus?')" action="{{route('suratmasuk.destroy',[$suratmasuk->id])}}" class="d-inline" method="POST">
              @csrf
              <input type="hidden" name="_method" value="DELETE">
              <input type="submit" value="Delete" class="btn btn-danger btn-sm">
              </form>
<a href="{{route('suratmasuk.index')}}" class="btn btn-primary btn-sm"><i class="fa fa-arrow-circle-left fa-fw fa-sm"></i>Kembali</a>
        </div>
      </div>
  

  </div>
</div>
@endsection