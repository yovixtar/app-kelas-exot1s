<!DOCTYPE html>
<html>
<head>
	<title>Ganti PIN | EXOT1S App</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="Shortcut Icon" href="/favicon.ico" type="image/x-icon" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/w3.css') ?>">
	<script type="text/javascript">
		
	</script>
	<style type="text/css">
		
	</style>
</head>
<body>
<div class="w3-modal" style="display: block;">
<div class="w3-modal-content w3-animate-top w3-card-8">
      <header class="w3-container <?php echo $this->config->item('warnaDasar') ?>"> 
      <?php
      	$array = array('id_siswa' => $idSiswa);
      	$dataPage = $this->db->get_where('siswa', $array);
		foreach ($dataPage->result_array() as $value) {
      ?>
        <h2><?php echo $value['nama_siswa'] ?></h2>
        <?php } ?>
      </header>
      <div class="w3-container" style="padding: 20px;">
      <?php
      	$BaruBayar=$this->db->query("SELECT * FROM bayarkas WHERE siswa_bk=".$idSiswa." AND bulan_bk=".$mountSelect." ORDER BY id_bk DESC LIMIT 1");
      	if ($BaruBayar->num_rows() == 0) {
      		echo "<h3>Belum Mulai Membayar Bulan Ini</h3>";
      	}else{
		foreach ($BaruBayar->result_array() as $value2) {
      ?>
        <h3>Kurang = <?php echo $value2['kurang_bk'] ?>k</h3>
        <?php } }?>
        <br />
        <a href="<?php echo base_url('main/select_listkas') ?>">
          <button class="w3-button w3-blue w3-block w3-round-xlarge">Back To List</button>
        </a>
      </div>
</div>
</div>

</body>
</html>