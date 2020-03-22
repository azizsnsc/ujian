<?php defined('BASEPATH') OR exit('No direct script access allowed');
foreach ($data as $key => $value) 
{
	if(!empty($value['kelas']))
	{
		$image = base_url('assets/foto/images/2020/'.strtolower(str_replace(' ','_',$value['kelas'])).'/'.str_replace(' ','_',strtolower($value['nama_siswa']).'.jpg'));
		if(empty($image))
		{
			?>
			<script type="text/javascript">
				alert('<?php echo $value['nama_siswa'];?> tidak ada foto');
			</script>
			<?php
		}
		?>
		<?php if (empty($is_cetak)): ?>
			<a href="<?php echo base_url('kartu/cetak_kartu/'.$value['kelas'].'/'.$value['IDSiswa']);?>" target="_blank" class="btn btn-default "><i class="fa fa-print"></i> Simpan</a>
		<?php endif ?>
		<div class="col-md-12" style="margin-bottom: 40px;">
			<div class="col-md-5">
				<table border="1" style="width: 100%; font-size: 12px;">
					<tr style="text-align: center;">
						<td rowspan="5"  ><img src="<?php echo base_url('assets/foto/logo/logojateng.png')?>" alt="" width="70"></td>
						<td colspan="2">PEMERINTAH PROVINSI JAWA TENGAH</td>
					</tr>
					<tr style="text-align: center;">
						<td colspan="2">DINAS PENDIDIKAN DAN KEBUDAYAAN</td>
					</tr>
					<tr style="text-align: center;">
						<td colspan="2">SMK NEGERI 1 BANGSRI</td>
					</tr>
					<tr style="text-align: center; font-size: 11px;">
						<td colspan="2">JL. Kh. Achmad Fauzan No. 17 Krasak-Bangsri (0291) 772321-7772322 JEPARA</td>
					</tr>
					<tr style="text-align: center;">
						<td colspan="2">email : smkn1bangsri@gmail.com</td>
					</tr>
					<tr style="text-align: center;">
						<td colspan="4">KARTU PESERTA UJIAN SEKOLAH BERBASIS ONLINE</td>
					</tr>
				</table>
				<table border="1" style="width: 100%; font-size: 12px;">
					<tr>
						<td colspan="2" style="width: 25%;">Asal Sekolah</td>
						<td>:</td>
						<td>SMK N 1 BANGSRI</td>
					</tr>
					<tr>
						<td colspan="2" style="width: 25%;">Nomor Peserta</td>
						<td>:</td>
						<td><?php echo $value['no_peserta'] ?></td>
					</tr>
					<tr>
						<td colspan="2" style="width: 25%;">Nama</td>
						<td>:</td>
						<td><?php echo $value['nama_siswa'] ?></td>
					</tr>
					<tr>
						<td colspan="2" style="width: 25%;">Kelas</td>
						<td>:</td>
						<td><?php echo $value['kelas'] ?></td>
					</tr>
				</table>
				<table border="1" style="width: 100%; font-size: 12px;">
					<tr>
						<tr>
							<td style="width: 40%;text-align: center;"><img src="<?php echo $image ?>" style="height: 30%;"></td>
							<td>
								<table style="text-align: center;">
									<tr>
										<td>Jepara, 19 Maret 2020</td>
									</tr>
									<tr>
										<td>Kepala SMK N 1 BANGSRI</td>
									</tr>
									<tr>
										<td colspan="2" style="width: 40%;text-align: center;"><img src="<?php echo base_url('assets/foto/logo/ttd.png');?>" alt="" width="150"></td>
									</tr>
									<tr>
										<td>Drs. Aris Hidayanto, M.Si</td>
									</tr>
									<tr>
										<td>NIP. 19620913 198703 1 004</td>
									</tr>
								</table>
							</td>
						</tr>
					</tr>
				</table>
				<br>
			</div>
			<div class="col-md-7">
				<table style="width: 100%; font-size: 12px;">
					<tr>
						<td style="font-weight: bold;text-align: center;"><h4 style="margin: 0px;">SMK NEGERI 1 BANGSRI</h4></td>
					</tr>
					<tr>
						<td style="font-weight: bold;text-align: center;"><h4 style="margin: 0px;">JADWAL US ONLINE 2019/2020</h4></td>
					</tr>
				</table>
				<table border="1" style="width: 100%; text-align: center; font-size: 12px;">
					<tr>
						<td style="background: #03a9f4;">NO</td>
						<td style="background: #03a9f4;">HARI/TANGGAL</td>
						<td style="background: #03a9f4;">PUKUL</td>
						<td style="background: #03a9f4;">MATA PELAJARAN</td>
					</tr>
					<?php 
					$i = 0;
					foreach ($mapel as $mkey => $mvalue) 
					{
						$kelas = str_replace('XII ', '', $value['kelas']);
						$kelas = explode(' ',$kelas);
						$kelas = strtolower($kelas[0]);
						$genap = $i%3;
						?>
						<tr>
							<?php if ($genap==0): ?>
								<td rowspan="3"><?php echo $mvalue['no'] ?></td>
								<td rowspan="3"><?php echo $mvalue['hari'] ?></td>
							<?php else: ?>
							<?php endif ?>
							<td><?php echo $mvalue['pukul'] ?></td>
							<td><?php echo strtoupper($mvalue[$kelas]) ?></td>
						</tr>
						<?php
						$i++;
					}
					?>
				</table>
			</div>
		</div>
		<?php
	}
}
if(!empty($is_cetak)){
	?>
	<script type="text/javascript">
		window.print();
	</script>
	<?php
}