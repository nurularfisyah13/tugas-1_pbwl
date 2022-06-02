<?php 

require_once "inc/Koneksi.php";
require_once "app/Played.php";
require_once "index.php";

$id = $_GET['id'];
$ply = new Played();

$row = $ply->edit($id);
?>

<!-- content -->
<div class="content-tampil">
        <div class="container">
            <div class="box">
                <div class="box-header">
                    Edit Played
                </div>
                <div class="box-body">
                    <form action="ply_proses.php" method="post">
                        <input type="hidden" name="ply_id" value="<?php echo $row['ply_id']; ?>">
                            <div class="form-group">
                                <tr>
                                    <td>ID TRACK</td>
                                    <td><input type="text" name="ply_id_track" value="<?php echo $row['ply_id_track']; ?>" class="input-control" required></td>
                                </tr>
                            </div>
                            <div class="form-group">
                                <tr>
                                    <td>PLAYED</td>
                                    <td><input type="text" name="ply_played" value="<?php echo $row['ply_played']; ?>" class="input-control" required></td>
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