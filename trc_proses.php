<?php 

require_once "inc/Koneksi.php";
require_once "app/Track.php";

$trc = new Track();

if (isset($_POST['btn_simpan'])) {
    $trc->simpan();
    header("location:trc_tampil.php");
}

if (isset($_POST['btn_update'])) {
    $trc->update();
    header("location:trc_tampil.php");
}

?>