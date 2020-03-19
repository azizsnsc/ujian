<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="breadcomb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Daftar Hadir</h2>
                                        <p>Daftar Hadir</p>
                                    </div>
                                </div>
                            </div>

                        <div class="row" style="padding-top:70px;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Daftar Hadir Peserta Ujian</h2>
                            <p>Mapel / Soal : 
                                <?php
                                    
                                    foreach ($df as $k) {
                                        echo $k->NamaSoal;
                                    }
                                    
                                ?>
                            </p>
                        </div>
                       <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kelas</th>
                                        <th>No. Peserta</th>
                                        <th>Nama Lengkap</th>
                                        <th>Jam Mengerjakan</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no=1;
                                    $noo = $jum+1;
                                    if (empty($jum)) {
                                        redirect('daftarhadir');
                                    }
                                    foreach ($keli as $ke) {
                                    echo "<tr><td>$no</td><td>$ke->no_peserta</td><td>$ke->kelas</td><td>$ke->nama_siswa</td><td>".$ke->JamMengerjakan."</td><td>Ok</td></tr>";
                                    $no++;
                                }
                                    $ad = $this->db->query('select*from siswa where siswa.kelas="'.$ke->kelas.'" AND NOT EXISTS(SELECT * FROM absensi WHERE absensi.IDSoal="'.$k->IDSoal.'" AND siswa.IDSiswa = absensi.IDSiswa)')->result();
                                        foreach ($ad as $kdd) {
                                        echo "<tr><td>$noo</td><td>$kdd->no_peserta</td><td>$kdd->kelas</td><td>$kdd->nama_siswa</td><td></td><td>Belum Mengerjakan</td></tr>";
                                         $noo++; 
                                         
                                }
                                ?>
                                    
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Start Footer area-->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © <?php echo date('Y'); ?>
                       SMK NEGERI 1 BANGSRI </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer area-->