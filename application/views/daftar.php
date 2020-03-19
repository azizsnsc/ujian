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
                         <form method="post" action="<?php echo base_URL('daftarhadir/jik'); ?>">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <div class="basic-tb-hd">
                                    <h5>Pilih Kelas</h5>
                                </div>
                                <div class="bootstrap-select fm-cmp-mg" >
                                    <select class="selectpicker" data-live-search="true" name="kelas">
                                        <?php
                                        foreach ($kel as $kelas) {
                                            echo "<option value='$kelas->kelas'> $kelas->kelas </option>";
                                        }
                                        ?>
                                        </select>
                                </div>
                           </div>
                           <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <div class="basic-tb-hd">
                                    <h5>Pilih Soal</h5>
                                </div>
                                <div class="bootstrap-select fm-cmp-mg" >
                                    <select class="selectpicker" data-live-search="true" name="Soal">
                                        <?php
                                            foreach ($soal as $so) {
                                            echo "<option value='$so->IDSoal' $selt> $so->NamaSoal </option>";
                                        }
                                        ?>   
                                        </select>

                                </div>

                           </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <div class="basic-tb-hd">
                                    <h5><br/></h5>
                                </div>
                                <input type="hidden" name="datanya" value="1">
                                <button type="submit" class="btn btn-info" name="cari">Cari</button>
                           </div>
                       </div>
                        </form><br/>
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
                                
                            </p>
                        </div>
                       <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No. Peserta</th>
                                        <th>Nama Lengkap</th>
                                        <th>Jam Mengerjakan</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
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