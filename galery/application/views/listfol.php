<div class="w3-container">
<br />
<a href="<?php echo base_url('fungsion/addfol'); ?>" class="w3-button mylink">Tambah Folder</a>
<br />
<br />
	<table class="w3-table-all">
		<tr class="w3-red">
			<th>Nama Folder</th>
			<th>Aksi</th>
		</tr>
		<?php
		$data=$this->db->get('cat_galery');
		foreach ($data->result_array() as $data) {
			?>
			<tr>
				<td><?php echo $data['nama_cat_img'] ?></td>
				<td><a class="mylink" onclick="document.getElementById('modalHapus<?php echo $data['id_cat_img']; ?>').style.display='block'">Hapus</a></td>
				<div id="modalHapus<?php echo $data['id_cat_img']; ?>" class="w3-modal">
				    <div class="w3-modal-content w3-animate-top">
				      <div class="w3-container" style="margin-top: 100px;padding: 10px;">
				        <form action="" method="POST">
				        	<p>Yakin Mau menghapus Folder ?</p>
				        	<input type="test" name="hapusFolder" value="<?php echo $data['id_cat_img']; ?>" style="display: none">
				        	<input type="submit" name="hapus" value="Ya" class="w3-button" style="float:right;color: #f00"><br /><br />
				        	<button class="w3-button" onclick="document.getElementById('modalHapus').style.display='none'" style="float:right">Tidak</button>
				        </form>
				      </div>
				    </div>
				  </div>
				</div>
			</tr>
			<?php
		}
		?>
	</table>
</div>
<?php
	if (isset($_POST['hapus'])) {
				$hapusDb=$this->db->delete('cat_galery', array('id_cat_img' => $_POST['hapusFolder'])); 
			if ($hapusDb) {
				?>
				<script type="text/javascript">document.location='<?php echo base_url('listfol'); ?>'</script>
				<?php
			}
		}	
	?>
	