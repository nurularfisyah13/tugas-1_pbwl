<?php 

require_once "inc/Koneksi.php";
require_once "app/Album.php";
require_once "index.php";

?>

<!-- content -->
<div class="content-tampil">
        <div class="container">
            <div class="box">
                <div class="box-header">
                    Tambah Album
                </div>
                <div class="box-body">
                    <form action="alb_proses.php" method="post">
                        <div class="form-group">
                            <tr>
                                <td>ID ARTIS</td>
                                <td><input type="text" name="alb_id_artist" class="input-control" required></td>
                            </tr>
                        </div>
                        <div class="form-group">
                            <tr>
                                <td>NAMA</td>
                                <td><input type="text" name="alb_name" class="input-control" required></td>
                            </tr>
                        </div>
                            <tr>
                                <td></td>
                                <td><input type="submit" name="btn_simpan" value="SIMPAN" class="btn btn-blue"></td>
                            </tr>
                    </form>
                </div>
            </div>
        </div>
</div>

