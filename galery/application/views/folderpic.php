<!-- Header -->
<div class="header" id="myHeader">
  <button class="btn" onclick="one()">1</button>
  <a href="<?php echo base_url()."allpic/folderpic/$whereFolder" ?>"><button class="btn">2</button></a>
  <button class="btn" onclick="four()">4</button>
</div>

<!-- Photo Grid -->
<div class="row" style="margin:0;padding: 0"> 
<?php
$query_bg=$this->db->query('SELECT * FROM galery JOIN cat_galery ON galery.cat_img=cat_galery.id_cat_img WHERE nama_cat_img="'.$whereFolder.'" ORDER BY id_img DESC');foreach($query_bg->result_array() as $dataBg){
?>
  <a href="<?php echo base_url('showpic/img/'.$dataBg['id_img']) ?>">
  <div class="column box-img" style="background: url(<?php echo base_url().'img/'.$dataBg['nama_img']; ?>);background-size: cover;">
  </div>
  </a>
<?php } ?>
</div>

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
        elements[i].style.msFlex = "24vw";  // IE10
        elements[i].style.flex = "24vw";
        elements[i].style.width="24vw";
        elements[i].style.height="24vw";
    }
}
</script>