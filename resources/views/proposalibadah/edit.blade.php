
@extends('layouts.sbadmin')

@section('content')

<div class="col-md-12">
  <div class="card shadow mb-4">
      <!-- Card Header - Accordion -->
      <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
        <h6 class="m-0 font-weight-bold text-primary">Edit Permohonan</h6>
      </a>
  
      <!-- Card Content - Collapse -->
      <div class="collapse show" id="collapseCardExample">
        <form onsubmit="return confirm('Apakah Permohohanan sdh diperbaiki?')" action="{{route('proposalibadah.update',[$proposalibadah->id])}}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
        <div class="card-body">
          <div class="table-responsive">
                
            <table class="table">
   
  <tr>
      <th class="bg-light" width="200">Nama Proposal</th>
      <td><input type="text" name="namaproposal" value="{{$proposalibadah->namaproposal}}" class="form-control"></td>
  </tr>
  <tr>
      <th class="bg-light">Nomo HP</th>
  <td ><input type="text" name="nohp" value="{{$proposalibadah->nohp}}" class="form-control"></td>
  </tr>
  <tr>
    <th class="bg-light">Alamat</th>
<td><textarea name="alamat" class="form-control">{{$proposalibadah->alamat}}</textarea></td>
</tr>
  <tr>
      <th class="bg-light">Kecamatan</th>
  <td><select name="kecamatan" class="form-control">
    <option @if ($proposalibadah->kecamatan == 'Penajam') selected @endif value="Penajam">Penajam</option>
    <option @if ($proposalibadah->kecamatan == 'Waru') selected @endif value="Waru">Waru</option>
    <option @if ($proposalibadah->kecamatan == 'Babulu') selected @endif value="Babulu">Babulu</option>
    <option @if ($proposalibadah->kecamatan == 'Sepaku') selected @endif value="Sepaku">Sepaku</option>
    </select></td>
  </tr>
  <tr>
      <th class="bg-light">Kelurahan/Desa</th>
      <td><input type="text" name="kelurahan" value="{{$proposalibadah->kelurahan}}" class="form-control"></td>
  </tr>
  <tr>
      <th class="bg-light">Upload Berkas Kelengkapan Proposal </th>
      <td>
            
                <div class="breadcrumb bg-primary text-white">
                    Upload Berkas yang di perbaiki saja jika tidak ada yang di upload/diperbaiki kosongkan saja
                </div>
            <table class="table">
                <tr>
                    <th class="breadcrumb text-dark">Proposal/Permohonan Kepada Bupati Penajam paser Utara</th>
                    <td>
                        <input type="file" class="form-control {{$errors->first('fileproposal') ? "is-invalid" : ""}}"  name="fileproposal" >
                        <div class="invalid-feedbeck"> {{$errors->first('fileproposal')}}</div>
                    </td>
                    <td><a href="{{asset('storage/'.$proposalibadah->fileproposal)}}" target="_blank" class="btn btn-primary ">Tampilkan</a> 
                    </td>
                </tr>
                <tr>
                    <th class="breadcrumb text-dark">
                        Surat Keterangan Tanggung Jawab
                    </th>
                    <td>
                        <input type="file" class="form-control {{$errors->first('sktj') ? "is-invalid" : ""}}"   name="sktj">
                        <div class="invalid-feedbeck"> {{$errors->first('sktj')}}</div>
                    </td>
                    <td>
                        <a href="{{asset('storage/'.$proposalibadah->sktj)}}" target="_blank" class="btn btn-primary ">Tampilkan</a>
                    </td>
                </tr>
                <tr>
                    <th class="breadcrumb text-dark">
                        Surat Pernyataan Menyediakan Dana Pendamping
                    </th>
                    <td>
                        <input type="file" class="form-control {{$errors->first('suratpernyataan') ? "is-invalid" : ""}}" name="suratpernyataan">
                        <div class="invalid-feedbeck"> {{$errors->first('suratpernyataan')}}</div>
                    </td>
                    <td>
                        <a href="{{asset('storage/'.$proposalibadah->suratpernyataan)}}" target="_blank" class="btn btn-primary ">Tampilkan</a>
                    </td>
                </tr>
                <tr>
                    <th class="breadcrumb text-dark">
                        Surat Keterangan Domisili
                    </th>
                    <td>
                        <input type="file" class="form-control {{$errors->first('suratdomisili') ? "is-invalid" : ""}}"  name="suratdomisili">
                        <div class="invalid-feedbeck"> {{$errors->first('suratdomisili')}}</div>
                    </td>
                    <td>
                        <a href="{{asset('storage/'.$proposalibadah->suratdomisili)}}" target="_blank" class="btn btn-primary ">Tampilkan</a>
                       
                    </td>
                </tr>
                <tr>
                    <th class="breadcrumb text-dark">
                        Susunan Kepengurusan
                    </th>
                    <td>
                        <input type="file" class="form-control {{$errors->first('susunankepengurusan') ? "is-invalid" : ""}}" name="susunankepengurusan">
                        <div class="invalid-feedbeck"> {{$errors->first('susunankepengurusan')}}</div>
                    </td>
                    <td>
                        <a href="{{asset('storage/'.$proposalibadah->susunankepengurusan)}}" target="_blank" class="btn btn-primary ">Tampilkan</a>
                    </td>
                </tr>
                <tr>
                    <th class="breadcrumb text-dark">
                        Rekomendasi Camat
                    </th>
                    <td>
                        <input type="file" class="form-control {{$errors->first('rekomendasicamat') ? "is-invalid" : ""}}" name="rekomendasicamat">
                        <div class="invalid-feedbeck"> {{$errors->first('rekomendasicamat')}}</div>
                    </td>
                    <td>
                        <a href="{{asset('storage/'.$proposalibadah->rekomendasicamat)}}" target="_blank" class="btn btn-primary ">Tampilkan</a>
                    </td>
                </tr>
                <tr>
                    <th class="breadcrumb text-dark">
                        Rekomendasi Kantor Kementrian Agama Kabupaten Penajam Paser Utara
                    </th>
                    <td>
                        <input type="file" class="form-control {{$errors->first('rekomendasikemenag') ? "is-invalid" : ""}}"  name="rekomendasikemenag">
                        <div class="invalid-feedbeck"> {{$errors->first('rekomendasikemenag')}}</div>
                    </td>
                    <td>
                        <a href="{{asset('storage/'.$proposalibadah->rekomendasikemenag)}}" target="_blank" class="btn btn-primary ">Tampilkan</a>
                    </td>
                </tr>
                <tr>
                    <th class="breadcrumb text-dark">
                        Surat Pernyataan Tidak Terjadi Konflik Diketahui Lurah/Kepala Desa
                    </th>
                    <td>
                        <input type="file" class="form-control {{$errors->first('pernyataantidakkonflik') ? "is-invalid" : ""}}"  name="pernyataantidakkonflik">
                        <div class="invalid-feedbeck"> {{$errors->first('pernyataantidakkonflik')}}</div>
                    </td>
                    <td>
                        <a href="{{asset('storage/'.$proposalibadah->pernyataantidakkonflik)}}" target="_blank" class="btn btn-primary ">Tampilkan</a>
                    </td>
                </tr>
                <tr>
                    <th class="breadcrumb text-dark">
                    Bukti Kepemilikan Tanah
                    </th>
                    <td>
                        <input type="file" class="form-control {{$errors->first('buktitanah') ? "is-invalid" : ""}}"  name="buktitanah">
                        <div class="invalid-feedbeck"> {{$errors->first('buktitanah')}}</div>
                    </td>
                    <td>
                        <a href="{{asset('storage/'.$proposalibadah->buktitanah)}}" target="_blank" class="btn btn-primary ">Tampilkan</a>
                    </td>
                </tr>
                <tr>
                    <th class="breadcrumb text-dark">
                        KTP pengurus (Ketua,Sekertaris dan Bendahara) di jadikan 1 file PDF
                    </th>
                    <td>
                        <input type="file" class="form-control {{$errors->first('identitaspengurus') ? "is-invalid" : ""}}"  name="identitaspengurus">
                        <div class="invalid-feedbeck"> {{$errors->first('identitaspengurus')}}</div>
                    </td>
                    <td>
                        <a href="{{asset('storage/'.$proposalibadah->identitaspengurus)}}" target="_blank" class="btn btn-primary ">Tampilkan</a>
                    </td>
                </tr>
                <tr>
                    <th class="breadcrumb text-dark">
                        Rekening Bank Kaltimtara atas nama Pengurus/Lembaga
                    </th>
                    <td>
                        <input type="file" class="form-control {{$errors->first('rekening') ? "is-invalid" : ""}}"  name="rekening">
                        <div class="invalid-feedbeck"> {{$errors->first('rekening')}}</div>
                    </td>
                    <td>
                        <a href="{{asset('storage/'.$proposalibadah->rekening)}}" target="_blank" class="btn btn-primary ">Tampilkan</a>
                    </td>
                </tr>
                <tr>
                    <th class="breadcrumb text-dark">
                        Denah Lokasi Sekretariat / Bangunan
                    </th>
                    <td>
                        <input type="file" class="form-control {{$errors->first('denahlokasi') ? "is-invalid" : ""}}" name="denahlokasi">
                        <div class="invalid-feedbeck"> {{$errors->first('denahlokasi')}}</div>
                    </td>
                    <td>
                        <a href="{{asset('storage/'.$proposalibadah->denahlokasi)}}" target="_blank" class="btn btn-primary ">Tampilkan</a>
                    </td>
                </tr>
                <tr>
                    <th class="breadcrumb text-dark">
                    Foto Bangunan Sekretariat dan Plang Sekretariat
                    </th>
                    <td>
                        <input type="file" class="form-control {{$errors->first('fotobangunansekretariat') ? "is-invalid" : ""}}"  name="fotobangunansekretariat">
                        <div class="invalid-feedbeck"> {{$errors->first('fotobangunansekretariat')}}</div>
                    </td>
                    <td>
                        <a href="{{asset('storage/'.$proposalibadah->fotobangunansekretariat)}}" target="_blank" class="btn btn-primary ">Tampilkan</a>
                    </td>
                </tr>
                @if($proposalibadah->gambarbangunan != "")
                <tr>
                    <th class="breadcrumb text-dark">
                        Gambar Rencana Bangunan ( Bagi Penggunaan Bangunan /Fisik Baru)
                    </th>
                    <td>
                        <input type="file" class="form-control {{$errors->first('gambarbangunan') ? "is-invalid" : ""}}" name="gambarbangunan">
                        <div class="invalid-feedbeck"> {{$errors->first('gambarbangunan')}}</div>
                    </td>
                    <td>
                        <a href="{{asset('storage/'.$proposalibadah->gambarbangunan)}}" target="_blank" class="btn btn-primary ">Tampilkan</a>
                    </td>
                </tr>
                @else
                <tr>
                    <th>
                        <td>

                        </td>
                    </th>
                </tr>
                @endif
            </table>
           
    </td>
  </tr>
</table>
<input type="submit" value="Perbaiki Permohonan" class="btn btn-primary">
<a href="{{route('proposalibadah.index')}}" class="btn btn-info">Kembali</a>

</div>


        </div>
        </form>
      </div>
  

  </div>
</div>
@endsection