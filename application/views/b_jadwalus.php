<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if (!empty($editsoal)) {
foreach ($editsoal as $kun) {
    $NamaSoal = $kun->NamaSoal;
    $waktu_awal = $kun->waktu_awal;
    $waktu_akhir = $kun->waktu_akhir;
    $tanggal_uji = $kun->tanggal_uji;
    $link_soal = $kun->link_soal;
    $IDSoal = $kun->IDSoal;
} 
} else {
    $IDSoal = "";
    $NamaSoal = "";
    $waktu_awal = "";
    $waktu_akhir = "";
    $tanggal_uji = "";
    $link_soal = "";
}
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
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Jadwal Ujian Sekolah</h2>
                                        <p>Setting waktu jadwal ujian sekolah TP. 2019/2020</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                <div class="breadcomb-report">
                                    <button type="submit" class="btn btn-info"> <i class='fa fa-save'> </i> SAVE DATA</button>
                                </div>
                            </div>
                        <div class="row" style="padding-top:60px; ">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <input type="hidden" name="id" value="<?php echo $IDSoal; ?>">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group float-lb">
                                                <h5>Nama Soal</h5> 
                                                    <div class="nk-int-st">
                                                <input type="text" class="form-control" placeholder="Keterangan" required name="NamaSoal" value="<?php echo $NamaSoal; ?>">
                                        </div>
                                    </div>
                                </div>

                                 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <h5>Tanggal Ujian</h5> 
                                     <div class="form-group float-lb">                                               
                                         <div class="nk-int-st">
                                             <input type="date" class="form-control" required name="tanggal_uji" value="<?php echo $tanggal_uji; ?>">
                                                                    
                                            </div>
                                        </div>
                                </div>
                                 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <h5>Jam Mulai</h5> 
                                     <div class="form-group float-lb">                                               
                                         <div class="nk-int-st">
                                             <input type="time" class="form-control" required name="waktu_awal" value="<?php echo $waktu_awal; ?>">
                                                                    
                                            </div>
                                        </div>
                                </div>
                                 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <h5>Jam Selesai</h5> 
                                     <div class="form-group float-lb">                                               
                                         <div class="nk-int-st">
                                             <input type="time" class="form-control" required name="waktu_akhir" value="<?php echo $waktu_akhir; ?>">
                                            </div>
                                        </div>
                                </div>
                                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <h5>Link Soal</h5> 
                                     <div class="form-group float-lb">                                             
                                         <div class="nk-int-st">
                                             <input type="text" class="form-control" required name="link_soal" value="<?php echo $link_soal; ?>">
                                                                    
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
                            <h2>Data Jadwal Ujian Sekolah</h2>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Soal</th>
                                        <th>Tanggal Uji</th>
                                        <th>Jam Mulai</th>
                                        <th>Jam Akhir</th>
                                        <th>Link Soal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach ($soal as $jamke) { ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $jamke->NamaSoal; ?></td>
                                        <td><?php echo $jamke->tanggal_uji; ?></td>
                                        <td><?php echo $jamke->waktu_awal; ?></td>
                                        <td><?php echo $jamke->waktu_akhir; ?></td>
                                        <td><?php
                                            $potonglink = substr($jamke->link_soal,0,20);
                                         echo $potonglink; ?> .. </td>
                                        <td><a href="<?php echo base_URL()."jadwalus/edit/".$jamke->IDSoal; ?>" class="btn btn-info"> <i class="fa fa-edit"></i> </a> | <a class="btn btn-danger" data-toggle="modal" data-target="#myModalthree<?php echo $jamke->IDSoal; ?>"> <i class="fa fa-trash"></i> </a> </td>
                                    </tr>
                                <?php $no++; } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Soal</th>
                                        <th>Tanggal Uji</th>
                                        <th>Jam Mulai</th>
                                        <th>Jam Akhir</th>
                                        <th>Link Soal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


                                <?php $no=1; foreach ($soal as $jamke) { ?>
                                <div class="modal fade" id="myModalthree<?php echo $jamke->IDSoal; ?>" role="dialog">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <form method="post" action="<?php echo base_URL(); ?>jadwalus/hapus/">
                                                <input type="hidden" name="id" value="<?php echo $jamke->IDSoal; ?>">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <h2>Hapus Data</h2>
                                                <p>Apakah anda yakin inggin menghapus data <b><?php echo $jamke->NamaSoal; ?></b>? </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary btn-flat">Hapus</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>

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