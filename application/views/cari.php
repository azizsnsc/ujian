<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
       <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="#" style="font-size: 18px; color: white;">SMKN 1 BANGSRI</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcomb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>DAFTAR HADIR</h2>
                                        <p>Ujian Sekolah </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                <div class="breadcomb-report">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcomb area End-->
    <form method="post" action="<?php echo base_URL('dashboard/simpan') ?>">
    <div class="form-element-area">
        <?php 
            if (empty($sis)) {
                 echo "Nomer Peserta Yang Anda Masukan Tidak Di Temukan <a href='./' style='background:red; padding10px; color:white;'>Kembali</a>";
            } else {
            foreach ($mape as $mpl) {
            foreach ($sis as $siswa) {
            
        ?>
            <div style="padding: 20px; background: white; width: 95%; margin: 0 auto;">
                    <div class="row">
                            <div class="col-xs-12">
                                <label>
                                    Mapel :
                                </label>
                                <div class="bootstrap-select fm-cmp-mg">
                                <?php echo $mpl->NamaSoal; ?>
                                <input type="hidden" name="IDSoal" value="<?php echo $mpl->IDSoal; ?>">
                                <input type="hidden" name="penting" value="<?php echo $mpl->link_soal; ?>">
                                </div>
                            </div>
                    </div>
                    <div class="row">
                            <div class="col-xs-12">
                                <label>
                                    No. Peserta Anda : 
                                </label>
                                <div class="form-group">
                                   <?php echo $siswa->no_peserta; ?>
                                   <input type="hidden" name="IDSiswa" value="<?php echo $siswa->IDSiswa; ?>">
                                   <input type="hidden" name="kelas" value="<?php echo $siswa->kelas; ?>">
                                </div>
                            </div>
                    </div> 
                    <div class="row">
                            <div class="col-xs-12">
                                <label>
                                    Nama Anda : 
                                </label>
                                <div class="form-group">
                                   <?php echo $siswa->nama_siswa; ?>
                                </div>
                            </div>
                    </div>
                    <div class="row">
                            <div class="col-xs-12">
                                <label>
                                    Kelas : 
                                </label>
                                <div class="form-group">
                                   <?php echo $siswa->kelas; ?>
                                </div>
                            </div>
                    </div>
                    <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                   <input type='checkbox' name='bahasa1' value='' required/> Saya Mengerjakan Ujian Sekolah Dengan Jujur
                                </div>
                            </div>
                    </div>
                    <br/>
                    <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                   <button type="Submit" class="btn btn-primary notika-btn-primary" name="lanjut">Lanjut Mengerjakan Soal</button> | <a href="<?php echo base_url(); ?>" class="btn btn-danger notika-btn-danger">Kembali</a>
                                </div>
                            </div>
                    </div> 
                    <?php } } } ?>    
            </div>
    </div>
    </form>

        <div class="footer-copyright-area" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2018 SMKN 1 Bangsri <br/> 
All rights reserved | Support By RPL</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>