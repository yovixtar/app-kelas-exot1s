
<div class="" style="width: 100vw;padding: 0">
  <div class="w3-row" style="width: 100vw;">
    <a href="javascript:void(0)" onclick="openforv(event, 'foto');">
      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding w3-border-red" style="width: 50vw;text-align: center;">Foto</div>
    </a>
    <a href="javascript:void(0)" onclick="openforv(event, 'video');">
      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding" style="width: 50vw;text-align: center;">Video</div>
    </a>
  </div>

  <div id="foto" class="forv" style="display:block;padding: 0">
    <center>
    <?php
    $query_all=$this->db->query('SELECT COUNT(id_img) as jumlahAll FROM galery');
    foreach ($query_all->result() as $jumlahSemua) {
      ?>
      <a href="<?php echo base_url().'allpic/all' ?>">
          <div class="box-img" style="background: url(img/<?php $query_bg=$this->db->query('SELECT * FROM galery ORDER BY id_img DESC limit 1');foreach($query_bg->result_array() as $dataBg){echo $dataBg['nama_img'];} ?>);background-size: cover;width: 100vw">
            <div class="name-img">All</div>
            <div class="jumlah-img"><?php echo $jumlahSemua->jumlahAll ?></div>
          </div>
      </a>
          <?php
        }
          $query = $this->db->query('SELECT *,COUNT(id_img) as jumlahImg FROM galery g JOIN cat_galery cg ON g.cat_img=cg.id_cat_img GROUP BY cat_img ORDER BY id_cat_img DESC');
          foreach ($query->result_array() as $data) {
          ?>
          <a href="<?php echo base_url().'allpic/folderpic/'.$data['nama_cat_img'] ?>">
          <div class="box-img" style="background: url(img/<?php $query_bg=$this->db->query('SELECT * FROM galery where cat_img='.$data['cat_img'].' ORDER BY id_img DESC limit 1');foreach($query_bg->result_array() as $dataBg){echo $dataBg['nama_img'];} ?>);background-size: cover;">
            <div class="name-img"><?php echo $data['nama_cat_img'] ?></div>
            <div class="jumlah-img"><?php echo $data['jumlahImg'] ?></div>
          </div>
          </a>
      <?php
      }
    ?>
    </center>
  </div>

  <div id="video" class="w3-container forv" style="display:none;padding: 0">
    <h2>Paris</h2>
    <p>Paris is the capital of France.</p> 
  </div>
</div>

<script>
function openforv(evt, fileGalery) {
  var i, x, tablinks;
  x = document.getElementsByClassName("forv");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-border-red", "");
  }
  document.getElementById(fileGalery).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-border-red";
}
</script>