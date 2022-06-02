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
                    Tambah Played
                </div>
                <div class="box-body">
                    <form action="ply_proses.php" method="post">
                        <div class="form-group">
                            <tr>
                                <td>ID TRACK</td>
                                <td><input type="text" name="ply_id_track" class="input-control" required></td>
                            </tr>
                        </div>
                        <div class="form-group">
                            <tr>
                                <td>PLAYED</td>
                                <td><input type="text" name="ply_played" class="input-control" required></td>
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