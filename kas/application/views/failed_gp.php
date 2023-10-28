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
        <h2>Gagal Mengganti Pin !</h2>
      </header>
      <div class="w3-container" style="padding: 20px;">
        <label style="display: none;color: red" id="pinlamasalah">Pin Salah !</label>
        <a href="<?php echo base_url('main/gantipin') ?>">
          <button class="w3-button w3-blue w3-block w3-round-xlarge">Kembali Mengganti Pin</button>
        </a>
      </div>
</div>
</div>

</body>
</html>