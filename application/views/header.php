<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
?>    
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="#" style="color: #fff; font-size: 20px;"><img src="<?php echo base_URL(); ?>assets/img/logosmk.png" alt="" /> UJIAN SEKOLAH ESKASABA</a>
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

        <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li <?php $uri = $this->uri->segment('1'); if($uri=='bagianadmin') { echo "class='active'"; } ?>>
                                    <a href="<?php echo base_URL(); ?>bagianadmin"><i class="notika-icon notika-house"></i> Dashboard</a>
                                </li>
                                <li <?php if($uri=='daftarhadir') { echo "class='active'"; } ?>>
                                    <a href="<?php echo base_URL('daftarhadir'); ?>"><i class="fa fa-print"> </i> Daftar Hadir</a>
                                </li>
                                <li <?php if($uri=='belumhadir') { echo 'class="active"'; } else { echo ""; } ?>>
                                <a data-toggle="tab" href="#Belum"><i class="notika-icon notika-form"> </i> Belum Ngisi Daftar Hadir</a>
                                <ul class="collapse dropdown-header-top">
                                      <?php
                            $tgl = date('Y-m-d');
                                    $jam = date("H:i:s");
                                    $ab = $this->db->query("select*from soal where tanggal_uji='$tgl' AND waktu_awal <= '$jam' AND waktu_akhir >= '$jam'")->result();
                                    if (empty($ab)) {
                                        echo "<li style='padding:10px;'>Tidak Mapel Aktif</li>";
                                    } else {
                                        echo "<li><i style='padding-left: 20px;'>Pilih Mapel Aktif :</i></li>";
                                    }
                                    foreach ($ab as $kb) {
                            ?>
                                <li><a href="<?php echo base_URL()."belumhadir/mapel/".$kb->IDSoal; ?>"><?php echo $kb->NamaSoal; ?></a></li>
                            <?php } ?>  
                                </ul>
                                </li>
                            </ul>
                        </nav>
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
                                <li <?php $uri = $this->uri->segment('1'); if($uri=='bagianadmin') { echo "class='active'"; } ?>>
                                    <a href="<?php echo base_URL(); ?>bagianadmin"><i class="notika-icon notika-house"></i> Dashboard</a>
                                </li>
                                <li <?php if($uri=='daftarhadir') { echo "class='active'"; } ?>>
                                    <a href="<?php echo base_URL('daftarhadir'); ?>"><i class="fa fa-print"></i>Daftar Hadir</a>
                                </li>
                                <li <?php if($uri=='jadwalus') { echo "class='active'"; } ?>>
                                    <a href="<?php echo base_URL(); ?>jadwalus"><i class="fa fa-clock-o"></i> Jadwal Ujian</a>
                                </li>
                                <li <?php if($uri=='belumhadir') { echo 'class="active"'; } else { echo ""; } ?>>
                                <a data-toggle="tab" href="#Belum"><i class="notika-icon notika-form"></i>Belum Ngisi Daftar Hadir</a>
                                </li>
                    </ul>
                       <div class="tab-content custom-menu-content">
                        <div id="Belum" class="tab-pane in notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                            <?php
                            $tgl = date('Y-m-d');
                                    $jam = date("H:i:s");
                                    $ab = $this->db->query("select*from soal where tanggal_uji='$tgl' AND waktu_awal <= '$jam' AND waktu_akhir >= '$jam'")->result();
                                    if (empty($ab)) {
                                        echo "<li style='padding:10px;'>Tidak Mapel Aktif</li>";
                                    } else {
                                        echo "<li><i style='padding-left: 20px;'>Pilih Mapel Aktif :</i></li>";
                                    }
                                    foreach ($ab as $kb) {
                            ?>
                                <li><a href="<?php echo base_URL()."belumhadir/mapel/".$kb->IDSoal; ?>"><?php echo $kb->NamaSoal; ?></a></li>
                            <?php } ?>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->