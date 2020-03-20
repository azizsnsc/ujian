<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cetak Daftar Hadir</title>
</head>
<style type="text/css">
	body {
		font-family: arial;
	}
	.tabel {
		width: 98%; margin: 0 auto;
		 font-size: 14px;
		padding: 1px;
		color: #666;
  		text-shadow: 1px 1px 0px #fff;
  		background: #eaebec;
 		border: #ccc 1px solid;
	}
.tabel th {
  padding: 8px;
  border:1px solid #e0e0e0;
  background: #ededed;
}
 
.tabel tr {
  text-align: center;
}
 
.tabel td {
  padding: 5px;
  border-top: 1px solid #ffffff;
  border-bottom: 1px solid #e0e0e0;
  border-left: 1px solid #e0e0e0;
  background: #fafafa;
}
 
.tabel tr:last-child td {
  border-bottom: 0;
}
 
</style>
<body onload="window.print()">
<table width="100%">
	<td align="center" width="20%"><img src="<?php echo base_url('assets/img/smk.jpg'); ?>" width=85px;></td><td align="center" width="60%"><span style="font-size: 16px;">DAFTAR HADIR UJIAN SEKOLAH BERBASIS ON-LINE</span><br/><span style="font-size: 26px; font-weight: bold;">SMK NEGERI 1 BANGSRI</span><br><span style="font-size: 12px; font-style: italic;">Jalan K.H. Achmad Fauzan No. 17 Krasak Bangsri Jepara</span></td><td width="20%"></td>
</table>
<hr style="width: 98%;">
<?php                     
   foreach ($df as $k) {     
?>
<table style="width: 98%; margin: 0 auto; font-size: 15px;"><tr><td width="150px;">Mapel</td><td width="1%">:</td><td><?php echo $k->NamaSoal; ?></td></tr>
	<tr><td>Kelas</td><td>:</td><td><?php echo $kelasnya; ?></td></tr>
	<tr><td>Jadwal Mengerjakan</td><td>:</td><td><?php echo $k->tanggal_uji." ".$k->waktu_awal." s/d ".$k->waktu_akhir; ?></td></tr>
</table>
<?php } ?>
<br>
<table class="tabel">
	<thead>
	<tr><th>NO</th><th>No. Peserta</th><th>Nama</th><th>Mulai Mengerjakan</th><th>Ttd</th></tr>
	</thead>
	                                <tbody>
                                    <?php
                                    $no=1;
                                    $noo = $jum+1;
                                    if (empty($jum)) {
                                        redirect('daftarhadir');
                                    }
                                    foreach ($keli as $ke) {
                                    echo "<tr><td>$no</td><td>$ke->no_peserta</td><td align='left'>$ke->nama_siswa</td><td>".$ke->JamMengerjakan."</td><td>Ok</td></tr>";
                                    $no++;
                                }
                                    $ad = $this->db->query('select*from siswa where siswa.kelas="'.$ke->kelas.'" AND NOT EXISTS(SELECT * FROM absensi WHERE absensi.IDSoal="'.$k->IDSoal.'" AND siswa.IDSiswa = absensi.IDSiswa)')->result();
                                        foreach ($ad as $kdd) {
                                        echo "<tr><td>$noo</td><td>$kdd->no_peserta</td><td align='left'>$kdd->nama_siswa</td><td></td><td> </td></tr>";
                                         $noo++; 
                                         
                                }
                                ?>
                                    
                                </tbody>
</table>
</body>
</html>