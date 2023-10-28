<?php
$dataPage = $this->db->get_where('manage_kas', array('id_mk' => $idx));
foreach ($dataPage->result_array() as $value) {
?>
<form action="<?php echo base_url('main/aksi_timemanager') ?>" method="POST">
<br />
<input type="number" name="idx" value="<?php echo $value['id_mk']; ?>" style="display: none">

<input type="text" name="mount" class="input-data" value="<?php echo $value['mount_mk']; ?>"><br />
<label>Nama Bulan</label><br /><br />

<input type="number" name="week" class="input-data" value="<?php echo $value['week_mk']; ?>"><br />
<label>Jumlah Minggu perbulan</label><br /><br />

<input type="number" name="day" class="input-data" value="<?php echo $value['day_mk']; ?>"><br />
<label>Jumlah Pembayaran perminggu</label><br /><br />

<center>
<input type="submit" name="manage" value="Save Data" class="animbutton">
</center>
</form>
<?php
}
?>
