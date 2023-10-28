<!DOCTYPE html>
<html>
<head>
	<title>Show Pic</title>
<style>
body {padding: 0;margin: 0;background-color: #444;}
.Showimg{
	margin-top: 10vw;
}
</style>
</head>
<body>
<div>
<?php
$dataku= $this->db->query('SELECT * FROM galery WHERE id_img='.$idpic.'');
foreach ($dataku->result_array() AS $data) {

?>
	<img style="width: 100vw" class="Showimg" src="<?php echo base_url('img/'.$data['nama_img']); ?>">
	<div class="div-caption">
		<p><?php echo $data['caption_img'] ?></p>
	</div>
	
	<br />
	<br />
	<br />
	<br />
	<br />
	<button onclick="document.getElementById('modalOpsi').style.display='block'" class="w3-container active w3-bottom" style="padding: 10px;border: none"><center><font face="Aldrich" size="5" color="#fff">OPSI</font></center></button>

	  <div id="modalOpsi" class="w3-modal">
	    <div class="w3-modal-content w3-animate-top">
	      <div class="w3-container" style="margin-top: 100px;padding: 10px">
	        <span onclick="document.getElementById('modalOpsi').style.display='none'" class="w3-button w3-display-topright" style="color:#f00">&times;</span>
	        <a href="<?php echo base_url('img/'.$data['nama_img']); ?>" class="mylink">Download</a><br /><br />
	        <a onclick="document.getElementById('modalEdit').style.display='block';document.getElementById('modalOpsi').style.display='none'" class="mylink">Edit</a><br /><br />
	        <a onclick="document.getElementById('modalHapus').style.display='block';document.getElementById('modalOpsi').style.display='none'" class="mylink">Hapus</a><br /><br />
	      </div>
	    </div>
	  </div>
	</div>
	
	<?php
	if (isset($_POST['edit'])) {
			if ($_POST['password']==$data['pin_img']) {
	?>
	<script type="text/javascript">
		document.location='<?php echo base_url('fungsion/editimg').'/'.$data['id_img'] ?>'
	</script>
	<?php
		}else{
				?>
				<script type="text/javascript">alert('Pasword Salah !')</script>
				<?php
			}
		}	
	if (isset($_POST['hapus'])) {
			if ($_POST['password']==$data['pin_img']) {
				$fileImg='./img/'.$data['nama_img'];
			if (!unlink($fileImg)) {
				?>
				<script type="text/javascript">alert('gagal !');</script>
				<?php
			}else{
				$hapusDb=$this->db->delete('galery', array('nama_img' => $data['nama_img'])); 
			if ($hapusDb) {
				?>
				<script type="text/javascript">document.location='<?php echo base_url(); ?>'</script>
				<?php
			}
			}
			}else{
				?>
				<script type="text/javascript">alert('Pasword Salah !')</script>
				<?php
			}
		}	
	?>
	<div id="modalHapus" class="w3-modal">
	    <div class="w3-modal-content w3-animate-top">
	      <div class="w3-container" style="margin-top: 100px;padding: 10px;">
	        <form action="" method="POST">
	        	<input type="password" name="password" class="input-data"><br />
	        	<label>Password Gambar</label>
	        	<p>Yakin Mau menghapus Foto ?</p>
	        	<input type="submit" name="hapus" value="Ya" class="w3-button" style="float:right;color: #f00"><br /><br />
	        	<button class="w3-button" onclick="document.getElementById('modalHapus').style.display='none'" style="float:right">Tidak</button>
	        </form>
	      </div>
	    </div>
	  </div>
	</div>
	<div id="modalEdit" class="w3-modal">
	    <div class="w3-modal-content w3-animate-top">
	      <div class="w3-container" style="margin-top: 100px;padding: 10px;">
	        <form action="" method="POST">
	        	<input type="password" name="password" class="input-data"><br />
	        	<label>Password Gambar</label><br />
	        	<input type="submit" name="edit" value="Benar" class="w3-button" style="float:right;color: #f00"><br /><br />
	        	<button class="w3-button" onclick="document.getElementById('modalHapus').style.display='none'" style="float:right">batal</button>
	        </form>
	      </div>
	    </div>
	  </div>
	</div>
	
<?php } ?>
</div>
</body>
</html>