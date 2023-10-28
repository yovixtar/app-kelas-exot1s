<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="Shortcut Icon" href="<?php echo base_url('ico/favicon.ico') ?>" type="image/x-icon" />
	<meta name="description" content="Web Pengelolaan KAS Kelas EXOT1S Muhamka" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/w3.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/my.css') ?>">
	<script type="text/javascript">
		
	</script>
	<style type="text/css">
		
	</style>
	<script>
	function topnav() {
	    var x = document.getElementById("myTopnav");
	    if (x.className === "topnav") {
	        x.className += " responsive";
	    } else {
	        x.className = "topnav";
	    }
	}

	var acc = document.getElementsByClassName("accordion");
	var i;

	for (i = 0; i < acc.length; i++) {
	    acc[i].addEventListener("click", function() {
	        this.classList.toggle("active_accordion");
	        var panel_accordion = this.nextElementSibling;
	        if (panel_accordion.style.display === "block") {
	            panel_accordion.style.display = "none";
	        } else {
	            panel_accordion.style.display = "block";
	        }
	    });
	}
	</script>
</head>
<body>
<div class="topnav" id="myTopnav">
  <a href="<?php echo base_url('main') ?>" class="active">EXOT1S App</a>
  <?php
  if ($login == 1) {
   ?>
  <a href="<?php echo base_url('main/gantipin') ?>">Ganti Pin</a>
   <?php
  }else{}
  ?>
  <!--
  <div class="dropdown">
    <button class="dropbtn">Rekap 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Perhari</a>
      <a href="#">Perbulan</a>
      <a href="#">Pertahun</a>
      <a href="#">Pilih Range</a>
    </div>
  </div> 
  -->

  <a onclick="document.getElementById('modal-kontak').style.display='block' ">Contact Bu Okky</a>
  <a href="<?php echo base_url('login/logout') ?>">Logout</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="topnav()">&#9776;</a>
</div>


<div id="modal-kontak" class="w3-modal" style="">
<div class="w3-modal-content w3-animate-top w3-card-8">
      <header class="w3-container w3-teal"> 
        <h2>Kontak Bu Okky</h2>
      </header>
      <div class="w3-container" style="padding: 20px;">
      <font>Pastikan kau sudah menyimpan Nomor Bu Okky <font color="red">(0856-4089-7277)</font> </font>
<form action="https://api.whatsapp.com/send?" method="GET">
      <textarea class="textarea" name="text" readonly>*By_Exot1s_APP*</textarea>
      <input type="text" name="phone" value="6285640897277" style="display: none">
      <input type="submit" name="kirim" value="Kirim Pesan" class="w3-button w3-blue">
</form>
        </a>
      </div>
</div>
</div>
