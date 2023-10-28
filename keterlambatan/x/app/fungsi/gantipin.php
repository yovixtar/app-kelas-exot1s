<div class="w3-modal" style="display: block;">
<div class="w3-modal-content w3-animate-top w3-card-8">
      <header class="w3-container" style="background: #444;color: #fff"> 
        <h2>Ganti Pin Keterlambatan</h2> 
      </header>
      <div class="w3-container" style="padding: 20px;">
        <form action="" method="POST">
        <label>Pin Lama :</label>
        	<input type="number" class="w3-input w3-animate-input" name="pinlama" onkeypress="if (this.value.length==8) {return false}">
        <label style="display: none;color: red" id="pinlamasalah">Pin Salah !</label>
        	<br />
        <label>Pin Baru :</label>
        	<input type="number" class="w3-input w3-animate-input" name="pinbaru" onkeypress="if (this.value.length==8) {return false}" placeholder="max 8">
        	<br />
        <input type="submit" name="gantipin" value="Simpan" class="w3-button w3-blue w3-block">
        </form>
      </div>
</div>
</div>

<?php
if (isset($_POST['gantipin'])) {
	$datapin=mysqli_fetch_array(mysqli_query($l,"SELECT * FROM login_keterlambatan"));
	if (md5($_POST['pinlama']) == $datapin['pin']) {
		$a=mysqli_query($l,"INSERT INTO login_keterlambatan SET pin=md5('".$_POST['pinbaru']."')");
		if ($a) {
			mysqli_query($l,"DELETE FROM login_keterlambatan where pin=md5('".$_POST['pinlama']."') ");
		?>
		<script type="text/javascript">
			document.location='index.php?page=nextpin';
		</script>
	<?php
		}
	}else{
		?>
		<script type="text/javascript">
			document.getElementById('pinlamasalah').style.display='block';
		</script>
	<?php
	}
}
?>