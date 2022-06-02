<?php 

require_once "inc/Koneksi.php";
require_once "app/Track.php";
require_once "index.php";

$id = $_GET['id'];
$trc = new Track();

$row = $trc->edit($id);
?>

<!-- content -->
<div class="content-tampil">
        <div class="container">
            <div class="box">
                <div class="box-header">
                    Edit Track
                </div>
                <div class="box-body">
                    <form action="trc_proses.php" method="post">
                        <input type="hidden" name="trc_id" value="<?php echo $row['trc_id']; ?>">
                            <div class="form-group">
                                <tr>
                                    <td>NAMA</td>
                                    <td><input type="text" name="trc_name" value="<?php echo $row['trc_name']; ?>" class="input-control" required></td>
                                </tr>
                            </div>
                            <div class="form-group">
                                <tr>
                                    <td>ID ALBUM</td>
                                    <td><input type="text" name="trc_id_album" value="<?php echo $row['trc_id_album']; ?>" class="input-control" required></td>
                                </tr>
                            </div>
                            <tr>
                                <td></td>
                                <td><input type="submit" name="btn_update" value="UPDATE" class="btn btn-blue"></td>
                            </tr>
                    </form>
            </div>
        </div>
    </div>
</div>