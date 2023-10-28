<?php
$where = array('id_siswa' => $idx);
$dataSiswa = $this->db->get_where('siswa', $where);
foreach ($dataSiswa->result_array() as $value) {
?>
<div class="w3-container">
<center>
		<h1><?php echo $value['nama_siswa'] ?></h1>
	
	
	<br />
	<form action="<?php echo base_url('main/aksi_bayarkas'); ?>" method="POST">
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
		<label>Pilih Bulan</label>
		<br />
		<br />
		<input type="number" name="pay" class="input-data" placeholder="Tuliskan dalam bentuk satuan (1 / 2 /3)"><br />
		<label>Jumlah Bayar <font color="red">*dalam bentuk satuan jangan ribuan (1 /2 /3)</font> </label>
		<br />
		<br />
		<input type="number" name="idSiswa" value="<?php echo $value['id_siswa'] ?>" style="display: none;">
		<button class="w3-btn w3-red w3-round" type="submit" name="save">Bayar Kas</button>
	</form>
</center>
</div>
<?php } ?>