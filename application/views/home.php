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
                                        <h2>UJIAN SEKOLAH</h2>
                                        <p>SMKN 1 BANGSRI </p>
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


<center style="color: green;"> Jam : <span id="jam" style="text-align: center;"></span> Wib</center>

<!-- JAM -->


<!-- WAKTU MUNDUR MULAI -->

<?php
$tgl = date("Y-m-d");
$tma = date("H:i:s");
$abba = $this->db->query("select*from soal where tanggal_uji='$tgl' order by waktu_awal ASC Limit 1")->result();
if (!empty($abba)) {
    foreach ($abba as $abc) {
      if ($tma >= $abc->waktu_akhir) {

$xabba = $this->db->query("select*from soal where tanggal_uji='$tgl' order by waktu_awal DESC Limit 1")->result();
if (!empty($xabba)) {
    foreach ($xabba as $xabc) {
if ($tma < $xabc->waktu_awal) { ?>    
<script>
// Mengatur waktu akhir perhitungan mundur
var countDownDate = new Date(" <?php echo $xabc->tanggal_uji.' '.$xabc->waktu_awal; ?>").getTime();

// Memperbarui hitungan mundur setiap 1 detik
var x = setInterval(function() {

  // Untuk mendapatkan tanggal dan waktu hari ini
  var now = new Date().getTime();
    
  // Temukan jarak antara sekarang dan tanggal hitung mundur
  var distance = countDownDate - now;
    
  // Perhitungan waktu untuk hari, jam, menit dan detik
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Keluarkan hasil dalam elemen dengan id = "demo"
  document.getElementById("demo").innerHTML = "Waktu Ujian Segera di Mulai : <br/>" + hours + " Jam "
  + minutes + " Menit " + seconds + " Detik";
    
  // Jika hitungan mundur selesai, tulis beberapa teks 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "<meta http-equiv='refresh' content='0' />";
  }
}, 1000);
</script>
<center style='font-size: 14px;'><p id="demo"></p></center>
       <?php } elseif ($tma >= $xabc->waktu_awal && $tma < $xabc->waktu_akhir) { ?>

<script>
// Mengatur waktu akhir perhitungan mundur
var countDownDate = new Date(" <?php echo $xabc->tanggal_uji.' '.$xabc->waktu_akhir; ?>").getTime();

// Memperbarui hitungan mundur setiap 1 detik
var x = setInterval(function() {

  // Untuk mendapatkan tanggal dan waktu hari ini
  var now = new Date().getTime();
    
  // Temukan jarak antara sekarang dan tanggal hitung mundur
  var distance = countDownDate - now;
    
  // Perhitungan waktu untuk hari, jam, menit dan detik
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Keluarkan hasil dalam elemen dengan id = "demo"
  document.getElementById("demo").innerHTML = "<span style='color:red;'>Waktu Ujian Akan Segera Selesai : <br/>" + hours + " Jam "
  + minutes + " Menit " + seconds + " Detik</span>";
    
  // Jika hitungan mundur selesai, tulis beberapa teks 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "<meta http-equiv='refresh' content='0' />";
  }
}, 1000);
</script>
<center style='font-size: 14px;'><p id="demo"></p></center>
 <?php } } } 




      } else {
      if ($tma < $abc->waktu_awal) { ?>
        
<script>
// Mengatur waktu akhir perhitungan mundur
var countDownDate = new Date(" <?php echo $abc->tanggal_uji.' '.$abc->waktu_awal; ?>").getTime();

// Memperbarui hitungan mundur setiap 1 detik
var x = setInterval(function() {

  // Untuk mendapatkan tanggal dan waktu hari ini
  var now = new Date().getTime();
    
  // Temukan jarak antara sekarang dan tanggal hitung mundur
  var distance = countDownDate - now;
    
  // Perhitungan waktu untuk hari, jam, menit dan detik
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Keluarkan hasil dalam elemen dengan id = "demo"
  document.getElementById("demo").innerHTML = "Waktu Ujian Segera di Mulai : <br/>" + hours + " Jam "
  + minutes + " Menit " + seconds + " Detik";
    
  // Jika hitungan mundur selesai, tulis beberapa teks 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "<meta http-equiv='refresh' content='0' />";
  }
}, 1000);
</script>
<center style='font-size: 14px;'><p id="demo"></p></center>
       <?php } elseif ($tma >= $abc->waktu_awal && $tma < $abc->waktu_akhir) { ?>

<script>
// Mengatur waktu akhir perhitungan mundur
var countDownDate = new Date(" <?php echo $abc->tanggal_uji.' '.$abc->waktu_akhir; ?>").getTime();

// Memperbarui hitungan mundur setiap 1 detik
var x = setInterval(function() {

  // Untuk mendapatkan tanggal dan waktu hari ini
  var now = new Date().getTime();
    
  // Temukan jarak antara sekarang dan tanggal hitung mundur
  var distance = countDownDate - now;
    
  // Perhitungan waktu untuk hari, jam, menit dan detik
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Keluarkan hasil dalam elemen dengan id = "demo"
  document.getElementById("demo").innerHTML = "<span style='color:red;'>Waktu Ujian Akan Segera Selesai : <br/>" + hours + " Jam "
  + minutes + " Menit " + seconds + " Detik</span>";
    
  // Jika hitungan mundur selesai, tulis beberapa teks 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "<meta http-equiv='refresh' content='0' />";
  }
}, 1000);
</script>
<center style='font-size: 14px;'><p id="demo"></p></center>
 <?php } ?>     
      
    <!-- Breadcomb area End-->
    
<?php } } }?>



<!-- WAKTU MUNDUR area End -->


    <form method="post" action="<?php echo base_URL('dashboard/cari') ?>">
    <div class="form-element-area">
            <div style="padding: 10px; background: white; width: 95%; margin: 0 auto;">
                    <div class="row">
                            <div class="col-xs-12">
                                <div class="nk-int-mk sl-dp-mn">
                                    
                                    <br><br>
                                    <h2>Pilih Mapel Yang Aktif</h2>
                                </div>
                                <div class="bootstrap-select fm-cmp-mg" style="width: 100%">
                                    <select class="selectpicker" name="mapel" required>
                            <?php 
                            $tgl = date("Y-m-d");
                            $tma = date("H:i:s");
                            $a = $this->db->query("select*from soal where tanggal_uji='$tgl'")->result(); 
                            foreach ($a as $df) {
                            if($tma >= $df->waktu_awal && $tma < $df->waktu_akhir) {
                                echo "<option value='".$df->IDSoal."'>".$df->NamaSoal."</option>";
                             }
                            } 
                            ?>
                                        </select>
                                </div>
                            </div>
                    </div>
                        <br/>
                    <div class="row">
                            <div class="col-xs-12">
                                <div class="nk-int-mk sl-dp-mn">
                                    <h2>No. Peserta Anda</h2>
                                </div>
                                <div class="form-group">
                                   <input type="text" name="noper" class="form-control" value="4-20-03-23-008-">
                                </div>
                            </div>
                    </div> 
                    <br/>
                    <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                   <button type="Submit" class="btn btn-primary notika-btn-primary" name="lanjut">Lanjut</button> | <a href="<?php echo base_URL(); ?>" class='btn btn-warning notika-btn-warning waves-effect'>Refresh</a>
                                </div>
                            </div>
                    </div>     
            </div>
    </div>
    </form>
    <br>
    <div class="form-element-area">
        <div style="padding: 10px; background: white; width: 95%; margin: 0 auto;">
            <div class="row">
                    <div class="col-xs-12">
                        <a href="<?php echo base_url('kartu') ?>" class="btn btn-success"><i class="fa fa-search"></i> Cari Kartu</a>
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