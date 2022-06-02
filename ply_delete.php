<?php 

require_once "inc/Koneksi.php";
require_once "app/Played.php";

$id = $_GET['id'];

$ply = new Played();
$rows = $ply->delete($id);

?>

Data berhasil dihapus!

<a href="ply_tampil.php">Kembali</a>