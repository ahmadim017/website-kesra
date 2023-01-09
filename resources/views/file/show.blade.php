@extends('layouts.sbadmin')

@section('content')
<div class="col-md-12">
  <div class="card shadow mb-4">
      <!-- Card Header - Accordion -->
      <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
        <h6 class="m-0 font-weight-bold text-primary">Detail Uraian Kegiatan</h6>
      </a>
  
      <!-- Card Content - Collapse -->
      <div class="collapse show" id="collapseCardExample">
        <div class="card-body">
          <div class="table-responsive">
<table class="table">
  <tr>
    <th class="bg-light">Tanggal</th>
  <td colspan="3"><strong>{{Date::createFromDate($file->tanggal)->format('j F Y')}}</strong></td>
</tr>
  <tr>
      <th class="bg-light" width="200">Nomor Rekening</th>
      <td colspan="3"><strong>{{$file->norekening}}</strong></td>
  </tr>
  
  <tr>
    <th class="bg-light" width="200">Uraian</th>
    <td colspan="3"><strong>{{$file->uraian}}</strong></td>
</tr>
<tr>
  <th class="bg-light" width="200">Kegiatan</th>
  <td colspan="3"><strong>{{$file->kegiatan->nama}}</strong></td>
</tr>
<tr>
  <th class="bg-light" width="200">Nominal</th>
  <td colspan="3"><strong>Rp.{{number_format($file->nominal)}}</strong></td>
</tr>
<tr>
  <th class="bg-light" width="200">Penyedia</th>
  <td colspan="3"><strong>{{$file->penyedia}}</strong></td>
</tr>
<tr>
  <th class="bg-light">Tanggal Order</th>
<td colspan="3"><strong>{{Date::createFromDate($file->tglorder)->format('j F Y')}}</strong></td>
</tr>
<tr>
  <th class="bg-light">Tanggal Cair</th>
<td colspan="3"><strong>{{Date::createFromDate($file->tglcair)->format('j F Y')}}</strong></td>
</tr>
<tr>
  <th class="bg-light" width="200">Tahun</th>
  <td colspan="3"><strong>{{$file->tahun}}</strong></td>
</tr>
<tr>
  <th class="bg-light" width="200">Keterangan</th>
  <td colspan="3"><strong>{{$file->keterangan}}</strong></td>
</tr>
  <tr>
      <th class="bg-light">File</th>
  <td><strong><a href="{{route('file.download',[$file->id])}}"><i class="fas fa-download fa-fw fa-sm"></i>{{$file->tittle}}</a></strong></td>
  </tr>
</table>
</div>

<a href="{{route('datafile.edit',[$file->id])}}" class="btn btn-primary btn-sm">Edit</a> 
<form onsubmit="return confirm('Apakah Anda Yakin Ingin Menghapus?')" action="{{route('datafile.destroy',[$file->id])}}" class="d-inline" method="POST">
  @csrf
  <input type="hidden" name="_method" value="DELETE">
  <input type="submit" value="Delete" class="btn btn-danger btn-sm">
  </form>
<a href="{{route('datafile.index')}}" class="btn btn-primary btn-sm"><i class="fa fa-arrow-circle-left fa-fw fa-sm"></i>Kembali</a>
        </div>
      </div>
  

  </div>
</div>
@endsection