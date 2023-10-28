<?php
$tanggal_sekarang = date('Y-m-d');

$cek=mysqli_fetch_array(mysqli_query($l,"SELECT * FROM absensi WHERE tanggal_absensi='".$tanggal_sekarang."' "));
if (!$cek) {
	$stat_siswa=mysqli_query($l,"SELECT * FROM siswa");
	while($data_tambah=mysqli_fetch_array($stat_siswa)) {
		mysqli_query($l,"INSERT INTO absensi SET id_siswa_absensi=".$data_tambah['id_siswa'].", tanggal_absensi='".$tanggal_sekarang."' ") or die(mysqli_error($l));
	}
}
	?>
	<script type="text/javascript">
		document.location = 'index.php?page=hariini';
	</script>
