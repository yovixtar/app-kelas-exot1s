<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title>Absensi | EXOT1S App</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="assets/css/w3.css">
	<link rel="stylesheet" type="text/css" href="assets/css/my.css">
</head>
<body>
<?php
include 'base/koneksi.php';
include 'app/include/nav.php';
?>
<div class="content-area">
<?php
$sw=isset($_GET['page']) ? $_GET['page'] :null;
switch ($sw) {
	case 'hariini':
		include 'app/page/hariini.php';
		break;
	case 'daftarabsenharian':
		include 'app/page/daftarabsenharian.php';
		break;
	case 'daftarabsenbulanan':
		include 'app/page/daftarabsenbulanan.php';
		break;
	case 'pilihrange':
		include 'app/page/pilihrange.php';
		break;
	case 'rekapharian':
		include 'app/page/rekapharian.php';
		break;
	case 'rekapbulanan':
		include 'app/page/rekapbulanan.php';
		break;
	case 'Lihat_rekapan':
		include 'app/page/rekaprange.php';
		break;
	case 'gantipin':
		include 'app/fungsi/gantipin.php';
		break;
	case 'nextpin':
		include 'app/fungsi/nextpin.php';
		break;
		
	case 'logout':
		include 'app/fungsi/logout.php';
		break;
	
	default:
		include 'app/page/default.php';
		break;
}

//Variable
?>
</div>
<div class="w3-container active footer w3-bottom">
  <center>
  	<a class="afoot" href="index.php">
  		<font style="font-family:Aldrich;">Keterlambatan | EXOT1S App</font>
  	</a>
  	<br>
  	<a class="afoot" href="#">
  		<font style="font-family:Aldrich; ">By Khazim STAR</font>
  	</a>
  </center>
</div>
<?php
include 'app/include/script.php';
?>
</body>
</html>