<center>
<?php
if (isset($_SESSION['admin'])) {
	?>
		<br />
		<a href="index.php?page=tambahhariini">
			<button class="animbutton">Absen Hari Ini</button>
		</a>
		<br />
		<br />
		<a href="index.php?page=daftarabsenharian">
			<button class="animbutton">Daftar Absen Harian</button>
		</a>
		<br />
		<br />
		<a href="index.php?page=daftarabsenbulanan">
			<button class="animbutton">Daftar Absen Bulanan</button>
		</a>
		<br />
		<br />
		<a href="index.php?page=pilihrange">
			<button class="animbutton">Pilih Range Tanggal</button>
		</a>
		<br />
<?php
}elseif (isset($_SESSION['user'])) {
	?>
	<br />
		<a href="index.php?page=daftarabsenharian">
			<button class="animbutton">Daftar Absen Harian</button>
		</a>
		<br />
		<br />
		<a href="index.php?page=daftarabsenbulanan">
			<button class="animbutton">Daftar Absen Bulanan</button>
		</a>
		<br />
		<br />
		<a href="index.php?page=pilihrange">
			<button class="animbutton">Pilih Range Tanggal</button>
		</a>
		<br />
		
<?php
}else{
	echo "<br><h1>Anda Harus Login Terlebih dahulu !</h1>";
}
?>

	
</center>