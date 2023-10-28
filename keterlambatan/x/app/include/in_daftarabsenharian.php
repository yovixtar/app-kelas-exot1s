	<div>
		<h2 style="font-family: Architects Daughter">Juni</h2>
	</div>
	<div>
		<?php
		$stat_hari=mysqli_query($l,"SELECT DAY(tanggal_keterlambatan) AS tanggal, MONTH(tanggal_keterlambatan) AS bulan, tanggal_keterlambatan FROM keterlambatan WHERE MONTH(tanggal_keterlambatan)=06 GROUP BY DAY(tanggal_keterlambatan) ORDER BY DAY(tanggal_keterlambatan) ASC");
		 while ($data_hari=mysqli_fetch_array($stat_hari)) {
			?>
			<a href="index.php?page=rekapharian&tanggal=<?php echo $data_hari['tanggal_keterlambatan'] ?>">
				<button class="w3-btn w3-blue button-daftar-absen"><?php echo $data_hari['tanggal'] ?></button>
			</a>
			<?php
		} ?>
	</div>
	
	<div>
		<h2 style="font-family: Architects Daughter">Juli</h2>
	</div>
	<div>
		<?php
		$stat_hari=mysqli_query($l,"SELECT DAY(tanggal_keterlambatan) AS tanggal, MONTH(tanggal_keterlambatan) AS bulan, tanggal_keterlambatan FROM keterlambatan WHERE MONTH(tanggal_keterlambatan)=07 GROUP BY DAY(tanggal_keterlambatan) ORDER BY DAY(tanggal_keterlambatan) ASC");
		 while ($data_hari=mysqli_fetch_array($stat_hari)) {
			?>
			<a href="index.php?page=rekapharian&tanggal=<?php echo $data_hari['tanggal_keterlambatan'] ?>">
				<button class="w3-btn w3-blue button-daftar-absen"><?php echo $data_hari['tanggal'] ?></button>
			</a>
			<?php
		} ?>
	</div>
	
	<div>
		<h2 style="font-family: Architects Daughter">Agustus</h2>
	</div>
	<div>
		<?php
		$stat_hari=mysqli_query($l,"SELECT DAY(tanggal_keterlambatan) AS tanggal, MONTH(tanggal_keterlambatan) AS bulan, tanggal_keterlambatan FROM keterlambatan WHERE MONTH(tanggal_keterlambatan)=08 GROUP BY DAY(tanggal_keterlambatan) ORDER BY DAY(tanggal_keterlambatan) ASC");
		 while ($data_hari=mysqli_fetch_array($stat_hari)) {
			?>
			<a href="index.php?page=rekapharian&tanggal=<?php echo $data_hari['tanggal_keterlambatan'] ?>">
				<button class="w3-btn w3-blue button-daftar-absen"><?php echo $data_hari['tanggal'] ?></button>
			</a>
			<?php
		} ?>
	</div>
	
	<div>
		<h2 style="font-family: Architects Daughter">September</h2>
	</div>
	<div>
		<?php
		$stat_hari=mysqli_query($l,"SELECT DAY(tanggal_keterlambatan) AS tanggal, MONTH(tanggal_keterlambatan) AS bulan, tanggal_keterlambatan FROM keterlambatan WHERE MONTH(tanggal_keterlambatan)=09 GROUP BY DAY(tanggal_keterlambatan) ORDER BY DAY(tanggal_keterlambatan) ASC");
		 while ($data_hari=mysqli_fetch_array($stat_hari)) {
			?>
			<a href="index.php?page=rekapharian&tanggal=<?php echo $data_hari['tanggal_keterlambatan'] ?>">
				<button class="w3-btn w3-blue button-daftar-absen"><?php echo $data_hari['tanggal'] ?></button>
			</a>
			<?php
		} ?>
	</div>
	
	<div>
		<h2 style="font-family: Architects Daughter">Oktober</h2>
	</div>
	<div>
		<?php
		$stat_hari=mysqli_query($l,"SELECT DAY(tanggal_keterlambatan) AS tanggal, MONTH(tanggal_keterlambatan) AS bulan, tanggal_keterlambatan FROM keterlambatan WHERE MONTH(tanggal_keterlambatan)=10 GROUP BY DAY(tanggal_keterlambatan) ORDER BY DAY(tanggal_keterlambatan) ASC");
		 while ($data_hari=mysqli_fetch_array($stat_hari)) {
			?>
			<a href="index.php?page=rekapharian&tanggal=<?php echo $data_hari['tanggal_keterlambatan'] ?>">
				<button class="w3-btn w3-blue button-daftar-absen"><?php echo $data_hari['tanggal'] ?></button>
			</a>
			<?php
		} ?>
	</div>
	
	<div>
		<h2 style="font-family: Architects Daughter">November</h2>
	</div>
	<div>
		<?php
		$stat_hari=mysqli_query($l,"SELECT DAY(tanggal_keterlambatan) AS tanggal, MONTH(tanggal_keterlambatan) AS bulan, tanggal_keterlambatan FROM keterlambatan WHERE MONTH(tanggal_keterlambatan)=11 GROUP BY DAY(tanggal_keterlambatan) ORDER BY DAY(tanggal_keterlambatan) ASC");
		 while ($data_hari=mysqli_fetch_array($stat_hari)) {
			?>
			<a href="index.php?page=rekapharian&tanggal=<?php echo $data_hari['tanggal_keterlambatan'] ?>">
				<button class="w3-btn w3-blue button-daftar-absen"><?php echo $data_hari['tanggal'] ?></button>
			</a>
			<?php
		} ?>
	</div>
	
	<div>
		<h2 style="font-family: Architects Daughter">Desember</h2>
	</div>
	<div>
		<?php
		$stat_hari=mysqli_query($l,"SELECT DAY(tanggal_keterlambatan) AS tanggal, MONTH(tanggal_keterlambatan) AS bulan, tanggal_keterlambatan FROM keterlambatan WHERE MONTH(tanggal_keterlambatan)=12 GROUP BY DAY(tanggal_keterlambatan) ORDER BY DAY(tanggal_keterlambatan) ASC");
		 while ($data_hari=mysqli_fetch_array($stat_hari)) {
			?>
			<a href="index.php?page=rekapharian&tanggal=<?php echo $data_hari['tanggal_keterlambatan'] ?>">
				<button class="w3-btn w3-blue button-daftar-absen"><?php echo $data_hari['tanggal'] ?></button>
			</a>
			<?php
		} ?>
	</div>
	
		<div>
		<h2 style="font-family: Architects Daughter">Januari</h2>
	</div>
	<div>
		<?php
		$stat_hari=mysqli_query($l,"SELECT DAY(tanggal_keterlambatan) AS tanggal, MONTH(tanggal_keterlambatan) AS bulan, tanggal_keterlambatan FROM keterlambatan WHERE MONTH(tanggal_keterlambatan)=01 GROUP BY DAY(tanggal_keterlambatan) ORDER BY DAY(tanggal_keterlambatan) ASC");
		 while ($data_hari=mysqli_fetch_array($stat_hari)) {
			?>
			<a href="index.php?page=rekapharian&tanggal=<?php echo $data_hari['tanggal_keterlambatan'] ?>">
				<button class="w3-btn w3-blue button-daftar-absen"><?php echo $data_hari['tanggal'] ?></button>
			</a>
			<?php
		} ?>
	</div>
	
	<div>
		<h2 style="font-family: Architects Daughter">Febuari</h2>
	</div>
	<div>
		<?php
		$stat_hari=mysqli_query($l,"SELECT DAY(tanggal_keterlambatan) AS tanggal, MONTH(tanggal_keterlambatan) AS bulan, tanggal_keterlambatan FROM keterlambatan WHERE MONTH(tanggal_keterlambatan)=02 GROUP BY DAY(tanggal_keterlambatan) ORDER BY DAY(tanggal_keterlambatan) ASC");
		 while ($data_hari=mysqli_fetch_array($stat_hari)) {
			?>
			<a href="index.php?page=rekapharian&tanggal=<?php echo $data_hari['tanggal_keterlambatan'] ?>">
				<button class="w3-btn w3-blue button-daftar-absen"><?php echo $data_hari['tanggal'] ?></button>
			</a>
			<?php
		} ?>
	</div>
	
	<div>
		<h2 style="font-family: Architects Daughter">Maret</h2>
	</div>
	<div>
		<?php
		$stat_hari=mysqli_query($l,"SELECT DAY(tanggal_keterlambatan) AS tanggal, MONTH(tanggal_keterlambatan) AS bulan, tanggal_keterlambatan FROM keterlambatan WHERE MONTH(tanggal_keterlambatan)=03 GROUP BY DAY(tanggal_keterlambatan) ORDER BY DAY(tanggal_keterlambatan) ASC");
		 while ($data_hari=mysqli_fetch_array($stat_hari)) {
			?>
			<a href="index.php?page=rekapharian&tanggal=<?php echo $data_hari['tanggal_keterlambatan'] ?>">
				<button class="w3-btn w3-blue button-daftar-absen"><?php echo $data_hari['tanggal'] ?></button>
			</a>
			<?php
		} ?>
	</div>
	
	<div>
		<h2 style="font-family: Architects Daughter">April</h2>
	</div>
	<div class="">
		<?php
		$stat_hari=mysqli_query($l,"SELECT DAY(tanggal_keterlambatan) AS tanggal, MONTH(tanggal_keterlambatan) AS bulan, tanggal_keterlambatan FROM keterlambatan WHERE MONTH(tanggal_keterlambatan)=04 GROUP BY DAY(tanggal_keterlambatan) ORDER BY DAY(tanggal_keterlambatan) ASC");
		 while ($data_hari=mysqli_fetch_array($stat_hari)) {
			?>
			<a href="index.php?page=rekapharian&tanggal=<?php echo $data_hari['tanggal_keterlambatan'] ?>">
				<button class="w3-btn w3-blue button-daftar-absen" style=""><?php echo $data_hari['tanggal'] ?></button>
			</a>
			<?php
		} ?>
	</div>
	
	<div>
		<h2 style="font-family: Architects Daughter">Mei</h2>
	</div>
	<div>
		<?php
		$stat_hari=mysqli_query($l,"SELECT DAY(tanggal_keterlambatan) AS tanggal, MONTH(tanggal_keterlambatan) AS bulan, tanggal_keterlambatan FROM keterlambatan WHERE MONTH(tanggal_keterlambatan)=05 GROUP BY DAY(tanggal_keterlambatan) ORDER BY DAY(tanggal_keterlambatan) ASC");
		 while ($data_hari=mysqli_fetch_array($stat_hari)) {
			?>
			<a href="index.php?page=rekapharian&tanggal=<?php echo $data_hari['tanggal_keterlambatan'] ?>">
				<button class="w3-btn w3-blue button-daftar-absen"><?php echo $data_hari['tanggal'] ?></button>
			</a>
			<?php
		} ?>
	</div>
	