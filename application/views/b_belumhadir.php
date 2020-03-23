<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><form method="post" action="<?php echo base_URL('jadwalus/simpan/'); ?>">
    <div class="breadcomb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-form"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Belum Hadir | Mapel : <?php foreach ($soal as $ks) { echo $ks->NamaSoal; ?></h2>
                                        <p>Belum hadir mengerjakan ujian sekolah TP. 2019/2020</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                <div class="breadcomb-report">
                                    <h3>  <?php 
                                        echo "<span style='color:green;'> ".$dabsen." </span> | ";
                                        $dsis = $this->db->get('siswa')->num_rows();
                                        $dtab = $dsis - $dabsen;
                                        echo "<span style='color:red;'> ".$dtab." </span> ";

                                        ?></h3>
                                        <p>Hijau (Sudah Absen) Merah (Belum Absen)</p>
                                </div>
                            </div>
                        </div>                       
                    </div>
                </div>
            </div>
        </div>
    </div>
 </form>

    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Daftar siswa yang belum hadir mengerjakan soal</h2>
                            <p></p>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No Peserta</th>
                                        <th>Nama Siswa</th>
                                        <th>Kelas</th>
                                        <th>Jam Hadir Mengerjakan</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $no=1;
                                   $ad = $this->db->query('select*from siswa where NOT EXISTS(SELECT * FROM absensi WHERE absensi.IDSoal="'.$ks->IDSoal.'" AND siswa.IDSiswa = absensi.IDSiswa)');
                                   $add = $ad->num_rows();
                                   $adj = $ad->result();
                                   foreach ($adj as $da) {
                                   ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $da->no_peserta; ?></td>
                                        <td><?php echo $da->nama_siswa; ?></td>
                                        <td><?php echo $da->kelas; ?></td>
                                        <td><i style="color:red">Belum Mengerjakan</i></td>
                                        <td align="center"><i style="color:red">X</i></td>
                                    </tr>
                                   <?php
                                   $no++;
                                   }
                                   }
                                   $noo = $add+1; 
                                   foreach ($absen as $abs) { ?>
                                    <tr>
                                        <td><?php echo $noo; ?></td>
                                        <td><?php echo $abs->no_peserta; ?></td>
                                        <td><?php echo $abs->nama_siswa; ?></td>
                                        <td><?php echo $abs->kelas; ?></td>
                                        <td><?php echo $abs->JamMengerjakan; ?></td>
                                        <td align="center"><i class="fa fa-pencil" style="color: blue;"></i></td>
                                    </tr>
                                <?php  
                                $noo++; }
                                ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>No Peserta</th>
                                        <th>Nama Siswa</th>
                                        <th>Kelas</th>
                                        <th>Jam Hadir Mengerjakan</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-copyright-area" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2018 SMKN 1 Bangsri
All rights reserved | Support By RPL</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>