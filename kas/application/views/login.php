<!DOCTYPE html>
<html>
<head>
	<title>Login KAS | EXOT1S App | 280618</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/w3.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/my.css') ?>">
	<style type="text/css">
		body{font-size: 18px}
	</style>
</head>
<body>
<br /><br /><br /><br /><br />
<center>
	<div class="w3-card-8" style="width: 90%;">
		<div class="<?php echo $this->config->item('warnaDasar') ?> w3-container" style="">
			<h2>Login KAS</h2>
		</div>
		<div id="default" class="w3-container" style="padding: 20px;">
			<a onclick="pinadmin()">
				<button class="w3-button w3-blue w3-block w3-round-xlarge">Admin</button>
			</a>
				<br />
			<a href="<?php echo base_url('main'); ?>">
				<button class="w3-button w3-blue w3-block w3-round-xlarge">User</button>
			</a>
		</div>
		
		<div id="formadmin" class="w3-container" style="padding: 20px;display: none">
			<form action="<?php echo base_url('login/aksi_login') ?>" method="POST">
				<label>Pin Admin</label>
				<input type="number" name="pin" maxlength="8" onkeypress="if (this.value.length==8) {return false};" class="w3-input w3-animate-input">
				<br />
				<input type="submit" name="masukadmin" class="w3-button w3-block w3-blue" value="Masuk"><br />
				<a href="<?php echo base_url('main'); ?>" style="text-decoration: none;" class="w3-text-blue">
					<font>Login User >></font>
				</a>
			</form>
		</div>
	</div>
</center>

<script type="text/javascript">
	function pinadmin() {
		document.getElementById('formadmin').style.display="block";
		document.getElementById('default').style.display="none";
	}
</script>
</body>
</html>