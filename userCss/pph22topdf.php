<?php
session_start();
ini_set('memory_limit', '-1');
ini_set('max_execution_time', 300);
require_once("dompdf/dompdf_config.inc.php");
$html =
'<!DOCTYPE html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/stylessp.css">
<title></title>
</head>
<body>
  <div class="kontainer">
    <div class="baris">
      <div class="kolom" style="height:100px;width:70px;float:left;padding:10px;border-bottom: solid;">
        <img src="images/logo-depkeu-hitam-putih.png" style="height:1.96cm; width:1.98cm;"/>
      </div>
      <div class="kolom" style="height:100px;width:190px;float:left;padding:10px;border-right: solid;border-bottom: solid;">
        <div class="judul">DEPARTEMEN KEUANGAN R.I<br>DIREKTORAT JENDERAL PAJAK<br>KANTOR PELAYANAN PAJAK<br>PONTIANAK</div>
      </div>
      <div class="kolom" style="height:100px;width:200px;float:left;padding:10px;border-right: solid;border-bottom: solid;">
        <div class="judul2">SURAT SETORAN PAJAK</div><br>
        <div class="judul3">(SSP)</div>
      </div>
      <div class="kolom" style="height:100px;width:150px;float:left;padding:10px;border-bottom: solid;">
        <table>
          <tr>
            <td><div class="judul2">LEMBAR</div></td>
            <td style="border-style: solid;"><div class="judul4">1</div></td>
          </tr>
          <tr>
            <td><div class="judul2">Untuk Arsip WP</div></td>
          </tr>
        </table>
      </div>
    </div>
    <div style="clear: both;" />
    <div class="baris">
      <div class="kolom" style="height:15px;width:60px;float:left;padding:10px;">
        <div class="judul2">NPWP :</div>
      </div>
      <div class="kolom" style="height:15px;width:100px;float:left;padding:10px;">
        <table cellpadding="3">
          <tr>
            <td style="border: 1px solid black;">1</td>
            <td style="border: 1px solid black;">4</td>
            <td>.</td>
            <td style="border: 1px solid black;">5</td>
            <td style="border: 1px solid black;">4</td>
            <td style="border: 1px solid black;">4</td>
            <td>.</td>
            <td style="border: 1px solid black;">6</td>
            <td style="border: 1px solid black;">1</td>
            <td style="border: 1px solid black;">7</td>
            <td>.</td>
            <td style="border: 1px solid black;">5</td>
            <td>-</td>
            <td style="border: 1px solid black;">7</td>
            <td style="border: 1px solid black;">0</td>
            <td style="border: 1px solid black;">1</td>
            <td>.</td>
            <td style="border: 1px solid black;">0</td>
            <td style="border: 1px solid black;">0</td>
            <td style="border: 1px solid black;">0</td>
          </tr>
        </table>
      </div>
    </div>
    <div style="clear: both;" />
    <div class="baris">
      <div class="kolom" style="height:10px;width:300px;float:left;padding:10px;">
        <div class="judul5">Diisi sesuai dengan Nomor Pokok Wajib Pajak yang dimiliki</div>
      </div>
    </div>
    <div style="clear: both;" />
    <div class="baris">
      <div class="kolom" style="height:35px;width:90px;float:left;padding-left:10px;padding-bottom:10px;border-bottom: solid;">
        <div class="judul2">NAMA WP:<br>ALAMAT:</div>
      </div>
      <div class="kolom" style="height:35px;width:580px;float:left;padding-left:10px;padding-bottom:10px;border-bottom: solid;">
        '.$_SESSION['pph22_wp'].'<br>'.$_SESSION['pph22_alamat'].'
      </div>
    </div>
    <div style="clear: both;" />
    <div class="baris">
      <div class="kolom" style="height:80px;width:150px;float:left;padding:10px;border-bottom: solid;">
        MAP/Kode Jenis Pajak<br>
        <table cellpadding="3">
          <tr>
            <td style="border: 1px solid black;">4</td>
            <td style="border: 1px solid black;">1</td>
            <td style="border: 1px solid black;">1</td>
            <td style="border: 1px solid black;">1</td>
            <td style="border: 1px solid black;">2</td>
            <td style="border: 1px solid black;">2</td>
          </tr>
        </table>
      </div>
      <div class="kolom" style="height:80px;width:130px;float:left;padding:10px;border-bottom: solid;border-right:solid;">
        Kode Jenis Setoran<br>
        <table cellpadding="3">
          <tr>
            <td style="border: 1px solid black;">9</td>
            <td style="border: 1px solid black;">0</td>
            <td style="border: 1px solid black;">0</td>
          </tr>
        </table>
      </div>
      <div class="kolom" style="height:80px;width:350px;float:left;padding:10px;border-bottom: solid;">
        <div class="judul6">Uraian Pembayaran<br>
        PPh 21: '.$_SESSION['pph22_uraian'].' "'.$_SESSION['pph22_judul'].'"'.'<br>
        an. '.$_SESSION['pph22_peneliti'].' dkk</div>
      </div>
    </div>
    <div style="clear: both;" />
    <div class="baris">
      <div class="kolom" style="height:80px;width:410px;float:left;padding:10px;border-bottom: solid;border-right: solid;">
        Masa Pajak<br>
        <table cellpadding="3">
          <tr>
            <td style="border: 1px solid black;">Jan</td>
            <td style="border: 1px solid black;">Feb</td>
            <td style="border: 1px solid black;">Mar</td>
            <td style="border: 1px solid black;">Apr</td>
            <td style="border: 1px solid black;">Mei</td>
            <td style="border: 1px solid black;">Jun</td>
            <td style="border: 1px solid black;">Jul</td>
            <td style="border: 1px solid black;">Agt</td>
            <td style="border: 1px solid black;">Sept</td>
            <td style="border: 1px solid black;">Okt</td>
            <td style="border: 1px solid black;">Nop</td>
            <td style="border: 1px solid black;">Des</td>
          </tr>
          <tr>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;">x</td>
          </tr>
        </table>
        <div class="judul5">Beri tanda silang pada salah satu kolom untuk masa yang berkenaan</div>
      </div>
      <div class="kolom" style="height:80px;width:240px;float:left;padding:10px;border-bottom: solid;">
        Tahun<br>
        <table cellpadding="3">
          <tr>
            <td style="border: 1px solid black;">2</td>
            <td style="border: 1px solid black;">0</td>
            <td style="border: 1px solid black;">1</td>
            <td style="border: 1px solid black;">4</td>
          </tr>
        </table>
        <div class="judul5">Diisi tahun terutangnya pajak</div>
      </div>
    </div>
    <div style="clear: both;" />
    <div class="baris">
      <div class="kolom" style="height:17px;width:140px;float:left;padding:10px;">
        <div class="judul2">Nomor Ketetapan</div>
      </div>
      <div class="kolom" style="height:17px;width:340px;float:left;padding:10px;">
        <table cellpadding="6">
          <tr>
            <td style="border: 1px solid black;">   </td>
            <td style="border: 1px solid black;">   </td>
            <td style="border: 1px solid black;">   </td>
            <td style="border: 1px solid black;">   </td>
            <td style="border: 1px solid black;">   </td>
            <td>/</td>
            <td style="border: 1px solid black;">   </td>
            <td style="border: 1px solid black;">   </td>
            <td style="border: 1px solid black;">   </td>
            <td>/</td>
            <td style="border: 1px solid black;">   </td>
            <td style="border: 1px solid black;">   </td>
            <td>/</td>
            <td style="border: 1px solid black;">   </td>
            <td style="border: 1px solid black;">   </td>
            <td style="border: 1px solid black;">   </td>
            <td>/</td>
            <td style="border: 1px solid black;">   </td>
            <td style="border: 1px solid black;">   </td>
          </tr>
        </table>
      </div>
    </div>
    <div style="clear: both;" />
    <div class="baris">
      <div class="kolom" style="height:5px;width:680px;float:left;padding:10px;border-bottom: solid;">
        <div class="judul5"> Diisi sesuai Nomor Ketetapan : STP, SKPKB, SKPKBT</div>
      </div>
    </div>
    <div style="clear: both;" />
    <div class="baris">
      <div class="kolom" style="height:65px;width:150px;float:left;padding:10px;border-bottom: solid;border-right: solid;">
        <div class="judul2">Jumlah Pembayaran</div>
        <div class="judul5">Diisi dengan rupiah penuh</div><br>
        Rp '.$_SESSION['pph22_pembayaran'].',00
      </div>
      <div class="kolom" style="height:65px;width:500px;float:left;padding:10px;border-bottom: solid;">
        <div class="judul6">Terbilang: Tiga ratus ribu rupiah</div>
      </div>
    </div>
    <div style="clear: both;" />
    <div class="baris">
      <div class="kolom" style="height:110px;width:310px;float:left;padding:10px;border-bottom: solid;border-right: solid;">
        <b>Diterima oleh Kantor Penerima Pembayaran<br>Tanggal</b><br><div class="judul5">Cap dan tanda tangan</div><br><br><b>Nama Jelas:</b>
      </div>
      <div class="kolom" style="height:110px;width:350px;float:left;padding:10px;border-bottom: solid;">
        <b>Wajib Pajak/Penyetor</b><br>Pontianak, <b>tgl</b> '.$_SESSION['pph22_tanggal'].'<br><br><br><br><b>Nama Jelas:</b> '.$_SESSION['pph22_penyetor'].'
      </div>
    </div>
    <div style="clear: both;" />
    <div class="baris">
      <div class="kolom" style="height:100px;width:650px;float:left;padding:10px;">
        <b>Ruang Validasi Kantor Penerima Pembayaran</b>
      </div>
    </div>
    <div style="clear: both;" />
    Diisi sesuai buku petunjuk pengisian<br><br>F.2.0.32.01
  </div>
  <div class="kontainer">
    <div class="baris">
      <div class="kolom" style="height:100px;width:70px;float:left;padding:10px;border-bottom: solid;">
        <img src="images/logo-depkeu-hitam-putih.png" style="height:1.96cm; width:1.98cm;"/>
      </div>
      <div class="kolom" style="height:100px;width:190px;float:left;padding:10px;border-right: solid;border-bottom: solid;">
        <div class="judul">DEPARTEMEN KEUANGAN R.I<br>DIREKTORAT JENDERAL PAJAK<br>KANTOR PELAYANAN PAJAK<br>PONTIANAK</div>
      </div>
      <div class="kolom" style="height:100px;width:200px;float:left;padding:10px;border-right: solid;border-bottom: solid;">
        <div class="judul2">SURAT SETORAN PAJAK</div><br>
        <div class="judul3">(SSP)</div>
      </div>
      <div class="kolom" style="height:100px;width:150px;float:left;padding:10px;border-bottom: solid;">
        <table>
          <tr>
            <td><div class="judul2">LEMBAR</div></td>
            <td style="border-style: solid;"><div class="judul4">2</div></td>
          </tr>
          <tr>
            <td><div class="judul2">Untuk KPP melalui KPKN</div></td>
          </tr>
        </table>
      </div>
    </div>
    <div style="clear: both;" />
    <div class="baris">
      <div class="kolom" style="height:15px;width:60px;float:left;padding:10px;">
        <div class="judul2">NPWP :</div>
      </div>
      <div class="kolom" style="height:15px;width:100px;float:left;padding:10px;">
        <table cellpadding="3">
          <tr>
            <td style="border: 1px solid black;">1</td>
            <td style="border: 1px solid black;">4</td>
            <td>.</td>
            <td style="border: 1px solid black;">5</td>
            <td style="border: 1px solid black;">4</td>
            <td style="border: 1px solid black;">4</td>
            <td>.</td>
            <td style="border: 1px solid black;">6</td>
            <td style="border: 1px solid black;">1</td>
            <td style="border: 1px solid black;">7</td>
            <td>.</td>
            <td style="border: 1px solid black;">5</td>
            <td>-</td>
            <td style="border: 1px solid black;">7</td>
            <td style="border: 1px solid black;">0</td>
            <td style="border: 1px solid black;">1</td>
            <td>.</td>
            <td style="border: 1px solid black;">0</td>
            <td style="border: 1px solid black;">0</td>
            <td style="border: 1px solid black;">0</td>
          </tr>
        </table>
      </div>
    </div>
    <div style="clear: both;" />
    <div class="baris">
      <div class="kolom" style="height:10px;width:300px;float:left;padding:10px;">
        <div class="judul5">Diisi sesuai dengan Nomor Pokok Wajib Pajak yang dimiliki</div>
      </div>
    </div>
    <div style="clear: both;" />
    <div class="baris">
      <div class="kolom" style="height:35px;width:90px;float:left;padding-left:10px;padding-bottom:10px;border-bottom: solid;">
        <div class="judul2">NAMA WP:<br>ALAMAT:</div>
      </div>
      <div class="kolom" style="height:35px;width:580px;float:left;padding-left:10px;padding-bottom:10px;border-bottom: solid;">
        '.$_SESSION['pph22_wp'].'<br>'.$_SESSION['pph22_alamat'].'
      </div>
    </div>
    <div style="clear: both;" />
    <div class="baris">
      <div class="kolom" style="height:80px;width:150px;float:left;padding:10px;border-bottom: solid;">
        MAP/Kode Jenis Pajak<br>
        <table cellpadding="3">
          <tr>
            <td style="border: 1px solid black;">4</td>
            <td style="border: 1px solid black;">1</td>
            <td style="border: 1px solid black;">1</td>
            <td style="border: 1px solid black;">1</td>
            <td style="border: 1px solid black;">2</td>
            <td style="border: 1px solid black;">2</td>
          </tr>
        </table>
      </div>
      <div class="kolom" style="height:80px;width:130px;float:left;padding:10px;border-bottom: solid;border-right:solid;">
        Kode Jenis Setoran<br>
        <table cellpadding="3">
          <tr>
            <td style="border: 1px solid black;">9</td>
            <td style="border: 1px solid black;">0</td>
            <td style="border: 1px solid black;">0</td>
          </tr>
        </table>
      </div>
      <div class="kolom" style="height:80px;width:350px;float:left;padding:10px;border-bottom: solid;">
        <div class="judul6">Uraian Pembayaran<br>
        PPh 22: '.$_SESSION['pph22_uraian'].' "'.$_SESSION['pph22_judul'].'"'.'<br>
        an. '.$_SESSION['pph22_peneliti'].' dkk</div>
      </div>
    </div>
    <div style="clear: both;" />
    <div class="baris">
      <div class="kolom" style="height:80px;width:410px;float:left;padding:10px;border-bottom: solid;border-right: solid;">
        Masa Pajak<br>
        <table cellpadding="3">
          <tr>
            <td style="border: 1px solid black;">Jan</td>
            <td style="border: 1px solid black;">Feb</td>
            <td style="border: 1px solid black;">Mar</td>
            <td style="border: 1px solid black;">Apr</td>
            <td style="border: 1px solid black;">Mei</td>
            <td style="border: 1px solid black;">Jun</td>
            <td style="border: 1px solid black;">Jul</td>
            <td style="border: 1px solid black;">Agt</td>
            <td style="border: 1px solid black;">Sept</td>
            <td style="border: 1px solid black;">Okt</td>
            <td style="border: 1px solid black;">Nop</td>
            <td style="border: 1px solid black;">Des</td>
          </tr>
          <tr>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;">x</td>
          </tr>
        </table>
        <div class="judul5">Beri tanda silang pada salah satu kolom untuk masa yang berkenaan</div>
      </div>
      <div class="kolom" style="height:80px;width:240px;float:left;padding:10px;border-bottom: solid;">
        Tahun<br>
        <table cellpadding="3">
          <tr>
            <td style="border: 1px solid black;">2</td>
            <td style="border: 1px solid black;">0</td>
            <td style="border: 1px solid black;">1</td>
            <td style="border: 1px solid black;">4</td>
          </tr>
        </table>
        <div class="judul5">Diisi tahun terutangnya pajak</div>
      </div>
    </div>
    <div style="clear: both;" />
    <div class="baris">
      <div class="kolom" style="height:17px;width:140px;float:left;padding:10px;">
        <div class="judul2">Nomor Ketetapan</div>
      </div>
      <div class="kolom" style="height:17px;width:340px;float:left;padding:10px;">
        <table cellpadding="6">
          <tr>
            <td style="border: 1px solid black;">   </td>
            <td style="border: 1px solid black;">   </td>
            <td style="border: 1px solid black;">   </td>
            <td style="border: 1px solid black;">   </td>
            <td style="border: 1px solid black;">   </td>
            <td>/</td>
            <td style="border: 1px solid black;">   </td>
            <td style="border: 1px solid black;">   </td>
            <td style="border: 1px solid black;">   </td>
            <td>/</td>
            <td style="border: 1px solid black;">   </td>
            <td style="border: 1px solid black;">   </td>
            <td>/</td>
            <td style="border: 1px solid black;">   </td>
            <td style="border: 1px solid black;">   </td>
            <td style="border: 1px solid black;">   </td>
            <td>/</td>
            <td style="border: 1px solid black;">   </td>
            <td style="border: 1px solid black;">   </td>
          </tr>
        </table>
      </div>
    </div>
    <div style="clear: both;" />
    <div class="baris">
      <div class="kolom" style="height:5px;width:680px;float:left;padding:10px;border-bottom: solid;">
        <div class="judul5"> Diisi sesuai Nomor Ketetapan : STP, SKPKB, SKPKBT</div>
      </div>
    </div>
    <div style="clear: both;" />
    <div class="baris">
      <div class="kolom" style="height:65px;width:150px;float:left;padding:10px;border-bottom: solid;border-right: solid;">
        <div class="judul2">Jumlah Pembayaran</div>
        <div class="judul5">Diisi dengan rupiah penuh</div><br>
        Rp '.$_SESSION['pph22_pembayaran'].',00
      </div>
      <div class="kolom" style="height:65px;width:500px;float:left;padding:10px;border-bottom: solid;">
        <div class="judul6">Terbilang: Tiga ratus ribu rupiah</div>
      </div>
    </div>
    <div style="clear: both;" />
    <div class="baris">
      <div class="kolom" style="height:110px;width:310px;float:left;padding:10px;border-bottom: solid;border-right: solid;">
        <b>Diterima oleh Kantor Penerima Pembayaran<br>Tanggal</b><br><div class="judul5">Cap dan tanda tangan</div><br><br><b>Nama Jelas:</b>
      </div>
      <div class="kolom" style="height:110px;width:350px;float:left;padding:10px;border-bottom: solid;">
        <b>Wajib Pajak/Penyetor</b><br>Pontianak, <b>tgl</b> '.$_SESSION['pph22_tanggal'].'<br><br><br><br><b>Nama Jelas:</b> '.$_SESSION['pph22_penyetor'].'
      </div>
    </div>
    <div style="clear: both;" />
    <div class="baris">
      <div class="kolom" style="height:100px;width:650px;float:left;padding:10px;">
        <b>Ruang Validasi Kantor Penerima Pembayaran</b>
      </div>
    </div>
    <div style="clear: both;" />
    Diisi sesuai buku petunjuk pengisian<br><br>F.2.0.32.01
  </div>
  <div class="kontainer">
    <div class="baris">
      <div class="kolom" style="height:100px;width:70px;float:left;padding:10px;border-bottom: solid;">
        <img src="images/logo-depkeu-hitam-putih.png" style="height:1.96cm; width:1.98cm;"/>
      </div>
      <div class="kolom" style="height:100px;width:190px;float:left;padding:10px;border-right: solid;border-bottom: solid;">
        <div class="judul">DEPARTEMEN KEUANGAN R.I<br>DIREKTORAT JENDERAL PAJAK<br>KANTOR PELAYANAN PAJAK<br>PONTIANAK</div>
      </div>
      <div class="kolom" style="height:100px;width:200px;float:left;padding:10px;border-right: solid;border-bottom: solid;">
        <div class="judul2">SURAT SETORAN PAJAK</div><br>
        <div class="judul3">(SSP)</div>
      </div>
      <div class="kolom" style="height:100px;width:150px;float:left;padding:10px;border-bottom: solid;">
        <table>
          <tr>
            <td><div class="judul2">LEMBAR</div></td>
            <td style="border-style: solid;"><div class="judul4">3</div></td>
          </tr>
          <tr>
            <td><div class="judul2">Untuk dilaporkan oleh WP ke KPPP</div></td>
          </tr>
        </table>
      </div>
    </div>
    <div style="clear: both;" />
    <div class="baris">
      <div class="kolom" style="height:15px;width:60px;float:left;padding:10px;">
        <div class="judul2">NPWP :</div>
      </div>
      <div class="kolom" style="height:15px;width:100px;float:left;padding:10px;">
        <table cellpadding="3">
          <tr>
            <td style="border: 1px solid black;">1</td>
            <td style="border: 1px solid black;">4</td>
            <td>.</td>
            <td style="border: 1px solid black;">5</td>
            <td style="border: 1px solid black;">4</td>
            <td style="border: 1px solid black;">4</td>
            <td>.</td>
            <td style="border: 1px solid black;">6</td>
            <td style="border: 1px solid black;">1</td>
            <td style="border: 1px solid black;">7</td>
            <td>.</td>
            <td style="border: 1px solid black;">5</td>
            <td>-</td>
            <td style="border: 1px solid black;">7</td>
            <td style="border: 1px solid black;">0</td>
            <td style="border: 1px solid black;">1</td>
            <td>.</td>
            <td style="border: 1px solid black;">0</td>
            <td style="border: 1px solid black;">0</td>
            <td style="border: 1px solid black;">0</td>
          </tr>
        </table>
      </div>
    </div>
    <div style="clear: both;" />
    <div class="baris">
      <div class="kolom" style="height:10px;width:300px;float:left;padding:10px;">
        <div class="judul5">Diisi sesuai dengan Nomor Pokok Wajib Pajak yang dimiliki</div>
      </div>
    </div>
    <div style="clear: both;" />
    <div class="baris">
      <div class="kolom" style="height:35px;width:90px;float:left;padding-left:10px;padding-bottom:10px;border-bottom: solid;">
        <div class="judul2">NAMA WP:<br>ALAMAT:</div>
      </div>
      <div class="kolom" style="height:35px;width:580px;float:left;padding-left:10px;padding-bottom:10px;border-bottom: solid;">
        '.$_SESSION['pph22_wp'].'<br>'.$_SESSION['pph22_alamat'].'
      </div>
    </div>
    <div style="clear: both;" />
    <div class="baris">
      <div class="kolom" style="height:80px;width:150px;float:left;padding:10px;border-bottom: solid;">
        MAP/Kode Jenis Pajak<br>
        <table cellpadding="3">
          <tr>
            <td style="border: 1px solid black;">4</td>
            <td style="border: 1px solid black;">1</td>
            <td style="border: 1px solid black;">1</td>
            <td style="border: 1px solid black;">1</td>
            <td style="border: 1px solid black;">2</td>
            <td style="border: 1px solid black;">2</td>
          </tr>
        </table>
      </div>
      <div class="kolom" style="height:80px;width:130px;float:left;padding:10px;border-bottom: solid;border-right:solid;">
        Kode Jenis Setoran<br>
        <table cellpadding="3">
          <tr>
            <td style="border: 1px solid black;">9</td>
            <td style="border: 1px solid black;">0</td>
            <td style="border: 1px solid black;">0</td>
          </tr>
        </table>
      </div>
      <div class="kolom" style="height:80px;width:350px;float:left;padding:10px;border-bottom: solid;">
        <div class="judul6">Uraian Pembayaran<br>
        PPh 22: '.$_SESSION['pph22_uraian'].' "'.$_SESSION['pph22_judul'].'"'.'<br>
        an. '.$_SESSION['pph22_peneliti'].' dkk</div>
      </div>
    </div>
    <div style="clear: both;" />
    <div class="baris">
      <div class="kolom" style="height:80px;width:410px;float:left;padding:10px;border-bottom: solid;border-right: solid;">
        Masa Pajak<br>
        <table cellpadding="3">
          <tr>
            <td style="border: 1px solid black;">Jan</td>
            <td style="border: 1px solid black;">Feb</td>
            <td style="border: 1px solid black;">Mar</td>
            <td style="border: 1px solid black;">Apr</td>
            <td style="border: 1px solid black;">Mei</td>
            <td style="border: 1px solid black;">Jun</td>
            <td style="border: 1px solid black;">Jul</td>
            <td style="border: 1px solid black;">Agt</td>
            <td style="border: 1px solid black;">Sept</td>
            <td style="border: 1px solid black;">Okt</td>
            <td style="border: 1px solid black;">Nop</td>
            <td style="border: 1px solid black;">Des</td>
          </tr>
          <tr>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;">x</td>
          </tr>
        </table>
        <div class="judul5">Beri tanda silang pada salah satu kolom untuk masa yang berkenaan</div>
      </div>
      <div class="kolom" style="height:80px;width:240px;float:left;padding:10px;border-bottom: solid;">
        Tahun<br>
        <table cellpadding="3">
          <tr>
            <td style="border: 1px solid black;">2</td>
            <td style="border: 1px solid black;">0</td>
            <td style="border: 1px solid black;">1</td>
            <td style="border: 1px solid black;">4</td>
          </tr>
        </table>
        <div class="judul5">Diisi tahun terutangnya pajak</div>
      </div>
    </div>
    <div style="clear: both;" />
    <div class="baris">
      <div class="kolom" style="height:17px;width:140px;float:left;padding:10px;">
        <div class="judul2">Nomor Ketetapan</div>
      </div>
      <div class="kolom" style="height:17px;width:340px;float:left;padding:10px;">
        <table cellpadding="6">
          <tr>
            <td style="border: 1px solid black;">   </td>
            <td style="border: 1px solid black;">   </td>
            <td style="border: 1px solid black;">   </td>
            <td style="border: 1px solid black;">   </td>
            <td style="border: 1px solid black;">   </td>
            <td>/</td>
            <td style="border: 1px solid black;">   </td>
            <td style="border: 1px solid black;">   </td>
            <td style="border: 1px solid black;">   </td>
            <td>/</td>
            <td style="border: 1px solid black;">   </td>
            <td style="border: 1px solid black;">   </td>
            <td>/</td>
            <td style="border: 1px solid black;">   </td>
            <td style="border: 1px solid black;">   </td>
            <td style="border: 1px solid black;">   </td>
            <td>/</td>
            <td style="border: 1px solid black;">   </td>
            <td style="border: 1px solid black;">   </td>
          </tr>
        </table>
      </div>
    </div>
    <div style="clear: both;" />
    <div class="baris">
      <div class="kolom" style="height:5px;width:680px;float:left;padding:10px;border-bottom: solid;">
        <div class="judul5"> Diisi sesuai Nomor Ketetapan : STP, SKPKB, SKPKBT</div>
      </div>
    </div>
    <div style="clear: both;" />
    <div class="baris">
      <div class="kolom" style="height:65px;width:150px;float:left;padding:10px;border-bottom: solid;border-right: solid;">
        <div class="judul2">Jumlah Pembayaran</div>
        <div class="judul5">Diisi dengan rupiah penuh</div><br>
        Rp '.$_SESSION['pph22_pembayaran'].',00
      </div>
      <div class="kolom" style="height:65px;width:500px;float:left;padding:10px;border-bottom: solid;">
        <div class="judul6">Terbilang: Tiga ratus ribu rupiah</div>
      </div>
    </div>
    <div style="clear: both;" />
    <div class="baris">
      <div class="kolom" style="height:110px;width:310px;float:left;padding:10px;border-bottom: solid;border-right: solid;">
        <b>Diterima oleh Kantor Penerima Pembayaran<br>Tanggal</b><br><div class="judul5">Cap dan tanda tangan</div><br><br><b>Nama Jelas:</b>
      </div>
      <div class="kolom" style="height:110px;width:350px;float:left;padding:10px;border-bottom: solid;">
        <b>Wajib Pajak/Penyetor</b><br>Pontianak, <b>tgl</b> '.$_SESSION['pph22_tanggal'].'<br><br><br><br><b>Nama Jelas:</b> '.$_SESSION['pph22_penyetor'].'
      </div>
    </div>
    <div style="clear: both;" />
    <div class="baris">
      <div class="kolom" style="height:100px;width:650px;float:left;padding:10px;">
        <b>Ruang Validasi Kantor Penerima Pembayaran</b>
      </div>
    </div>
    <div style="clear: both;" />
    Diisi sesuai buku petunjuk pengisian<br><br>F.2.0.32.01
  </div>
  <div class="kontainer">
    <div class="baris">
      <div class="kolom" style="height:100px;width:70px;float:left;padding:10px;border-bottom: solid;">
        <img src="images/logo-depkeu-hitam-putih.png" style="height:1.96cm; width:1.98cm;"/>
      </div>
      <div class="kolom" style="height:100px;width:190px;float:left;padding:10px;border-right: solid;border-bottom: solid;">
        <div class="judul">DEPARTEMEN KEUANGAN R.I<br>DIREKTORAT JENDERAL PAJAK<br>KANTOR PELAYANAN PAJAK<br>PONTIANAK</div>
      </div>
      <div class="kolom" style="height:100px;width:200px;float:left;padding:10px;border-right: solid;border-bottom: solid;">
        <div class="judul2">SURAT SETORAN PAJAK</div><br>
        <div class="judul3">(SSP)</div>
      </div>
      <div class="kolom" style="height:100px;width:150px;float:left;padding:10px;border-bottom: solid;">
        <table>
          <tr>
            <td><div class="judul2">LEMBAR</div></td>
            <td style="border-style: solid;"><div class="judul4">4</div></td>
          </tr>
          <tr>
            <td><div class="judul2">Untuk Bank Persepsi/Kantor Pos dan Giro</div></td>
          </tr>
        </table>
      </div>
    </div>
    <div style="clear: both;" />
    <div class="baris">
      <div class="kolom" style="height:15px;width:60px;float:left;padding:10px;">
        <div class="judul2">NPWP :</div>
      </div>
      <div class="kolom" style="height:15px;width:100px;float:left;padding:10px;">
        <table cellpadding="3">
          <tr>
            <td style="border: 1px solid black;">1</td>
            <td style="border: 1px solid black;">4</td>
            <td>.</td>
            <td style="border: 1px solid black;">5</td>
            <td style="border: 1px solid black;">4</td>
            <td style="border: 1px solid black;">4</td>
            <td>.</td>
            <td style="border: 1px solid black;">6</td>
            <td style="border: 1px solid black;">1</td>
            <td style="border: 1px solid black;">7</td>
            <td>.</td>
            <td style="border: 1px solid black;">5</td>
            <td>-</td>
            <td style="border: 1px solid black;">7</td>
            <td style="border: 1px solid black;">0</td>
            <td style="border: 1px solid black;">1</td>
            <td>.</td>
            <td style="border: 1px solid black;">0</td>
            <td style="border: 1px solid black;">0</td>
            <td style="border: 1px solid black;">0</td>
          </tr>
        </table>
      </div>
    </div>
    <div style="clear: both;" />
    <div class="baris">
      <div class="kolom" style="height:10px;width:300px;float:left;padding:10px;">
        <div class="judul5">Diisi sesuai dengan Nomor Pokok Wajib Pajak yang dimiliki</div>
      </div>
    </div>
    <div style="clear: both;" />
    <div class="baris">
      <div class="kolom" style="height:35px;width:90px;float:left;padding-left:10px;padding-bottom:10px;border-bottom: solid;">
        <div class="judul2">NAMA WP:<br>ALAMAT:</div>
      </div>
      <div class="kolom" style="height:35px;width:580px;float:left;padding-left:10px;padding-bottom:10px;border-bottom: solid;">
        '.$_SESSION['pph22_wp'].'<br>'.$_SESSION['pph22_alamat'].'
      </div>
    </div>
    <div style="clear: both;" />
    <div class="baris">
      <div class="kolom" style="height:80px;width:150px;float:left;padding:10px;border-bottom: solid;">
        MAP/Kode Jenis Pajak<br>
        <table cellpadding="3">
          <tr>
            <td style="border: 1px solid black;">4</td>
            <td style="border: 1px solid black;">1</td>
            <td style="border: 1px solid black;">1</td>
            <td style="border: 1px solid black;">1</td>
            <td style="border: 1px solid black;">2</td>
            <td style="border: 1px solid black;">2</td>
          </tr>
        </table>
      </div>
      <div class="kolom" style="height:80px;width:130px;float:left;padding:10px;border-bottom: solid;border-right:solid;">
        Kode Jenis Setoran<br>
        <table cellpadding="3">
          <tr>
            <td style="border: 1px solid black;">9</td>
            <td style="border: 1px solid black;">0</td>
            <td style="border: 1px solid black;">0</td>
          </tr>
        </table>
      </div>
      <div class="kolom" style="height:80px;width:350px;float:left;padding:10px;border-bottom: solid;">
        <div class="judul6">Uraian Pembayaran<br>
        PPh 22: '.$_SESSION['pph22_uraian'].' "'.$_SESSION['pph22_judul'].'"'.'<br>
        an. '.$_SESSION['pph22_peneliti'].' dkk</div>
      </div>
    </div>
    <div style="clear: both;" />
    <div class="baris">
      <div class="kolom" style="height:80px;width:410px;float:left;padding:10px;border-bottom: solid;border-right: solid;">
        Masa Pajak<br>
        <table cellpadding="3">
          <tr>
            <td style="border: 1px solid black;">Jan</td>
            <td style="border: 1px solid black;">Feb</td>
            <td style="border: 1px solid black;">Mar</td>
            <td style="border: 1px solid black;">Apr</td>
            <td style="border: 1px solid black;">Mei</td>
            <td style="border: 1px solid black;">Jun</td>
            <td style="border: 1px solid black;">Jul</td>
            <td style="border: 1px solid black;">Agt</td>
            <td style="border: 1px solid black;">Sept</td>
            <td style="border: 1px solid black;">Okt</td>
            <td style="border: 1px solid black;">Nop</td>
            <td style="border: 1px solid black;">Des</td>
          </tr>
          <tr>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;">x</td>
          </tr>
        </table>
        <div class="judul5">Beri tanda silang pada salah satu kolom untuk masa yang berkenaan</div>
      </div>
      <div class="kolom" style="height:80px;width:240px;float:left;padding:10px;border-bottom: solid;">
        Tahun<br>
        <table cellpadding="3">
          <tr>
            <td style="border: 1px solid black;">2</td>
            <td style="border: 1px solid black;">0</td>
            <td style="border: 1px solid black;">1</td>
            <td style="border: 1px solid black;">4</td>
          </tr>
        </table>
        <div class="judul5">Diisi tahun terutangnya pajak</div>
      </div>
    </div>
    <div style="clear: both;" />
    <div class="baris">
      <div class="kolom" style="height:17px;width:140px;float:left;padding:10px;">
        <div class="judul2">Nomor Ketetapan</div>
      </div>
      <div class="kolom" style="height:17px;width:340px;float:left;padding:10px;">
        <table cellpadding="6">
          <tr>
            <td style="border: 1px solid black;">   </td>
            <td style="border: 1px solid black;">   </td>
            <td style="border: 1px solid black;">   </td>
            <td style="border: 1px solid black;">   </td>
            <td style="border: 1px solid black;">   </td>
            <td>/</td>
            <td style="border: 1px solid black;">   </td>
            <td style="border: 1px solid black;">   </td>
            <td style="border: 1px solid black;">   </td>
            <td>/</td>
            <td style="border: 1px solid black;">   </td>
            <td style="border: 1px solid black;">   </td>
            <td>/</td>
            <td style="border: 1px solid black;">   </td>
            <td style="border: 1px solid black;">   </td>
            <td style="border: 1px solid black;">   </td>
            <td>/</td>
            <td style="border: 1px solid black;">   </td>
            <td style="border: 1px solid black;">   </td>
          </tr>
        </table>
      </div>
    </div>
    <div style="clear: both;" />
    <div class="baris">
      <div class="kolom" style="height:5px;width:680px;float:left;padding:10px;border-bottom: solid;">
        <div class="judul5"> Diisi sesuai Nomor Ketetapan : STP, SKPKB, SKPKBT</div>
      </div>
    </div>
    <div style="clear: both;" />
    <div class="baris">
      <div class="kolom" style="height:65px;width:150px;float:left;padding:10px;border-bottom: solid;border-right: solid;">
        <div class="judul2">Jumlah Pembayaran</div>
        <div class="judul5">Diisi dengan rupiah penuh</div><br>
        Rp '.$_SESSION['pph22_pembayaran'].',00
      </div>
      <div class="kolom" style="height:65px;width:500px;float:left;padding:10px;border-bottom: solid;">
        <div class="judul6">Terbilang: Tiga ratus ribu rupiah</div>
      </div>
    </div>
    <div style="clear: both;" />
    <div class="baris">
      <div class="kolom" style="height:110px;width:310px;float:left;padding:10px;border-bottom: solid;border-right: solid;">
        <b>Diterima oleh Kantor Penerima Pembayaran<br>Tanggal</b><br><div class="judul5">Cap dan tanda tangan</div><br><br><b>Nama Jelas:</b>
      </div>
      <div class="kolom" style="height:110px;width:350px;float:left;padding:10px;border-bottom: solid;">
        <b>Wajib Pajak/Penyetor</b><br>Pontianak, <b>tgl</b> '.$_SESSION['pph22_tanggal'].'<br><br><br><br><b>Nama Jelas:</b> '.$_SESSION['pph22_penyetor'].'
      </div>
    </div>
    <div style="clear: both;" />
    <div class="baris">
      <div class="kolom" style="height:100px;width:650px;float:left;padding:10px;">
        <b>Ruang Validasi Kantor Penerima Pembayaran</b>
      </div>
    </div>
    <div style="clear: both;" />
    Diisi sesuai buku petunjuk pengisian<br><br>F.2.0.32.01
  </div>
  <div class="kontainer">
    <div class="baris">
      <div class="kolom" style="height:100px;width:70px;float:left;padding:10px;border-bottom: solid;">
        <img src="images/logo-depkeu-hitam-putih.png" style="height:1.96cm; width:1.98cm;"/>
      </div>
      <div class="kolom" style="height:100px;width:190px;float:left;padding:10px;border-right: solid;border-bottom: solid;">
        <div class="judul">DEPARTEMEN KEUANGAN R.I<br>DIREKTORAT JENDERAL PAJAK<br>KANTOR PELAYANAN PAJAK<br>PONTIANAK</div>
      </div>
      <div class="kolom" style="height:100px;width:200px;float:left;padding:10px;border-right: solid;border-bottom: solid;">
        <div class="judul2">SURAT SETORAN PAJAK</div><br>
        <div class="judul3">(SSP)</div>
      </div>
      <div class="kolom" style="height:100px;width:150px;float:left;padding:10px;border-bottom: solid;">
        <table>
          <tr>
            <td><div class="judul2">LEMBAR</div></td>
            <td style="border-style: solid;"><div class="judul4">5</div></td>
          </tr>
          <tr>
            <td><div class="judul2">Untuk Arsip Wajib Pungut atau Pihak Lain</div></td>
          </tr>
        </table>
      </div>
    </div>
    <div style="clear: both;" />
    <div class="baris">
      <div class="kolom" style="height:15px;width:60px;float:left;padding:10px;">
        <div class="judul2">NPWP :</div>
      </div>
      <div class="kolom" style="height:15px;width:100px;float:left;padding:10px;">
        <table cellpadding="3">
          <tr>
            <td style="border: 1px solid black;">1</td>
            <td style="border: 1px solid black;">4</td>
            <td>.</td>
            <td style="border: 1px solid black;">5</td>
            <td style="border: 1px solid black;">4</td>
            <td style="border: 1px solid black;">4</td>
            <td>.</td>
            <td style="border: 1px solid black;">6</td>
            <td style="border: 1px solid black;">1</td>
            <td style="border: 1px solid black;">7</td>
            <td>.</td>
            <td style="border: 1px solid black;">5</td>
            <td>-</td>
            <td style="border: 1px solid black;">7</td>
            <td style="border: 1px solid black;">0</td>
            <td style="border: 1px solid black;">1</td>
            <td>.</td>
            <td style="border: 1px solid black;">0</td>
            <td style="border: 1px solid black;">0</td>
            <td style="border: 1px solid black;">0</td>
          </tr>
        </table>
      </div>
    </div>
    <div style="clear: both;" />
    <div class="baris">
      <div class="kolom" style="height:10px;width:300px;float:left;padding:10px;">
        <div class="judul5">Diisi sesuai dengan Nomor Pokok Wajib Pajak yang dimiliki</div>
      </div>
    </div>
    <div style="clear: both;" />
    <div class="baris">
      <div class="kolom" style="height:35px;width:90px;float:left;padding-left:10px;padding-bottom:10px;border-bottom: solid;">
        <div class="judul2">NAMA WP:<br>ALAMAT:</div>
      </div>
      <div class="kolom" style="height:35px;width:580px;float:left;padding-left:10px;padding-bottom:10px;border-bottom: solid;">
        '.$_SESSION['pph22_wp'].'<br>'.$_SESSION['pph22_alamat'].'
      </div>
    </div>
    <div style="clear: both;" />
    <div class="baris">
      <div class="kolom" style="height:80px;width:150px;float:left;padding:10px;border-bottom: solid;">
        MAP/Kode Jenis Pajak<br>
        <table cellpadding="3">
          <tr>
            <td style="border: 1px solid black;">4</td>
            <td style="border: 1px solid black;">1</td>
            <td style="border: 1px solid black;">1</td>
            <td style="border: 1px solid black;">1</td>
            <td style="border: 1px solid black;">2</td>
            <td style="border: 1px solid black;">2</td>
          </tr>
        </table>
      </div>
      <div class="kolom" style="height:80px;width:130px;float:left;padding:10px;border-bottom: solid;border-right:solid;">
        Kode Jenis Setoran<br>
        <table cellpadding="3">
          <tr>
            <td style="border: 1px solid black;">9</td>
            <td style="border: 1px solid black;">0</td>
            <td style="border: 1px solid black;">0</td>
          </tr>
        </table>
      </div>
      <div class="kolom" style="height:80px;width:350px;float:left;padding:10px;border-bottom: solid;">
        <div class="judul6">Uraian Pembayaran<br>
        PPh 22: '.$_SESSION['pph22_uraian'].' "'.$_SESSION['pph22_judul'].'"'.'<br>
        an. '.$_SESSION['pph22_peneliti'].' dkk</div>
      </div>
    </div>
    <div style="clear: both;" />
    <div class="baris">
      <div class="kolom" style="height:80px;width:410px;float:left;padding:10px;border-bottom: solid;border-right: solid;">
        Masa Pajak<br>
        <table cellpadding="3">
          <tr>
            <td style="border: 1px solid black;">Jan</td>
            <td style="border: 1px solid black;">Feb</td>
            <td style="border: 1px solid black;">Mar</td>
            <td style="border: 1px solid black;">Apr</td>
            <td style="border: 1px solid black;">Mei</td>
            <td style="border: 1px solid black;">Jun</td>
            <td style="border: 1px solid black;">Jul</td>
            <td style="border: 1px solid black;">Agt</td>
            <td style="border: 1px solid black;">Sept</td>
            <td style="border: 1px solid black;">Okt</td>
            <td style="border: 1px solid black;">Nop</td>
            <td style="border: 1px solid black;">Des</td>
          </tr>
          <tr>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;"> </td>
            <td style="border: 1px solid black;">x</td>
          </tr>
        </table>
        <div class="judul5">Beri tanda silang pada salah satu kolom untuk masa yang berkenaan</div>
      </div>
      <div class="kolom" style="height:80px;width:240px;float:left;padding:10px;border-bottom: solid;">
        Tahun<br>
        <table cellpadding="3">
          <tr>
            <td style="border: 1px solid black;">2</td>
            <td style="border: 1px solid black;">0</td>
            <td style="border: 1px solid black;">1</td>
            <td style="border: 1px solid black;">4</td>
          </tr>
        </table>
        <div class="judul5">Diisi tahun terutangnya pajak</div>
      </div>
    </div>
    <div style="clear: both;" />
    <div class="baris">
      <div class="kolom" style="height:17px;width:140px;float:left;padding:10px;">
        <div class="judul2">Nomor Ketetapan</div>
      </div>
      <div class="kolom" style="height:17px;width:340px;float:left;padding:10px;">
        <table cellpadding="6">
          <tr>
            <td style="border: 1px solid black;">   </td>
            <td style="border: 1px solid black;">   </td>
            <td style="border: 1px solid black;">   </td>
            <td style="border: 1px solid black;">   </td>
            <td style="border: 1px solid black;">   </td>
            <td>/</td>
            <td style="border: 1px solid black;">   </td>
            <td style="border: 1px solid black;">   </td>
            <td style="border: 1px solid black;">   </td>
            <td>/</td>
            <td style="border: 1px solid black;">   </td>
            <td style="border: 1px solid black;">   </td>
            <td>/</td>
            <td style="border: 1px solid black;">   </td>
            <td style="border: 1px solid black;">   </td>
            <td style="border: 1px solid black;">   </td>
            <td>/</td>
            <td style="border: 1px solid black;">   </td>
            <td style="border: 1px solid black;">   </td>
          </tr>
        </table>
      </div>
    </div>
    <div style="clear: both;" />
    <div class="baris">
      <div class="kolom" style="height:5px;width:680px;float:left;padding:10px;border-bottom: solid;">
        <div class="judul5"> Diisi sesuai Nomor Ketetapan : STP, SKPKB, SKPKBT</div>
      </div>
    </div>
    <div style="clear: both;" />
    <div class="baris">
      <div class="kolom" style="height:65px;width:150px;float:left;padding:10px;border-bottom: solid;border-right: solid;">
        <div class="judul2">Jumlah Pembayaran</div>
        <div class="judul5">Diisi dengan rupiah penuh</div><br>
        Rp '.$_SESSION['pph22_pembayaran'].',00
      </div>
      <div class="kolom" style="height:65px;width:500px;float:left;padding:10px;border-bottom: solid;">
        <div class="judul6">Terbilang: Tiga ratus ribu rupiah</div>
      </div>
    </div>
    <div style="clear: both;" />
    <div class="baris">
      <div class="kolom" style="height:110px;width:310px;float:left;padding:10px;border-bottom: solid;border-right: solid;">
        <b>Diterima oleh Kantor Penerima Pembayaran<br>Tanggal</b><br><div class="judul5">Cap dan tanda tangan</div><br><br><b>Nama Jelas:</b>
      </div>
      <div class="kolom" style="height:110px;width:350px;float:left;padding:10px;border-bottom: solid;">
        <b>Wajib Pajak/Penyetor</b><br>Pontianak, <b>tgl</b> '.$_SESSION['pph22_tanggal'].'<br><br><br><br><b>Nama Jelas:</b> '.$_SESSION['pph22_penyetor'].'
      </div>
    </div>
    <div style="clear: both;" />
    <div class="baris">
      <div class="kolom" style="height:100px;width:650px;float:left;padding:10px;">
        <b>Ruang Validasi Kantor Penerima Pembayaran</b>
      </div>
    </div>
    <div style="clear: both;" />
    Diisi sesuai buku petunjuk pengisian<br><br>F.2.0.32.01
  </div>
</body>
</html>';
$dompdf = new DOMPDF();
$dompdf->set_paper("A4","portrait");
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream('pph22_'.$_SESSION['pph22_masa'].'_'.$_SESSION['pph22_tahun'].'.pdf');
?>