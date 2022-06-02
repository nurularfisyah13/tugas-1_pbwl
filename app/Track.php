<?php 

class Track extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_track";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function simpan()
    {
        $trc_name = $_POST['trc_name'];
        $trc_id_album = $_POST['trc_id_album'];

        $sql = "INSERT INTO tb_track (trc_name, trc_id_album) VALUES (:trc_name, :trc_id_album)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":trc_name", $trc_name);
        $stmt->bindParam(":trc_id_album", $trc_id_album);
        $stmt->execute();

    }

    public function edit($id)
    {
        
        $sql = "SELECT * FROM tb_track WHERE trc_id=:trc_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":trc_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $trc_name = $_POST['trc_name'];
        $trc_id_album = $_POST['trc_id_album'];
        $trc_id = $_POST['trc_id'];

        $sql = "UPDATE tb_track SET trc_name=:trc_name, trc_id_album=:trc_id_album WHERE trc_id=:trc_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":trc_name", $trc_name);
        $stmt->bindParam(":trc_id_album", $trc_id_album);
        $stmt->bindParam(":trc_id", $trc_id);
        $stmt->execute();

    }

    public function delete($id)
    {
        
        $sql = "DELETE FROM tb_track WHERE trc_id=:trc_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":trc_id", $id);
        $stmt->execute();

    }

}

