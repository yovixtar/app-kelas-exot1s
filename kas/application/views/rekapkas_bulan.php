<div class="w3-container">
	<?php
	$mountSelect = $this->input->post('mount');
	$uangBulanan = $this->db->query("SELECT COUNT(*) as jumlah FROM bayarkas WHERE bulan_bk=".$mountSelect);
	foreach ($uangBulanan->result_array() as $value) {
		$ribuan = $value['jumlah'] * 1000;
		?>
		<p style="font-size: 20px">Total Pembayaran : Rp<?php echo number_format($ribuan) ?></p>
		<?php
	}
	
	$data2 = $this->db->get_where('manage_kas', array('id_mk' => $mountSelect));
	foreach ($data2->result_array() as $value2) {
		$siswa = $this->db->query("SELECT COUNT(*) AS jumlahsiswa FROM siswa");
		foreach ($siswa->result_array() as $value3) {
		$jumlahDay = $value2['week_mk'] * $value2['day_mk'];
		$jumlahws = $jumlahDay * $value3['jumlahsiswa'];
		$totalTarget = $jumlahws * 1000;
		
		?>
		<p style="font-size: 20px">Target Total : Rp<?php echo number_format($totalTarget) ?></p>
		<?php
		}
	}
	?>
	<table class="w3-table-all" style="vertical-align: middle;">
		<tr class="w3-red">
			<th>No</th>
			<th>Nama</th>
			<th>S</th>
			<th>B</th>
		</tr>
		<?php 
		$no = 1;
		$dataPage = $this->db->get('siswa');
		foreach ($dataPage->result_array() as $value) {
		?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $value['nama_siswa'] ?></td>
			<td>
				<?php
				$dataS = $this->db->query("SELECT COUNT(*) AS jumlahs FROM bayarkas WHERE siswa_bk=".$value['id_siswa']." AND bulan_bk=".$mountSelect);
				foreach ($dataS->result_array() as $value2) {
					echo $value2['jumlahs'];
				}
				?>
			</td>
			<td>
				<?php
				$dataB = $this->db->get_where('manage_kas', array('id_mk' => $mountSelect));
				foreach ($data2->result_array() as $value2) {
					$dataS2 = $this->db->query("SELECT COUNT(*) AS jumlahb FROM bayarkas WHERE siswa_bk=".$value['id_siswa']." AND bulan_bk=".$mountSelect);
					foreach ($dataS2->result_array() as $value3) {
					$jumlahDay = $value2['week_mk'] * $value2['day_mk'];
					$jumlahB = $jumlahDay - $value3['jumlahb'];
					echo $jumlahB;
					}
				}
				?>
			</td>
		</tr>
		<?php $no++; } ?>
	</table>
</div>