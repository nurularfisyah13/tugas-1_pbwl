<?php 

require_once "inc/Koneksi.php";
require_once "app/Album.php";
require_once "index.php";

$alb = new Album();
$rows = $alb->tampil();

?>

<!-- content -->
<div class="content-tampil">
        <div class="container">
            <div class="box">
                <div class="box-header">
                    ALBUM
                </div>
                <div class="box-body">
                    <a href="alb_input.php" class="text-green"><i class="fas fa-plus"></i>Tambah</a>

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
                                <th>ID ARTIST</th>
                                <th>NAMA</th>
                                <th>AKSI</th>
                            </tr>   
                        </thead>

                    <?php foreach ($rows as $row) { ?>
                        <tr>
                            <td><?php echo $row['alb_id']; ?></td>
                            <td><?php echo $row['alb_id_artist']; ?></td>
                            <td><?php echo $row['alb_name']; ?></td>
                            <td>
                                <a href="alb_edit.php?id=<?php echo $row['alb_id']; ?>" title="Edit Data" class="text-orange"><i class="fas fa-edit"></i></a> |
                                <a href="alb_delete.php?id=<?php echo $row['alb_id']; ?>" onclick="return confirm('Yakin ingin hapus ?')" title="Hapus Data" class="text-red"><i class="fas fa-times"></i></a>
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


