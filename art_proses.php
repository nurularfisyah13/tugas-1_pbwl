<?php 

require_once "inc/Koneksi.php";
require_once "app/Artist.php";

$art = new Artist();

if (isset($_POST['btn_simpan'])) {
    $art->simpan();
    header("location:art_tampil.php");
}

if (isset($_POST['btn_update'])) {
    $art->update();
    header("location:art_tampil.php");
}

?>