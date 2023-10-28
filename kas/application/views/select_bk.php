<div class="w3-container">
	<br />
	<a href="<?php echo base_url('main/select_listkas') ?>">
		<button class="w3-btn w3-red w3-round">List Bayar Kas</button>
	</a>
	<br />
	<br />
	<table class="w3-table-all" style="vertical-align: middle;">
		<tr class="w3-red">
			<th>No</th>
			<th>Bayar</th>
			<th>Nama</th>
		</tr>
		<?php 
		$no = 1;
		$dataPage = $this->db->get('siswa');
		foreach ($dataPage->result_array() as $value) {
		?>
		<tr>
			<td><?php echo $no; ?></td>
			<td>
				<a href="<?php echo base_url('main/bayarkas').'/'.$value['id_siswa'] ?>">
					<button class="w3-btn w3-red w3-round">Bayar</button>
				</a>
			</td>
			<td><?php echo $value['nama_siswa'] ?></td>
		</tr>
		<?php $no++; } ?>
	</table>
</div>