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
		<td>Range</td>
		<td>: <?php echo tgl_indo($_GET['tanggalawal']).' - '.tgl_indo($_GET['tanggalakhir']); ?></td>
	</tr>
	<tr><td><div style="margin:10px;"></div></td></tr>
	<tr>
		<td>Jumlah</td>
		<td>: 
		<?php
		$jumlahtelat=mysqli_query($l,"SELECT COUNT(id_siswa_keterlambatan) AS jumlahtelat FROM keterlambatan WHERE tanggal_keterlambatan BETWEEN '".$_GET['tanggalawal']."' AND '".$_GET['tanggalakhir']."'");
		$datahtelat=mysqli_fetch_array($jumlahtelat);
		echo $datahtelat['jumlahtelat'];
		?>
		</td>
</table>
</div><br />
<div class="w3-responsive">
	<table class="w3-table-all">
	<?php
	$stat_telat = mysqli_query($l,"SELECT * FROM keterlambatan join siswa ON keterlambatan.id_siswa_keterlambatan = siswa.id_siswa GROUP BY id_siswa ORDER BY id_siswa ASC");	
	?>
		<thead>
			<tr style="background: #00cca3; color:#fff;">
				<th>Nama</th>
				<th>Jumlah Terlambat</th>
			</tr>
		</thead>
		<tbody>
		<?php
		while ($data_telat =mysqli_fetch_array($stat_telat)) {
			?>
			<tr>
				<td><?php echo $data_telat['nama_siswa'] ?></td>
				<td class="w3-center">
				<?php
				$jumlahtelatsiswa=mysqli_query($l,"SELECT COUNT(id_siswa_keterlambatan) AS jumlahtelatsiswa FROM keterlambatan WHERE tanggal_keterlambatan BETWEEN '".$_GET['tanggalawal']."' AND '".$_GET['tanggalakhir']."' AND id_siswa_keterlambatan=".$data_telat['id_siswa']." ");
				$data_telatsiswa=mysqli_fetch_array($jumlahtelatsiswa);
				echo $data_telatsiswa['jumlahtelatsiswa'];
				?>
				</td>
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