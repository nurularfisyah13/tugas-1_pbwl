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
                    Tambah Artist
                </div>
                <div class="box-body">
                    <form action="art_proses.php" method="post" class="input-control" required>
                        <div class="form-group">
                            <tr>
                                <td>NAMA</td>
                                <td><input type="text" name="art_name" class="input-control" required></td>
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