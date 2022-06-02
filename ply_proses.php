<?php 

require_once "inc/Koneksi.php";
require_once "app/Played.php";

$ply = new Played();

if (isset($_POST['btn_simpan'])) {
    $ply->simpan();
    header("location:ply_tampil.php");
}

if (isset($_POST['btn_update'])) {
    $ply->update();
    header("location:ply_tampil.php");
}

?>