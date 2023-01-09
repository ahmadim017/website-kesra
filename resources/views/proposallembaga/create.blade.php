
@extends('layouts.sbadmin')

@section('content')

<div class="col-md-12">
  <div class="card shadow mb-4">
      <!-- Card Header - Accordion -->
      <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
        <h6 class="m-0 font-weight-bold text-primary">Buat Surat Permohonan</h6>
      </a>
  
      <!-- Card Content - Collapse -->
      <div class="collapse show" id="collapseCardExample">
        <form action="{{route('proposallembaga.store')}}" enctype="multipart/form-data" method="POST">
            @csrf  
        <div class="card-body">
          <div class="table-responsive">
                
            <table class="table">
   
  <tr>
      <th class="bg-light" width="150">Nama Proposal</th>
      <td ><input type="text" name="namaproposal" value="{{old('namaproposal')}}" class="form-control {{$errors->first('namaproposal') ? "is-invalid" : ""}}"> <div class="invalid-feedbeck">{{$errors->first('namaproposal')}}</div></td>
  </tr>
  <tr>
      <th class="bg-light">Nomo HP</th>
  <td ><input type="number" name="nohp" value="{{old('nohp')}}" class="form-control col-md-4 {{$errors->first('nohp') ? "is-invalid" : ""}}"> <div class="invalid-feedbeck">{{$errors->first('nohp')}}</div></td>
  </tr>
  <tr>
    <th class="bg-light">Alamat</th>
<td><textarea name="alamat" value="{{old('alamat')}}" class="form-control {{$errors->first('alamat') ? "is-invalid" : ""}}"></textarea><div class="invalid-feedbeck">{{$errors->first('alamat')}}</div></td>
</tr>
  <tr>
      <th class="bg-light">Kecamatan</th>
  <td>  
    <select name="kecamatan" class="form-control col-md-4 {{$errors->first('kecamatan') ? "is-invalid" : ""}}">
    <option value=""></option>
    <option value="Penajam">Penajam</option>
    <option value="Waru">Waru</option>
    <option value="Babulu">Babulu</option>
    <option value="Sepaku">Sepaku</option>
    </select>
    <div class="invalid-feedbeck"> {{$errors->first('kecamatan')}}</div></td>
  </tr>
  <tr>
      <th class="bg-light">Kelurahan/Desa</th>
  <td><input type="text" value="{{old('kelurahan')}}" class="form-control col-md-6  {{$errors->first('kelurahan') ? "is-invalid" : ""}}" name="kelurahan"> <div class="invalid-feedbeck"> {{$errors->first('kelurahan')}}</div></td>
  </tr>
  <tr>
      <th class="bg-light">Upload Berkas Kelengkapan Proposal </th>
      <td>
            
                <div class="breadcrumb bg-primary text-white">
                    Upload Berkas Kelengkapan disni Pastikan FIle Bertipe *PDF maximal 2mb, Baca Tata Caranya  <a href="{{route('keagamaan.index')}}" target="_blank" class="badge badge-warning"> Disini</a>
                </div>
            <table class="table">
                <tr>
                    <th class="breadcrumb text-dark">Proposal/Permohonan Kepada Bupati Penajam paser Utara</th>
                    <td>
                        <input type="file" class="form-control {{$errors->first('fileproposal') ? "is-invalid" : ""}}"  name="fileproposal" >
                        <div class="invalid-feedbeck"> {{$errors->first('fileproposal')}}</div>
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
                </tr>
                <tr>
                    <th class="breadcrumb text-dark">
                        Surat Pernyataan Menyediakan Dana Pendamping
                    </th>
                    <td>
                        <input type="file" class="form-control {{$errors->first('suratpernyataan') ? "is-invalid" : ""}}" name="suratpernyataan">
                        <div class="invalid-feedbeck"> {{$errors->first('suratpernyataan')}}</div>
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
                </tr>
                <tr>
                    <th class="breadcrumb text-dark">
                        Susunan Kepengurusan
                    </th>
                    <td>
                        <input type="file" class="form-control {{$errors->first('susunankepengurusan') ? "is-invalid" : ""}}" name="susunankepengurusan">
                        <div class="invalid-feedbeck"> {{$errors->first('susunankepengurusan')}}</div>
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
                </tr>
                <tr>
                    <th class="breadcrumb text-dark">
                      Nomor Pokok Wajib Pajak (Npwp)
                    </th>
                    <td>
                        <input type="file" class="form-control {{$errors->first('npwp') ? "is-invalid" : ""}}"  name="npwp">
                        <div class="invalid-feedbeck"> {{$errors->first('npwp')}}</div>
                    </td>
                </tr>
                <tr>
                    <th class="breadcrumb text-dark">
                      Akta Notaris
                    </th>
                    <td>
                        <input type="file" class="form-control {{$errors->first('aktanotaris') ? "is-invalid" : ""}}"  name="aktanotaris">
                        <div class="invalid-feedbeck"> {{$errors->first('aktanotaris')}}</div>
                    </td>
                </tr>
                <tr>
                    <th class="breadcrumb text-dark">
                        Izin Operasional
                    </th>
                    <td>
                        <input type="file" class="form-control {{$errors->first('izinoperasional') ? "is-invalid" : ""}}"  name="izinoperasional">
                        <div class="invalid-feedbeck"> {{$errors->first('izinoperasional')}}</div>
                    </td>
                </tr>
                <tr>
                    <th class="breadcrumb text-dark">
                       Surat Keterangan Terdaftar pada Kesbanglimas Kab.PPU (Min. 3 Tahun)
                    </th>
                    <td>
                        <input type="file" class="form-control {{$errors->first('terdaftarkesbanglimas') ? "is-invalid" : ""}}"  name="terdaftarkesbanglimas">
                        <div class="invalid-feedbeck"> {{$errors->first('terdaftarkesbanglimas')}}</div>
                    </td>
                </tr>
                <tr>
                    <th class="breadcrumb text-dark">
                       Bukti Kontrak Sewa Gedung/Bangunan (bagi yang menyewa)
                    </th>
                    <td>
                        <input type="file" class="form-control {{$errors->first('buktisewagedung') ? "is-invalid" : ""}}"  name="buktisewagedung">
                        <div class="invalid-feedbeck"> {{$errors->first('buktisewagedung')}}</div>
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
                </tr>
                <tr>
                    <th class="breadcrumb text-dark">
                    Bukti Kepemilikan Tanah
                    </th>
                    <td>
                        <input type="file" class="form-control {{$errors->first('buktitanah') ? "is-invalid" : ""}}"  name="buktitanah">
                        <div class="invalid-feedbeck"> {{$errors->first('buktitanah')}}</div>
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
                </tr>
                <tr>
                    <th class="breadcrumb text-dark">
                        Rekening Bank Kaltimtara atas nama Pengurus/Lembaga
                    </th>
                    <td>
                        <input type="file" class="form-control {{$errors->first('rekening') ? "is-invalid" : ""}}"  name="rekening">
                        <div class="invalid-feedbeck"> {{$errors->first('rekening')}}</div>
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
                </tr>
                <tr>
                    <th class="breadcrumb text-dark">
                    Foto Bangunan Sekretariat dan Plang Sekretariat
                    </th>
                    <td>
                        <input type="file" class="form-control {{$errors->first('fotobangunansekretariat') ? "is-invalid" : ""}}"  name="fotobangunansekretariat">
                        <div class="invalid-feedbeck"> {{$errors->first('fotobangunansekretariat')}}</div>
                    </td>
                </tr>
                <tr>
                    <th class="breadcrumb text-dark">
                        Gambar Rencana Bangunan ( Bagi Penggunaan Bangunan /Fisik Baru)
                    </th>
                    <td>
                        <input type="file" class="form-control {{$errors->first('gambarbangunan') ? "is-invalid" : ""}}" name="gambarbangunan">
                        <div class="invalid-feedbeck"> {{$errors->first('gambarbangunan')}}</div>
                    </td>
                </tr>
            </table>
           
    </td>
  </tr>
</table>
<input type="submit" value="Ajukan Permohonan" class="btn btn-primary">
<a href="{{route('proposalibadah.index')}}" class="btn btn-info">Kembali</a>

</div>


        </div>
    </form>
      </div>
  

  </div>
</div>
@endsection