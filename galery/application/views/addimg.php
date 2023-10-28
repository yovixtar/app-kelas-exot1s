<?php
if (isset($_POST['save']) && isset($_FILES['gambar']['name'])) {
	$name=$_POST['nama'];
	$caption=$_POST['caption'];
	$uploader=$_POST['uploader'];
	$folder=$_POST['folder'];
	$password=$_POST['password'];
	$tanggal=date('Y-m-d');
	$arrayData= array('caption_img' => $caption , 'cat_img' => $folder , 'uploader_img' => $uploader, 'pin_img' => $password, 'waktu_upload_img' => $tanggal, 'w_img' => $name);
	$inputData=$this->db->insert('galery',$arrayData);
	if ($inputData) {
        
          $nama = $_FILES['gambar']['name'];
          $ukuran = $_FILES['gambar']['size'];
          $file_tmp = $_FILES['gambar']['tmp_name'];  

            if($ukuran < 10044070){      
            move_uploaded_file($file_tmp, './img/'.$nama);
            $dataUpload = array('nama_img' => $nama);
			$this->db->where('w_img', $_POST['nama']);
			$this->db->update('galery', $dataUpload);
            
            }else{
              ?>
              <script type="text/javascript">alert('Ukuran Foto Terlalu Besar !')</script>
            <?php
            }
            ?>
        <script type="text/javascript">
            alert("Gambar Berhasil di Tambahkan !");
            document.location = '<?php echo base_url(); ?>'
        </script>
     <?php
	}
}else{}
?>
<div class="w3-container">
<br />
<form action="" method="POST" enctype="multipart/form-data">
<center>
		<input type="file" name="gambar" id="file-5" class="inputfile inputfile-4" data-multiple-caption="{count} files selected" multiple style="display: none" />
					<label for="file-5"><figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg></figure> <span>Pilih Gambar&hellip;</span></label>
</center>
	
	<input type="text" name="nama" class="input-data" /><br />
	<label>Nama <font color="red">*pastikan berbeda dengan yang lain</font></label><br /><br />
	
	<input type="text" name="caption" class="input-data"><br />
	<label>Caption Gambar</label><br /><br />
	
	<select name="folder" class="input-data-select">
		<?php  $data_fol=$this->db->query('SELECT * FROM cat_galery');
		foreach ($data_fol->result_array() AS $data) {
		 	?>
		 	<option value="<?php echo $data['id_cat_img'] ?>"><?php echo $data['nama_cat_img'] ?></option>
		<?php } ?>
	</select><br />
	<label>Folder / Kategory</label> <br /><br />
	
	<input type="text" name="uploader" class="input-data"><br />
	<label>Uploader</label><br /><br />
	
	<input type="password" name="password" class="input-data"><br />
	<label>Password Gambar</label><br /><br />
	
	<center>
	<input type="submit" name="save" class="btn" value="Save" style="">	
	</center>
</form>
</div>
<script type="text/javascript">
	/*
	By Osvaldas Valutis, www.osvaldas.info
	Available for use under the MIT License
*/

'use strict';

;( function ( document, window, index )
{
	var inputs = document.querySelectorAll( '.inputfile' );
	Array.prototype.forEach.call( inputs, function( input )
	{
		var label	 = input.nextElementSibling,
			labelVal = label.innerHTML;

		input.addEventListener( 'change', function( e )
		{
			var fileName = '';
			if( this.files && this.files.length > 1 )
				fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
			else
				fileName = e.target.value.split( '\\' ).pop();

			if( fileName )
				label.querySelector( 'span' ).innerHTML = fileName;
			else
				label.innerHTML = labelVal;
		});

		// Firefox bug fix
		input.addEventListener( 'focus', function(){ input.classList.add( 'has-focus' ); });
		input.addEventListener( 'blur', function(){ input.classList.remove( 'has-focus' ); });
	});
}( document, window, 0 ));
</script>