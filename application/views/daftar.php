<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include "fungsitanggal.php";
?>

<form method="post" action="<?php echo base_URL('daftarhadir'); ?>">
    <div class="breadcomb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="fa fa-print"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Cetak Daftar Hadir</h2>
                                        <p>Cetak daftar hadir ujian sekolah TP. 2019/2020</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                            </div>
                        <div class="row" style="padding-top:80px; ">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <h5>Pilih Kelas</h5> 
                                     <div class="form-group float-lb">                                              
                                <div class="bootstrap-select fm-cmp-mg" >
                                    <select class="selectpicker" data-live-search="true" name="kelas">
                                        <?php
                                        echo $skelas;
                                        foreach ($kel as $kelas) {
                                            echo "<option value='$kelas->kelas'> $kelas->kelas </option>";
                                        }
                                        ?>
                                        </select>
                                </div>
                                        </div>
                                </div>
                                 <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <h5>Pilih Mapel</h5> 
                                     <div class="form-group float-lb">                                               
                                <div class="bootstrap-select fm-cmp-mg" >
                                    <select class="selectpicker" data-live-search="true" name="IDSoal">
                                        <?php
                                        foreach ($ssoal as $kso) {
                                            echo "<option value='$kso->IDSoal' $selt> $kso->NamaSoal </option>";
                                        }
                                            foreach ($soal as $so) {
                                            echo "<option value='$so->IDSoal' $selt> $so->NamaSoal </option>";
                                        }
                                        ?>   
                                        </select>

                                </div>
                                        </div>
                                </div>
                                 <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                     <div class="form-group float-lb">  
                                         <div class="nk-int-st">
                                         <input type="hidden" name="datanya" value="1">
                                         <button type="submit" class="btn btn-info" name="cari">Cari</button>
                                            </div>
                                        </div>
                                </div>

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
                            <h2>Cetak Daftar Hadir</h2>
                        </div>
                        <div class="table-responsive">
                        <div class="row">
                           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
<?php
    if(!empty($ssoal)) {                    
   foreach ($ssoal as $k) {     
?>
                            <table style="width: 98%; margin: 0 auto; font-size: 15px;"><tr><td width="150px;">Mapel</td><td width="1%">:</td><td><?php echo $k->NamaSoal; ?></td></tr>
    <tr><td>Kelas</td><td>:</td><td><?php echo $kela; ?></td></tr>
    <tr><td>Jadwal Mengerjakan</td><td>:</td><td><?php echo tgl_indo($k->tanggal_uji)." | ".$k->waktu_awal." s/d ".$k->waktu_akhir; ?></td></tr>
</table>
<?php } } ?> 
                    </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <form method="post" action="<?php echo base_URL('daftarhadir/cetak'); ?>" target="_blank">
                        <?php
                        if(!empty($ssoal)) {                    
                        foreach ($ssoal as $k) { 
                        echo "<input type='hidden' value='".$idsoal."' name='IDSoal'>";
                        echo "<input type='hidden' value='".$kela."' name='kelas'>";
                        echo "<button type='Submit' class='btn btn-primary' style='float:right;'><i class='fa fa-print'> Cetak Daftar Hadir </i></button>";
                        }
                        }
                        ?>
                        </form>

                     </div>
                        </div>
                         <hr>
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No Peserta</th>
                                        <th>Nama Siswa</th>
                                        <th>Jam Mengerjakan</th>
                                        <th>TTD Digital</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    if (!empty($absen)) {
                                    $no=1;
                                    foreach ($absen as $abs) { ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $abs->no_peserta; ?></td>
                                        <td><?php echo $abs->nama_siswa; ?></td>
                                        <td><?php echo $abs->JamMengerjakan; ?></td>
                                        <td>ttd</td>
                                    </tr>
                                <?php $no++; } }  ?>
                                <?php  
                                if (!empty($belum)) {
                                $noo=$jb + 1;
                                foreach ($belum as $bel) { ?>
                                    <tr>
                                        <td><?php echo $noo; ?></td>
                                        <td><?php echo $bel->no_peserta; ?></td>
                                        <td><?php echo $bel->nama_siswa; ?></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                <?php $noo++; } }?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>No Peserta</th>
                                        <th>Nama Siswa</th>
                                        <th>Jam Mengerjakan</th>
                                        <th>TTD Digital</th>
                                    </tr>
                                </tfoot>
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