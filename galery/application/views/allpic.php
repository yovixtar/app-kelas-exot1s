<!-- Header -->
<div class="header" id="myHeader">
  <button class="btn" onclick="one()">1</button>
  <a href="<?php echo base_url('allpic/all') ?>"><button class="btn">2</button></a>
  <button class="btn" onclick="four()">4</button>
</div>

<!-- Photo Grid -->
<center>
<div class="row" style="margin:0;padding: 0;"> 
<center>
<?php
$query_bg=$this->db->query('SELECT * FROM galery ORDER BY id_img DESC');foreach($query_bg->result_array() as $dataBg){
?>
  <a href="<?php echo base_url('showpic/img/'.$dataBg['id_img']) ?>">
  <div class="column box-img" style="width:46.5vw;background: url(<?php echo base_url().'img/'.$dataBg['nama_img']; ?>);background-size: cover;">
  </div>
  </a>
<?php } ?>
</center>
</div>
</center>

<script>
// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;

// Full-width images
function one() {
    for (i = 0; i < elements.length; i++) {
        elements[i].style.msFlex = "100vw";  // IE10
        elements[i].style.flex = "100vw";
        elements[i].style.width="100vw";
        elements[i].style.height="100vw";
    }
}


// Four images side by side
function four() {
    for (i = 0; i < elements.length; i++) {
        elements[i].style.msFlex = "23.5vw";  // IE10
        elements[i].style.flex = "23.5vw";
        elements[i].style.width="23.5vw";
        elements[i].style.height="23.5vw";
    }
}
</script>