<?php 

require_once "inc/Koneksi.php";
require_once "app/Played.php";
require_once "index.php";

$ply = new Played();
$rows = $ply->tampil();

?>

<!-- content -->
<div class="content-tampil">
        <div class="container">
            <div class="box">
                <div class="box-header">
                    PLAYED
                </div>
                <div class="box-body">
                    <a href="ply_input.php" class="text-green"><i class="fas fa-plus"></i>Tambah</a>

                    <form action="">
                        <div class="input-group">
                            <input type="text" name="key" placeholder="Pencarian">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </form>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>ID TRACK</th>
                                <th>PLAYED</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>

                    <?php foreach ($rows as $row) { ?>
                        <tr>
                            <td><?php echo $row['ply_id']; ?></td>
                            <td><?php echo $row['ply_id_track']; ?></td>
                            <td><?php echo $row['ply_played']; ?></td>
                            <td>
                                <a href="ply_edit.php?id=<?php echo $row['ply_id']; ?>" class="text-orange"><i class="fas fa-edit"></i></a> |
                                <a href="ply_delete.php?id=<?php echo $row['ply_id']; ?>" class="text-red"><i class="fas fa-times"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                    </table>
                </div>
            </div>
        </div>
</div>  

<!-- footer -->
<div class="footer">
    <p>Copyright &copy; K-POP MUSIC All Rights reserved 2021</p>
</div>
