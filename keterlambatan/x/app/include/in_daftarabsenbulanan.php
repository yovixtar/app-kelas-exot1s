<div>
		<?php
		$stat_bulan=mysqli_query($l,"SELECT MONTH(tanggal_keterlambatan) AS bulan FROM keterlambatan GROUP BY MONTH(tanggal_keterlambatan)");
		 while ($data_bulan=mysqli_fetch_array($stat_bulan)) {
			?>
			<a href="index.php?page=rekapbulanan&bulan=<?php echo $data_bulan['bulan'] ?>" style="text-decoration: none;">
				<button class="w3-button w3-blue button-daftar-absen w3-round-xlarge w3-block" style="padding-top:10px;padding-bottom: 10px;"><?php echo $bulan[$data_bulan['bulan']] ?></button>
			</a>
			<?php
		} ?>
</div>