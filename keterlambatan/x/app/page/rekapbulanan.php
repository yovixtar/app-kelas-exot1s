<?php
$bulan = array (1 =>   'Januari',
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
?>
<div style="margin-left: 10px;margin-top: 10px;">
<table>
	<tr>
		<td>Bulan</td>
		<td>: <?php echo $bulan[$_GET['bulan']] ?></td>
	</tr>
	<tr><td><div style="margin:10px;"></div></td></tr>
	<tr>
		<td>Jumlah</td>
		<td>: 
		<?php
		$jumlahtelat=mysqli_query($l,"SELECT COUNT(id_siswa_keterlambatan) AS jumlahtelat FROM keterlambatan WHERE MONTH(tanggal_keterlambatan)=".$_GET['bulan']."");
		$data_telat=mysqli_fetch_array($jumlahtelat);
		echo $data_telat['jumlahtelat'];
		?>
		</td>
	</tr>
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
				<th>Jumlah</th>
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
				$jumlahtelatsiswa=mysqli_query($l,"SELECT COUNT(id_siswa_keterlambatan) AS jumlahtelatsiswa FROM keterlambatan WHERE MONTH(tanggal_keterlambatan)=".$_GET['bulan']." AND id_siswa_keterlambatan=".$data_telat['id_siswa']."");
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