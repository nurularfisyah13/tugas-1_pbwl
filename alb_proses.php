<?php 

require_once "inc/Koneksi.php";
require_once "app/Album.php";

$alb = new Album();

if (isset($_POST['btn_simpan'])) {
    $alb->simpan();
    header("location:alb_tampil.php");
}

if (isset($_POST['btn_update'])) {
    $alb->update();
    header("location:alb_tampil.php");
}

?>