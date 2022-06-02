<?php 

require_once "inc/Koneksi.php";
require_once "app/Album.php";
require_once "index.php";

$id = $_GET['id'];
$alb = new Album();

$row = $alb->edit($id);
?>

    <!-- content -->
    <div class="content-tampil">
        <div class="container">
            <div class="box">
                <div class="box-header">
                    Edit Album
                </div>
                <div class="box-body">
                    <form action="alb_proses.php" method="post">
                        <input type="hidden" name="alb_id" value="<?php echo $row['alb_id']; ?>">
                            <div class="form-group">
                                <tr>
                                    <td>ID ARTIST</td>
                                    <td><input type="text" name="alb_id_artist" value="<?php echo $row['alb_id_artist']; ?>" class="input-control" required></td>
                                </tr>
                            </div>
                            <div class="form-group">
                                <tr>
                                    <td>NAMA</td>
                                    <td><input type="text" name="alb_name" value="<?php echo $row['alb_name']; ?>" class="input-control" required></td>
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
