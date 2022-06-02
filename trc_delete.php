<?php 

require_once "inc/Koneksi.php";
require_once "app/Track.php";

$id = $_GET['id'];

$trc = new Track();
$rows = $trc->delete($id);

?>

Data berhasil dihapus!

<a href="trc_tampil.php">Kembali</a>