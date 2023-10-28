<?php session_start(); include 'x/base/koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Keterlambatan | EXOT1S App | 275020</title>
	<link rel="stylesheet" type="text/css" href="x/assets/css/w3.css">
	<link rel="stylesheet" type="text/css" href="x/assets/css/my.css">
	<style type="text/css">
		body{font-size: 18px}
	</style>
</head>
<body>
<?php
if (isset($_POST['masukadmin'])) {
	$datalogin=mysqli_fetch_array(mysqli_query($l,"SELECT * FROM login_keterlambatan"));
	if ($datalogin['pin'] == md5($_POST['pin'])) {
		$_SESSION['admin'] = 'admin';
		
		?>
		<script type="text/javascript">
			document.location = 'x/index.php'
		</script>
<?php
	}else{
		?>
<script type="text/javascript">
	document.location = 'pinsalah.php';
</script>
<?php
	}
}elseif (isset($_POST['masukuser'])) {
	$_SESSION['user'] = 'user';
	?>
	<script type="text/javascript">
		document.location = 'x/index.php';
	</script>
<?php
};

?>
<br /><br /><br /><br /><br />
<center>
	<div class="w3-card-8" style="width: 90%;">
		<div class="w3-container" style="background: #444;color: #fff">
			<h2>Login Keterlambatan</h2>
		</div>
		<div id="default" class="w3-container" style="padding: 20px;">
			<a onclick="pinadmin()">
				<button class="w3-button w3-blue w3-block w3-round-xlarge">Admin</button>
			</a>
				<br />
			<form action="" method="POST">
				<input type="submit" name="masukuser" class="w3-button w3-blue w3-block w3-round-xlarge" value="User">
			</form>
		</div>
		
		<div id="formadmin" class="w3-container" style="padding: 20px;display: none">
			<form action="" method="POST">
				<label>Pin Admin</label>
				<input type="number" name="pin" maxlength="8" onkeypress="if (this.value.length==8) {return false};" class="w3-input w3-animate-input">
				<br />
				<input type="submit" name="masukadmin" class="w3-button w3-block w3-blue" value="Masuk"><br />
				<a onclick="" style="text-decoration: none;" class="w3-text-blue">
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