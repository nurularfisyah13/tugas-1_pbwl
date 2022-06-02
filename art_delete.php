<?php 

require_once "inc/Koneksi.php";
require_once "app/Artist.php";

$id = $_GET['id'];

$art = new Artist();
$rows = $art->delete($id);

?>

Data berhasil dihapus!

<a href="art_tampil.php">Kembali</a>