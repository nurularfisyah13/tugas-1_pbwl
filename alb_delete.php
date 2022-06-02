<?php 

require_once "inc/Koneksi.php";
require_once "app/Album.php";


$id = $_GET['id'];

$alb = new Album();
$rows = $alb->delete($id);

?>

Data berhasil dihapus!

<a href="alb_tampil.php">Kembali</a>