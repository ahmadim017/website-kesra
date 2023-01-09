
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
      <td>{{$proposalibadah->namaproposal}}</td>
  </tr>
  <tr>
      <th class="bg-light">Nomo HP</th>
  <td >{{$proposalibadah->nohp}}</td>
  </tr>
  <tr>
    <th class="bg-light">Alamat</th>
<td>{{$proposalibadah->alamat}}</td>
</tr>
  <tr>
      <th class="bg-light">Kecamatan</th>
  <td>{{$proposalibadah->kecamatan}}</td>
  </tr>
  <tr>
      <th class="bg-light">Kelurahan/Desa</th>
      <td>{{$proposalibadah->kecamatan}}</td>
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
                    <td><a href="{{asset('storage/'.$proposalibadah->fileproposal)}}" target="_blank" class="btn btn-primary ">Tampilkan</a>
                       
                    </td>
                </tr>
                <tr>
                    <th class="breadcrumb text-dark">
                        Surat Keterangan Tanggung Jawab
                    </th>
                    <td>
                        <a href="{{asset('storage/'.$proposalibadah->sktj)}}" target="_blank" class="btn btn-primary ">Tampilkan</a>
                    </td>
                </tr>
                <tr>
                    <th class="breadcrumb text-dark">
                        Surat Pernyataan Menyediakan Dana Pendamping
                    </th>
                    <td>
                        <a href="{{asset('storage/'.$proposalibadah->suratpernyataan)}}" target="_blank" class="btn btn-primary ">Tampilkan</a>
                    </td>
                </tr>
                <tr>
                    <th class="breadcrumb text-dark">
                        Surat Keterangan Domisili
                    </th>
                    <td>
                        <a href="{{asset('storage/'.$proposalibadah->suratdomisili)}}" target="_blank" class="btn btn-primary ">Tampilkan</a>
                       
                    </td>
                </tr>
                <tr>
                    <th class="breadcrumb text-dark">
                        Susunan Kepengurusan
                    </th>
                    <td>
                        <a href="{{asset('storage/'.$proposalibadah->susunankepengurusan)}}" target="_blank" class="btn btn-primary ">Tampilkan</a>
                    </td>
                </tr>
                <tr>
                    <th class="breadcrumb text-dark">
                        Rekomendasi Camat
                    </th>
                    <td>
                        <a href="{{asset('storage/'.$proposalibadah->rekomendasicamat)}}" target="_blank" class="btn btn-primary ">Tampilkan</a>
                    </td>
                </tr>
                <tr>
                    <th class="breadcrumb text-dark">
                        Rekomendasi Kantor Kementrian Agama Kabupaten Penajam Paser Utara
                    </th>
                    <td>
                        <a href="{{asset('storage/'.$proposalibadah->rekomendasikemenag)}}" target="_blank" class="btn btn-primary ">Tampilkan</a>
                    </td>
                </tr>
                <tr>
                    <th class="breadcrumb text-dark">
                        Surat Pernyataan Tidak Terjadi Konflik Diketahui Lurah/Kepala Desa
                    </th>
                    <td>
                        <a href="{{asset('storage/'.$proposalibadah->pernyataantidakkonflik)}}" target="_blank" class="btn btn-primary ">Tampilkan</a>
                    </td>
                </tr>
                <tr>
                    <th class="breadcrumb text-dark">
                    Bukti Kepemilikan Tanah
                    </th>
                    <td>
                        <a href="{{asset('storage/'.$proposalibadah->buktitanah)}}" target="_blank" class="btn btn-primary ">Tampilkan</a>
                    </td>
                </tr>
                <tr>
                    <th class="breadcrumb text-dark">
                        KTP pengurus (Ketua,Sekertaris dan Bendahara) di jadikan 1 file PDF
                    </th>
                    <td>
                        <a href="{{asset('storage/'.$proposalibadah->identitaspengurus)}}" target="_blank" class="btn btn-primary ">Tampilkan</a>
                    </td>
                </tr>
                <tr>
                    <th class="breadcrumb text-dark">
                        Rekening Bank Kaltimtara atas nama Pengurus/Lembaga
                    </th>
                    <td>
                        <a href="{{asset('storage/'.$proposalibadah->rekening)}}" target="_blank" class="btn btn-primary ">Tampilkan</a>
                    </td>
                </tr>
                <tr>
                    <th class="breadcrumb text-dark">
                        Denah Lokasi Sekretariat / Bangunan
                    </th>
                    <td>
                        <a href="{{asset('storage/'.$proposalibadah->denahlokasi)}}" target="_blank" class="btn btn-primary ">Tampilkan</a>
                    </td>
                </tr>
                <tr>
                    <th class="breadcrumb text-dark">
                    Foto Bangunan Sekretariat dan Plang Sekretariat
                    </th>
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
  @if($proposalibadah->status == 'Tidak Sesuai' || $proposalibadah->status == 'Perbaikan')
  @foreach($catatan as $c)
  <tr>
    <th class="bg-light">Catatan Verifikator</th>
    
    <td>
        <b>Permohonan Tidak Sesuai</b><br>
        {{$c->created_at}} <br>
       {{$c->keterangan}}
    </td>
   
  </tr>
  @endforeach
  @elseif($proposalibadah->status == 'Diterima')
    <tr>
        <th class="bg-light">Riwayat Permohonan</th>
        <td>
            Permohonan Anda Diterima
        </td>
    </tr>
  @endif
</table>

<a href="{{route('proposalibadah.index')}}" class="btn btn-info">Kembali</a>

</div>


        </div>
      </div>
  

  </div>
</div>
@endsection