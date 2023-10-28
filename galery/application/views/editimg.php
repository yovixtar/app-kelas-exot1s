<?php
if (isset($_POST['save'])) {
	$name=$_POST['nama'];
	$caption=$_POST['caption'];
	$uploader=$_POST['uploader'];
	$folder=$_POST['folder'];
	$password=$_POST['password'];
	$arrayData= array('caption_img' => $caption , 'cat_img' => $folder , 'uploader_img' => $uploader, 'pin_img' => $password, 'w_img' => $name);
	$updateData=$this->db->update('galery', $arrayData, array('id_img' => $idImg));
	if ($updateData) {
            ?>
        <script type="text/javascript">
            alert("Gambar Berhasil di Ubah !");
            document.location = '<?php echo base_url(); ?>'
        </script>
     <?php
	}
}else{};

$dataValue=$this->db->get_where('galery',array('id_img' => $idImg));
foreach ($dataValue->result_array() as $dataValue) {
?>
<div class="w3-container">
<br />
<center>
	<img src="<?php echo base_url('img/'.$dataValue['nama_img']); ?>" style="width: 40vw">
</center>
<br />
<form action="" method="POST" enctype="multipart/form-data">
	
	<input type="text" name="nama" class="input-data" value="<?php echo $dataValue['w_img'] ?>" /><br />
	<label>Nama <font color="red">*pastikan berbeda dengan yang lain</font></label><br /><br />
	
	<input type="text" name="caption" class="input-data" value="<?php echo $dataValue['caption_img'] ?>"><br />
	<label>Caption Gambar</label><br /><br />
	
	<select name="folder" class="input-data-select">
		<?php  $data_fol=$this->db->query('SELECT * FROM cat_galery');
		foreach ($data_fol->result_array() AS $data) {
		 	?>
		 	<option value="<?php echo $data['id_cat_img'] ?>" <?php if($dataValue['cat_img']==$data['id_cat_img']){echo "SELECTED";}else{} ?> ><?php echo $data['nama_cat_img'] ?></option>
		<?php } ?>
	</select><br />
	<label>Folder / Kategory</label> <br /><br />
	
	<input type="text" name="uploader" class="input-data" value="<?php echo $dataValue['uploader_img'] ?>"><br />
	<label>Uploader</label><br /><br />
	
	<input type="password" name="password" class="input-data" value="<?php echo $dataValue['pin_img'] ?>"><br />
	<label>Password Gambar</label><br /><br />
	
	<center>
	<input type="submit" name="save" class="btn" value="Save" style="">	
	</center>
</form>
</div>
<?php }; ?>