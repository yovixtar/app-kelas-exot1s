<div class="w3-container">
	<br />
	<?php
	if ($login==1) {
		?>
		<a href="<?php echo base_url('main/select_bk') ?>">
			<button class="w3-btn w3-red w3-round">Bayar Kas</button>
		</a>
		<?php
	}
	?>
	<a href="<?php echo base_url('main/select_rekapkasbulan') ?>">
		<button class="w3-btn w3-red w3-round">Rekap KAS Bulanan</button>
	</a>
	<br />
	<br />
	<table class="w3-table-all" style="vertical-align: middle;">
		<tr class="w3-red">
			<th>No</th>
			<th>Nama</th>
			<th>Bulan</th>
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
				<form action="<?php echo base_url('main/listkas') ?>" method="POST">
					<input type="number" name="id_siswa" value="<?php echo $value['id_siswa'] ?>" style="display: none;">
					<select name="mount" class="input-data-select">
					<?php
					$dataBulan= $this->db->get('manage_kas');
					foreach ($dataBulan->result_array() as $valueMount) {
					?>
						<option value='<?php echo $valueMount['id_mk'] ?>' ><?php echo $valueMount['mount_mk'] ?></option>
					<?php
					}
					?>
					</select>
					<input type="submit" value="OK" class="w3-btn w3-red w3-round">
				</form>
			</td>
		</tr>
		<?php $no++; } ?>
	</table>
</div>