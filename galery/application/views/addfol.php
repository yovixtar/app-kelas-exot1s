<?php
if (isset($_POST['save'])) {
	$folder=$_POST['folder'];
	$dataArray=array('nama_cat_img' => $folder);
	$masukan=$this->db->insert('cat_galery',$dataArray);
	
	if ($masukan) {
		?>
		<script type="text/javascript">document.location='<?php echo base_url(); ?>'</script>
		<?php
	}
}
?>
<div class="w3-container">
<br />
	<form action="" method="POST">
		<input type="text" name="folder" class="input-data"><br />
		<label>Nama Folder</label><br /><br />
		
		<center>
		<input type="submit" name="save" value="Save" class="w3-button">
		</center>
	</form>
</div>