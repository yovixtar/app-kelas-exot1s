<div class="topnav" id="myTopnav">
  <a href="index.php" class="active">EXOT1S App</a>
  <?php
  if (isset($_SESSION['admin'])) {
   ?>
  <a href="index.php?page=gantipin">Ganti Pin</a>
   <?php
  }
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
  <a href="index.php?page=logout">Logout</a>
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
