<?php
$tanggal_sekarang = date('Y-m-d');
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
	<p>Tanggal : <?php echo tgl_indo($tanggal_sekarang) ?></p>
</div>
<div style="float:right;margin-right:10px">
	<a href="index.php?page=rekapharian&tanggal=<?php echo $tanggal_sekarang ?>">
		<button class="w3-btn w3-round-large w3-border w3-border-teal" style="background: #000; color:#00cca3">
			<font size="4">Nihil</font>
		</button>
	</a>
</div>
<br />
<br />
<br />

<?php
if (isset($_POST['ok2'])) {
	mysqli_query($l, "UPDATE absensi SET status_absensi=".$_POST['status']." WHERE tanggal_absensi='".$tanggal_sekarang."' AND id_siswa_absensi =".$_POST['idx']."  ");
};
if (isset($_POST['ok3'])) {
	mysqli_query($l, "UPDATE absensi SET status_absensi=".$_POST['status']." WHERE tanggal_absensi='".$tanggal_sekarang."' AND id_siswa_absensi =".$_POST['idx']."  ");
};
if (isset($_POST['ok4'])) {
	mysqli_query($l, "UPDATE absensi SET status_absensi=".$_POST['status']." WHERE tanggal_absensi='".$tanggal_sekarang."' AND id_siswa_absensi =".$_POST['idx']."  ");
};
$stat_absen = mysqli_query($l,"SELECT * FROM absensi join siswa ON absensi.id_siswa_absensi = siswa.id_siswa WHERE tanggal_absensi='".$tanggal_sekarang."' ");
while ($data_absen =mysqli_fetch_array($stat_absen)) {
	?>
	<button class="accordion <?php if($data_absen['status_absensi'] != 1){echo "w3-red";} ?> "><?php echo $data_absen['nama_siswa'] ?></button>
	<div class="panel_accordion" style="padding: 5px;">
		  <form action="" method="POST" style="margin-bottom: 5px;">
		  	<input type="number" name="status" value="2" style="display: none">
		  	<input type="number" name="idx" value="<?php echo $data_absen['id_siswa_absensi'] ?>" style="display: none">
		  	<input type="submit" name="ok2" value="I" class="w3-button w3-white w3-border w3-border-blue w3-round-large">
		  <font>Izin</font>
		  </form>
		  <form action="" method="POST" style="margin-bottom: 5px;">
		  	<input type="number" name="status" value="3" style="display: none">
		  	<input type="number" name="idx" value="<?php echo $data_absen['id_siswa_absensi'] ?>" style="display: none">
		  	<input type="submit" name="ok3" value="S" class="w3-button w3-white w3-border w3-border-blue w3-round-large">
		  <font>Sakit</font>
		  </form>
		  <form action="" method="POST">
		  	<input type="number" name="status" value="4" style="display: none">
		  	<input type="number" name="idx" value="<?php echo $data_absen['id_siswa_absensi'] ?>" style="display: none">
		  	<input type="submit" name="ok4" value="A" class="w3-button w3-white w3-border w3-border-blue w3-round-large">
		   <font>Alfa</font>
		  </form>
	</div>
	<?php
}
?>

<br />
<br />
<div style="float:right;margin-right:10px">
	<a href="index.php?page=rekapharian&tanggal=<?php echo $tanggal_sekarang ?>">
		<button class="w3-btn w3-round-large w3-border w3-border-teal" style="background: #000; color:#00cca3">
			<font size="4">Selesai</font>
		</button>
	</a>
</div>
<br />
<br />
<br />
<br />
<br />
<br />
