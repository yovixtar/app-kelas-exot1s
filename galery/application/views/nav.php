<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/w3.css' ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/my.css' ?>">
<style>
body{
  padding: 0;
  margin: 0;
}
.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.active {
  background-color: <?php echo $this->config->item('primary_color') ?>;
  color: white;
}

.topnav .icon {
  display: none;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

.box-img {
  width: 48vw;
    display: inline-grid;
  height: 48vw;
  margin: 0;
  padding: 0;
  position:relative;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
}
.name-img{
  bottom: 5px;
  left:5px;
  position:absolute; 
  font-size: 30px;
  color: #fff;
}
.jumlah-img{
  bottom: 5px;
  right:20px;
  position:absolute; 
  font-size: 30px;
  color: #fff;
}
.div-caption{
  width: 90%;
  box-shadow:0 8px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  background-color: #fff;
  border-radius: 5px;
  padding: 10px;
  margin:10px auto;
  font-family: comic sans ms;
  text-align: center;
  font-size: 20px;
}

* {
    box-sizing: border-box;
}

.header {
    text-align: center;
    padding: 10px;
}

.row {
    display: -ms-flexbox; /* IE 10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE 10 */
    flex-wrap: wrap;
    padding: 0 4px;
}

/* Create two equal columns that sits next to each other */
.column {
    -ms-flex: 50%; /* IE 10 */
    flex: 50%;
    padding: 0 4px;
}

.column img {
    margin-top: 8px;
    vertical-align: middle;
}

/* Style the buttons */
.btn {
    border: none;
    outline: none;
    padding: 10px 16px;
    background-color: #f1f1f1;
    cursor: pointer;
    font-size: 18px;
}

.btn:hover {
    background-color: #ddd;
}

.accordion {
    background-color: #000;
    color: #000;
    cursor: pointer;
    padding: 10px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

.active_accordion, .accordion:hover {
    background-color: <?php echo $this->config->item('primary_color') ?>;
}

.panel_accordion {
    padding: 0 18px;
    display: none;
    background-color: white;
    overflow: hidden;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style>
<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
</head>
<body>
<!--Mobile-->
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="<?php echo base_url('fungsion/addimg/') ?>">Tambah Foto</a>
  <a href="<?php echo base_url('listfol/') ?>">Daftar Folder</a>
  <a href="#">b</a>
</div>

<!--Dekstop-->
<div class="topnav" id="myTopnav">
  <a href="<?php echo base_url(); ?>" class="active">EXOT1S App</a>
  <a href="<?php echo base_url('fungsion/addimg/') ?>">Tambah Foto</a>
  <a href="<?php echo base_url('listfol/') ?>">Daftar Folder</a>
  <a href="#">b</a> 
  <a style="cursor:pointer" class="icon" onclick="openNav()">&#9776;</a>
</div>

<script type="text/javascript">
  function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.body.style.backgroundColor = "white";
}
</script>