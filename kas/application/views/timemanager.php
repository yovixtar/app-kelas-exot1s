<center>
<?php
$dataBulan = $this->db->get('manage_kas');
foreach ($dataBulan->result_array() as $namaBulan) {
?>
<br />
<a href="<?php echo base_url('main/d_timemanager').'/'.$namaBulan['id_mk'] ?>">
	<button class="animbutton"><?php echo $namaBulan['mount_mk'] ?></button>
</a>
<br />
<?php
}
?>
</center>