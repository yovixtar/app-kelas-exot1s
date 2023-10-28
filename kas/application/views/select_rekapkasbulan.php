<!DOCTYPE html>
<html>
<head>
	<title>Rekap Bulan | EXOT1S App</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="Shortcut Icon" href="/favicon.ico" type="image/x-icon" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/w3.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/my.css') ?>">
	<script type="text/javascript">
		
	</script>
	<style type="text/css">
		
	</style>
</head>
<body>
<div class="w3-modal" style="display: block;">
<div class="w3-modal-content w3-animate-top w3-card-8">
      <header class="w3-container <?php echo $this->config->item('warnaDasar') ?>"> 
        <h2>Pilih Bulan !</h2>
      </header>
      <div class="w3-container" style="padding: 20px;">
        <form action="<?php echo base_url('main/rekapkas_bulan') ?>" method="POST">
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
		<br />
		<br />
		<input type="submit" class="w3-btn w3-red w3-round" value="Buka Rekapan">
        </form>
      </div>
</div>
</div>

</body>
</html>