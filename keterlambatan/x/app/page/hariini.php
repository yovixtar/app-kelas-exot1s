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
<br />
<br />
<br />

<?php
if (isset($_POST['telat'])) {
	mysqli_query($l, "INSERT INTO keterlambatan SET id_siswa_keterlambatan=".$_POST['idx'].", tanggal_keterlambatan='".$tanggal_sekarang."'  ");
};
$stat_telat = mysqli_query($l,"SELECT * FROM siswa");
while ($data_telat =mysqli_fetch_array($stat_telat)) {
	?>
	<button class="accordion <?php $status_telat=mysqli_fetch_array(mysqli_query($l,"SELECT * FROM keterlambatan WHERE id_siswa_keterlambatan=".$data_telat['id_siswa']." AND tanggal_keterlambatan='".$tanggal_sekarang."' ")); if ($status_telat) {echo "w3-red";} ?>" style="color: #fff"><?php echo $data_telat['nama_siswa']; ?></button>
	<div class="panel_accordion" style="padding: 5px;">
		  <form action="" method="POST" style="margin-bottom: 5px;">
		  	<input type="number" name="idx" value="<?php echo $data_telat['id_siswa'] ?>" style="display: none">
		  	<input type="submit" name="telat" value="Terlambat" class="w3-button w3-red" style="<?php if ($status_telat) {echo "display:none";} ?>">
		  </form>
	</div>
	<?php
}
?>

<br />
<br />
<div style="float:right;margin-right:10px">
	<a href="index.php?page=rekapharian&tanggal=<?php echo $tanggal_sekarang ?>">
		<button class="w3-btn w3-round-large w3-blue" style="">
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
