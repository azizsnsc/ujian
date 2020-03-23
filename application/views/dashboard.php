<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ujian Sekolah SMKN 1 Bangsri</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_URL(); ?>assets/img/logosmk.png">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_URL(); ?>assets/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_URL(); ?>assets/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_URL(); ?>assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_URL(); ?>assets/css/owl.theme.css">
    <link rel="stylesheet" href="<?php echo base_URL(); ?>assets/css/owl.transitions.css">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_URL(); ?>assets/css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_URL(); ?>assets/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_URL(); ?>assets/css/normalize.css">
    <link rel="stylesheet" href="<?php echo base_URL(); ?>assets/css/jquery.dataTables.min.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_URL(); ?>assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- jvectormap CSS
		============================================ -->
    <!-- notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_URL(); ?>assets/css/notika-custom-icon.css">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_URL(); ?>assets/css/wave/waves.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_URL(); ?>assets/css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_URL(); ?>assets/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_URL(); ?>assets/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?php echo base_URL(); ?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/toast/jquery.toast.min.css'?>"/>
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap-select/bootstrap-select.css'?>">
</head>
<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    <?php //include "header.php"; ?>
    <!-- End Header Top Area -->


    <!-- Start Status area -->

    <!-- End Status area-->
    <!-- Start Sale Statistic area-->
    <!-- End Sale Statistic area-->
    <!-- Start Email Statistic area-->
    <?php $this->load->view($halaman); ?>

    <!-- End Realtime sts area-->

    <!-- jquery

		============================================ -->
    <script src="<?php echo base_URL(); ?>assets/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="<?php echo base_URL(); ?>assets/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="<?php echo base_URL(); ?>assets/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="<?php echo base_URL(); ?>assets/js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="<?php echo base_URL(); ?>assets/js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?php echo base_URL(); ?>assets/js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?php echo base_URL(); ?>assets/js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="<?php echo base_URL(); ?>assets/js/counterup/jquery.counterup.min.js"></script>
    <script src="<?php echo base_URL(); ?>assets/js/counterup/waypoints.min.js"></script>
    <script src="<?php echo base_URL(); ?>assets/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?php echo base_URL(); ?>assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- jvectormap JS
		============================================ -->
    <!-- sparkline JS
		============================================ -->
    <script src="<?php echo base_URL(); ?>assets/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_URL(); ?>assets/js/sparkline/sparkline-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="<?php echo base_URL(); ?>assets/js/flot/jquery.flot.js"></script>
    <script src="<?php echo base_URL(); ?>assets/js/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo base_URL(); ?>assets/js/flot/curvedLines.js"></script>
    <script src="<?php echo base_URL(); ?>assets/js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="<?php echo base_URL(); ?>assets/js/knob/jquery.knob.js"></script>
    <script src="<?php echo base_URL(); ?>assets/js/knob/jquery.appear.js"></script>
    <script src="<?php echo base_URL(); ?>assets/js/knob/knob-active.js"></script>
    <!--  wave JS
		============================================ -->
    <script src="<?php echo base_URL(); ?>assets/js/wave/waves.min.js"></script>
    <script src="<?php echo base_URL(); ?>assets/js/wave/wave-active.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="<?php echo base_URL(); ?>assets/js/todo/jquery.todo.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="<?php echo base_URL(); ?>assets/js/plugins.js"></script>
	<!--  Chat JS
		============================================ -->
    <script src="<?php echo base_URL(); ?>assets/js/chat/moment.min.js"></script>
    <script src="<?php echo base_URL(); ?>assets/js/chat/jquery.chat.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?php echo base_URL(); ?>assets/js/bootstrap-select/bootstrap-select.js"></script>
    <script src="<?php echo base_URL(); ?>assets/js/main.js"></script>
	<!-- tawk chat JS

		============================================ -->
  <!--  <script src="<?php //echo base_URL(); ?>assets/js/tawk-chat.js"></script>
         Data Table JS
        ============================================ -->

    <script type="text/javascript" src="<?php echo base_url().'assets/toast/jquery.toast.min.js'?>"></script>
    <?php if($this->session->flashdata('msg')=='error'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Error',
                    text: "Data Gagal di Simpan.",
                    showHideTransition: 'slide',
                    icon: 'error',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#FF4859'
                });
        </script>

    <?php elseif($this->session->flashdata('msg')=='success'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "Data Berhasil disimpan ke database.",
                    showHideTransition: 'slide',
                    icon: 'success',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#7EC857'
                });
        </script>
    <?php elseif($this->session->flashdata('msg')=='info'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Info',
                    text: "Data berhasil di update",
                    showHideTransition: 'slide',
                    icon: 'info',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#00C9E6'
                });
        </script>
    <?php elseif($this->session->flashdata('msg')=='password'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Info',
                    text: "Password Berhasil di Reset",
                    showHideTransition: 'slide',
                    icon: 'info',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#00C9E6'
                });
        </script>
    <?php elseif($this->session->flashdata('msg')=='success-hapus'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "Data Berhasil dihapus.",
                    showHideTransition: 'slide',
                    icon: 'success',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#7EC857'
                });
        </script>
    <?php else:?>

    <?php endif;?>
</body>

</html>