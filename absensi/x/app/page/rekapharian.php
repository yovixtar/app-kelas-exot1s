<?php
function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
	
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun
 
	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
};
?>
<div style="margin-left: 10px;margin-top: 10px;">
<table>
	<tr>
		<td>Tanggal</td>
		<td>: <?php echo tgl_indo($_GET['tanggal']) ?></td>
	</tr>
	<tr><td><div style="margin:10px;"></div></td></tr>
	<tr>
		<td>Jumlah</td>
	</tr>
	<tr>
		<td>Izin</td>
		<td>: 
		<?php
		$jumlahizin=mysqli_query($l,"SELECT COUNT(id_siswa_absensi) AS jumlahizin FROM absensi WHERE tanggal_absensi='".$_GET['tanggal']."' AND status_absensi=2");
		$data_izin=mysqli_fetch_array($jumlahizin);
		echo $data_izin['jumlahizin'];
		?>
		</td>
	</tr>
	<tr>
		<td>Sakit</td>
		<td>: 
		<?php
		$jumlahsakit=mysqli_query($l,"SELECT COUNT(id_siswa_absensi) AS jumlahsakit FROM absensi WHERE tanggal_absensi='".$_GET['tanggal']."' AND status_absensi=3");
		$data_sakit=mysqli_fetch_array($jumlahsakit);
		echo $data_sakit['jumlahsakit'];
		?>
		</td>
	</tr>
	<tr>
		<td>Alfa</td>
		<td>: 
		<?php
		$jumlahalfa=mysqli_query($l,"SELECT COUNT(id_siswa_absensi) AS jumlahalfa FROM absensi WHERE tanggal_absensi='".$_GET['tanggal']."' AND status_absensi=4");
		$data_alfa=mysqli_fetch_array($jumlahalfa);
		echo $data_alfa['jumlahalfa'];
		?>
		</td>
	</tr>
</table>
</div><br />
<div class="w3-responsive">
	<table class="w3-table-all">
	<?php
	$stat_absen = mysqli_query($l,"SELECT * FROM absensi join siswa ON absensi.id_siswa_absensi = siswa.id_siswa JOIN status_absensi ON absensi.status_absensi=status_absensi.id_status_absensi WHERE tanggal_absensi='".$_GET['tanggal']."' ORDER BY id_siswa ASC");	
	?>
		<thead>
			<tr style="background: #00cca3; color:#fff;">
				<th>Nama</th>
				<th>Kehadiran</th>
			</tr>
		</thead>
		<tbody>
		<?php
		while ($data_absen =mysqli_fetch_array($stat_absen)) {
			?>
			<tr>
				<td><?php echo $data_absen['nama_siswa'] ?></td>
				<td class="w3-center"><?php echo $data_absen['ket_status_absensi'] ?></td>
			</tr>
		<?php
		}
		?>
		</tbody>
	</table>
</div>

<br />
<br />
<br />
<br />

