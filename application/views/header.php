<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>    
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="#" style="color: #fff; font-size: 20px;"><img src="<?php echo base_URL(); ?>assets/img/logosmk.png" alt="" /> E-PRESENSI ESKASABA</a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">
                            <li class="nav-item"><a href='#' style="font-size: 16px;"><i class="notika-icon notika-user"></i> Admin </a></li>
                            <li class="nav-item">
                                <a href="#"><span><i class="fa fa-sign-out"></i></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Menu end -->

        <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                                <li <?php $uri = $this->uri->segment('1'); if($uri=='dashboard') { echo "class='active'"; } ?>>
                                    <a href="<?php echo base_URL(); ?>bagianadmin"><i class="notika-icon notika-house"></i> Dashboard</a>
                                </li>
                                <li <?php if($uri=='finger') { echo "class='active'"; } ?>>
                                    <a href="<?php echo base_URL('daftarhadir'); ?>"><i class="notika-icon notika-house"></i>Daftar Hadir</a>
                                </li>
                                <li <?php if($uri=='jamsekolah') { echo "class='active'"; } ?>>
                                    <a href="<?php echo base_URL(); ?>jamsekolah"><i class="fa fa-clock-o"></i> Jadwal Ujian</a>
                                </li>
                                <li <?php if($uri=='belumhadir') { echo "class='active'"; } ?>>
                                    <a href="<?php echo base_URL('belumhadir'); ?>jamsekolah"><i class="fa fa-clock-o"></i> Yang Belum Ngisi Daftar Hadir</a>
                                </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->