<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>
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
									<img src="<?php echo base_url('assets/img/logosmk.png');?>" alt="">
								</div>
								<div class="breadcomb-ctn text-center">
									<h2>FORM DOWNLOAD KARTU DIGITAL</h2>
									<h2>UJIAN SEKOLAH BERBASIS ONLINE</h2>
									<p>SMKN 1 Bangsri </p>
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
<form method="get" action="<?php echo base_URL('kartu/index') ?>">
<div class="form-element-area">
		<div style="padding: 10px; background: white; width: 95%; margin: 0 auto;">
				<div class="row">
						<div class="col-xs-12">
							<div class="nk-int-mk sl-dp-mn">
								<h2>Pilih Kelas</h2>
							</div>
							<div class="bootstrap-select fm-cmp-mg">
								<select class="selectpicker" name="kelas" required>
									<?php foreach ($kelas as $key => $value): ?>
										<option value="<?php echo $value['kelas'] ?>"><?php echo $value['kelas'] ?></option>
									<?php endforeach ?>
								</select>
							</div>
						</div>
				</div>
				<br/>
				<div class="row">
						<div class="col-xs-12">
							<?php if (!empty($selected_kelas)): ?>
								<div class="nk-int-mk sl-dp-mn">
									<h2>Pilih Nama</h2>
								</div>
								<div class="form-group">
									<select class="selectpicker" name="siswa" required>
										<?php foreach ($siswa as $key => $value): ?>
											<option value="<?php echo $value['IDSiswa'] ?>"><?php echo $value['nama_siswa'] ?></option>
										<?php endforeach ?>
									</select>
								</div>
							<?php endif ?>
						</div>
				</div> 
				<br/>
				<div class="row">
						<div class="col-xs-12">
							<div class="form-group">
							  <button type="Submit" class="btn btn-primary notika-btn-primary">Lanjut</button>
								<a href="<?php echo base_url('kartu') ?>" class="btn btn-warning">Reset</a>
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
					<?php if (!empty($IDSiswa)): ?>
						<?php $this->load->view('kartu/kartu',['data'=>$siswa]) ?>
					<?php endif ?>
				</div>
			</div>
		</div>
	</div>
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