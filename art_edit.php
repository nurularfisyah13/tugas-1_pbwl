<?php 

require_once "inc/Koneksi.php";
require_once "app/Artist.php";
require_once "index.php";

$id = $_GET['id'];
$art = new Artist();

$row = $art->edit($id);
?>

<!-- content -->
<div class="content-tampil">
        <div class="container">
            <div class="box">
                <div class="box-header">
                    Edit Artist
                </div>
                <div class="box-body">
                    <form action="art_proses.php" method="post">
                        <input type="hidden" name="art_id" value="<?php echo $row['art_id']; ?>" class="input-control" required>
                            <div class="form-group">
                                <tr>
                                    <td>NAMA</td>
                                    <td><input type="text" name="art_name" value="<?php echo $row['art_name']; ?>" class="input-control" required></td>
                                </tr>
                            </div>
                            <div class="form-group">
                                <tr>
                                    <td></td>
                                    <td><input type="submit" name="btn_update" value="UPDATE" class="btn btn-blue"></td>
                                </tr>
                    </form>
                </div>
            </div>
        </div>
</div>