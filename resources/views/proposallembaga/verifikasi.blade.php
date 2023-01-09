
@extends('layouts.sbadmin')

@section('content')

<div class="col-md-12">
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
          <h6 class="m-0 font-weight-bold text-primary">Detail Permohonan</h6>
        </a>
    
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="collapseCardExample">
       
          <div class="card-body">
            <div class="table-responsive">
                  
              <table class="table">
     
    <tr>
        <th class="bg-light" width="200">Nama Proposal</th>
        <td>{{$proposallembaga->namaproposal}}</td>
    </tr>
    <tr>
        <th class="bg-light">Nomo HP</th>
    <td >{{$proposallembaga->nohp}}</td>
    </tr>
    <tr>
      <th class="bg-light">Alamat</th>
  <td>{{$proposallembaga->alamat}}</td>
  </tr>
    <tr>
        <th class="bg-light">Kecamatan</th>
    <td>{{$proposallembaga->kecamatan}}</td>
    </tr>
    <tr>
        <th class="bg-light">Kelurahan/Desa</th>
        <td>{{$proposallembaga->kecamatan}}</td>
    </tr>
    <tr>
        <th class="bg-light">Upload Berkas Kelengkapan Proposal </th>
        <td>
              
                  <div class="breadcrumb bg-primary text-white">
                      Berkas yang di upload
                  </div>
              <table class="table">
                  <tr>
                      <th class="breadcrumb text-dark">Proposal/Permohonan Kepada Bupati Penajam paser Utara</th>
                      <td><a href="{{asset('storage/'.$proposallembaga->fileproposal)}}" target="_blank" class="btn btn-primary ">Tampilkan</a>
                         
                      </td>
                  </tr>
                  <tr>
                      <th class="breadcrumb text-dark">
                          Surat Keterangan Tanggung Jawab
                      </th>
                      <td>
                          <a href="{{asset('storage/'.$proposallembaga->sktj)}}" target="_blank" class="btn btn-primary ">Tampilkan</a>
                      </td>
                  </tr>
                  <tr>
                      <th class="breadcrumb text-dark">
                          Surat Pernyataan Menyediakan Dana Pendamping
                      </th>
                      <td>
                          <a href="{{asset('storage/'.$proposallembaga->suratpernyataan)}}" target="_blank" class="btn btn-primary ">Tampilkan</a>
                      </td>
                  </tr>
                  <tr>
                      <th class="breadcrumb text-dark">
                          Surat Keterangan Domisili
                      </th>
                      <td>
                          <a href="{{asset('storage/'.$proposallembaga->suratdomisili)}}" target="_blank" class="btn btn-primary ">Tampilkan</a>
                         
                      </td>
                  </tr>
                  <tr>
                      <th class="breadcrumb text-dark">
                          Susunan Kepengurusan
                      </th>
                      <td>
                          <a href="{{asset('storage/'.$proposallembaga->susunankepengurusan)}}" target="_blank" class="btn btn-primary ">Tampilkan</a>
                      </td>
                  </tr>
                  <tr>
                      <th class="breadcrumb text-dark">
                          Rekomendasi Camat
                      </th>
                      <td>
                          <a href="{{asset('storage/'.$proposallembaga->rekomendasicamat)}}" target="_blank" class="btn btn-primary ">Tampilkan</a>
                      </td>
                  </tr>
                  <tr>
                      <th class="breadcrumb text-dark">
                        Nomor Pokok Wajib Pajak (Npwp)
                      </th>
                      <td>
                          <a href="{{asset('storage/'.$proposallembaga->npwp)}}" target="_blank" class="btn btn-primary ">Tampilkan</a>
                      </td>
                  </tr>
                  <tr>
                      <th class="breadcrumb text-dark">
                        Akta Notaris
                      </th>
                      <td>
                          <a href="{{asset('storage/'.$proposallembaga->aktanotaris)}}" target="_blank" class="btn btn-primary ">Tampilkan</a>
                      </td>
                  </tr>
                  <tr>
                      <th class="breadcrumb text-dark">
                          Izin Operasional
                      </th>
                      <td>
                          <a href="{{asset('storage/'.$proposallembaga->izinoperasional)}}" target="_blank" class="btn btn-primary ">Tampilkan</a>
                      </td>
                  </tr>
                  <tr>
                      <th class="breadcrumb text-dark">
                         Surat Keterangan Terdaftar pada Kesbanglimas Kab.PPU (Min. 3 Tahun)
                      </th>
                      <td>
                          <a href="{{asset('storage/'.$proposallembaga->terdaftarkesbanglimas)}}" target="_blank" class="btn btn-primary ">Tampilkan</a>
                      </td>
                  </tr>
                  <tr>
                      <th class="breadcrumb text-dark">
                         Bukti Kontrak Sewa Gedung/Bangunan (bagi yang menyewa)
                      </th>
                      <td>
                          <a href="{{asset('storage/'.$proposallembaga->buktisewagedung)}}" target="_blank" class="btn btn-primary ">Tampilkan</a>
                         
                      </td>
                  </tr>
                  <tr>
                      <th class="breadcrumb text-dark">
                          Surat Pernyataan Tidak Terjadi Konflik Diketahui Lurah/Kepala Desa
                      </th>
                      <td>
                          <a href="{{asset('storage/'.$proposallembaga->pernyataantidakkonflik)}}" target="_blank" class="btn btn-primary ">Tampilkan</a>
                      </td>
                  </tr>
                  <tr>
                      <th class="breadcrumb text-dark">
                      Bukti Kepemilikan Tanah
                      </th>
                      <td>
                          <a href="{{asset('storage/'.$proposallembaga->buktitanah)}}" target="_blank" class="btn btn-primary ">Tampilkan</a>
                      </td>
                  </tr>
                  <tr>
                      <th class="breadcrumb text-dark">
                          KTP pengurus (Ketua,Sekertaris dan Bendahara) di jadikan 1 file PDF
                      </th>
                      <td>
                          <a href="{{asset('storage/'.$proposallembaga->identitaspengurus)}}" target="_blank" class="btn btn-primary ">Tampilkan</a>
                      </td>
                  </tr>
                  <tr>
                      <th class="breadcrumb text-dark">
                          Rekening Bank Kaltimtara atas nama Pengurus/Lembaga
                      </th>
                      <td>
                          <a href="{{asset('storage/'.$proposallembaga->rekening)}}" target="_blank" class="btn btn-primary ">Tampilkan</a>
                      </td>
                  </tr>
                  <tr>
                      <th class="breadcrumb text-dark">
                          Denah Lokasi Sekretariat / Bangunan
                      </th>
                      <td>
                          <a href="{{asset('storage/'.$proposallembaga->denahlokasi)}}" target="_blank" class="btn btn-primary ">Tampilkan</a>
                      </td>
                  </tr>
                  <tr>
                      <th class="breadcrumb text-dark">
                      Foto Bangunan Sekretariat dan Plang Sekretariat
                      </th>
                      <td>
                          <a href="{{asset('storage/'.$proposallembaga->fotobangunansekretariat)}}" target="_blank" class="btn btn-primary ">Tampilkan</a>
                      </td>
                  </tr>
                  @if($proposallembaga->gambarbangunan != "")
                  <tr>
                      <th class="breadcrumb text-dark">
                          Gambar Rencana Bangunan ( Bagi Penggunaan Bangunan /Fisik Baru)
                      </th>
                      <td>
                          <a href="{{asset('storage/'.$proposallembaga->gambarbangunan)}}" target="_blank" class="btn btn-primary ">Tampilkan</a>
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


@if ($proposallembaga->status == 'Verifikasi' || $proposallembaga->status == 'Diterima' || $proposallembaga->status == 'Perbaikan')
        @if (Auth::user()->role == "VERIFIKATOR" || Auth::user()->role == "ADMIN")
            @if ($proposallembaga->status !== 'Diterima')
                <form onsubmit="return confirm('Apakah Permohonan Sdh Sesuai?')" action="{{route('proposallembaga.proses',[$proposallembaga->id])}}" method="POST" class="d-inline">
                    @csrf
                   
                    <input type="submit" value="Proses" class="btn btn-primary">
                </form>
            @else($proposallembaga->status == 'Diterima')
           
            @endif
        @endif

@endif

<a href="#" data-toggle="modal" data-target="#catatan" class="btn btn-danger">Tidak Sesuai</a> 
<a href="{{route('proposallembaga.index')}}" class="btn btn-info">Kembali</a>

</div>


        </div>
      </div>
  

  </div>
</div>

<div class="modal fade" id="catatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Alasan Penolakan?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <form onsubmit="return confirm('Apakah Permohonan ingin Benar Tidak Sesuai?')" action="{{route('catatan.lembaga')}}" method="POST" class="d-inline">
            @csrf
            <input type="hidden" value="{{$proposallembaga->id}}" name="id_lembaga">
          <div class="modal-body">
            <input type="text" name="keterangan" class="form-control">
          </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <input type="submit" value="Kirim" class="btn btn-primary">
            </div>
        </form>
        </div>
    </div>
  </div>
@endsection