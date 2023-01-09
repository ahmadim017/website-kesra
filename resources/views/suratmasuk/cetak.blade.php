<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Surat Permohonan Penghapusan</title>
</head>
<body>
    <div class="container">
        <table width="100%">
            <tr>
                <td width="90" height="80" align="center"><img src="{{asset('public/img/logokaltim.png')}}" width="80px"></td>
                <td><center><font size="3"><b> PEMERINTAH PROVINSI KALIMANTAN TIMUR</b></font><br>
                    <font size="3"><b> DINAS KEHUTANAN</font></b><br>
                    <font size="3"><b>UPTD. KESATUAN PENGELOLAAN HUTAN PRODUKSI TELAKE</b></font><br>
                    <font size ="2">Jl. Propinsi Km.25 Kelurahan Waru Kecamatan Waru Kabupaten Penajam Paser Utara website: kphptelake.com email: <u>kphptelake@gmail.com</u> Kode Pos 76284</font></center>
                </td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
        </table><br>
        
          <table width="100%" border="1" cellspacing="0" cellpadding="0">
            <tr>
               <td colspan="2" style="height:50px"><font size="3"><center><b>LEMBAR DISPOSISI</b></center></font></td>
            </tr>
            <tr>
            <td colspan="2" style="height:100px">
                  <table border="1" width="100%" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="50%" valign="top">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                  
                                  <tr>
                                    <td style="height:60px">&nbsp; Surat Dari</td>
                                    <td>:</td>
                                    <td>{{$suratmasuk->opd->nama}}</td>
                                </tr>
                                  <tr>
                                    <td style="height:60px">&nbsp; Nomor Surat</td>
                                    <td>:</td>
                                    <td>{{$suratmasuk->nosurat}}</td>
                                </tr>
                                <tr>
                                    <td style="height:60px">&nbsp; Tanggal Surat</td>
                                    <td>:</td>
                                    <td>{{Date::createFromDate($suratmasuk->tglsurat)->format('j F Y')}}</td>
                                </tr>
                          </table>
                  
                          <td width="50%" valign="top">
                              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                
                                  <tr>
                                    <td style="height:60px">&nbsp; Tanggal Terima</td>
                                    <td>:</td>
                                    <td>{{Date::createFromDate($suratmasuk->tglterima)->format('j F Y')}}</td>
                                </tr>
                                  <tr>
                                    <td style="height:60px">&nbsp; No. Agenda</td>
                                    <td>:</td>
                                    <td >{{$suratmasuk->nodisposisi}}</td>
                                </tr>
                                <tr>
                                    <td style="height:60px">&nbsp; Sifat</td>
                                    <td>:</td>
                                </tr>
                              </table>
                           
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                    <td>&nbsp;<input type="checkbox" name="" id="">Sangat Segera</td>
                                    <td>&nbsp;<input type="checkbox" name="" id="">Segera</td>
                                    <td>&nbsp;<input type="checkbox" name="" id="">Rahasia</td>
                                    </tr>
                                </table>
                              
                           
                          </td>
                        </tr>
                </table>
            </td>
            </tr>

            <tr>
               <td colspan="2" style="height:100px">&nbsp; Perihal : {{$suratmasuk->judul}}</td>
            </tr>
            <tr>
            <td colspan="2" style="height:100px">
                  <table border="0" width="100%" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="50%" valign="top">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                      <td><p><font size="2">&nbsp; Diteruskan Kepada Sdr:</p></font></td>
                                  </tr>
                                </table>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td style="height:40px" width="40px">&nbsp;<input type="checkbox"></td>
                                    <td ><font size="2">Ka Sub Bagian Tata Usaha</font></td>
                                </tr>
                                  <tr>
                                    <td style="height:40px">&nbsp;<input type="checkbox"></td>
                                    <td ><font size="2">Kepala Seksi Perencanaan & Pemanfaatan Hutan</font></td>
                                </tr>
                                <tr>
                                    <td style="height:40px">&nbsp;<input type="checkbox"></td>
                                    <td ><font size="2">Kepala Seksi Perlindungan, KSDE dan Pemberdayaan Masyarakat</font></td>
                                </tr>
                                <tr>
                                    <td style="height:40px">&nbsp;<input type="checkbox"></td>
                                    <td >................</td>
                                </tr>
                                <tr>
                                    <td style="height:40px">&nbsp;<input type="checkbox"></td>
                                    <td >................</td>
                                </tr>
                                <tr>
                                    <td style="height:40px">&nbsp;<input type="checkbox"></td>
                                    <td >................</td>
                                </tr>
                          </table>
                  
                          <td valign="top">
                              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                  <td><p><font size="2">Dengan Hormat harap:</font></p>
                                    </td>
                                  </tr>
                              </table>
                              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                        <td style="height:40px"><input type="checkbox"></td>
                                        <td ><font size="2">Untuk diketahui</font></td>
                                    </tr>
                                      <tr>
                                        <td style="height:40px"><input type="checkbox"></td>
                                        <td ><font size="2">Untuk diperhatikan</font></td>
                                    </tr>
                                    <tr>
                                        <td style="height:40px"><input type="checkbox"></td>
                                        <td ><font size="2">Untuk dikabarkan</font></td>
                                    </tr>
                                    <tr>
                                        <td style="height:40px"><input type="checkbox"></td>
                                        <td ><font size="2">Untuk dihadiri</font></td>
                                    </tr>
                                    <tr>
                                        <td style="height:40px"><input type="checkbox"></td>
                                        <td ><font size="2">Untuk diselesaikan</font></td>
                                    </tr>
                                    <tr>
                                        <td style="height:40px"><input type="checkbox"></td>
                                        <td ><font size="2">Tanggal Penyelesaian</font></td>
                                    </tr>
                                    <tr>
                                        <td style="height:40px"></td>
                                        <td>...................</td>
                                    </tr>
                              </table>
                          </td>
                        </tr>
                </table>
            </td>
            </tr>
           <tr>
            <td colspan="2" style="height:150px">
                  <table border="0" width="100%" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="50%" valign="top">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                      <td width="100px"><font size="3">&nbsp; Catatan,</font></td>
                                  </tr>
                                  
                          </table>
                  
                          <td valign="top">
                              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                  <td width="100px"><font size="3">&nbsp; Kepala,</font></td>
                                  </tr>
                                  
                              </table>
                          </td>
                        </tr>
                </table>
            </td>
            </tr>
           </table>
            
          
          
          
          
    </div>
        
</body>
</html>