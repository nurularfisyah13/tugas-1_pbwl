<?php 

class Played extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_played";
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
        $ply_id_track = $_POST['ply_id_track'];
        $ply_played = $_POST['ply_played'];

        $sql = "INSERT INTO tb_played (ply_id-track, ply_played) VALUES (:ply_id_track, :ply_played)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":ply_id_track", $ply_id_track);
        $stmt->bindParam(":ply_played", $ply_played);
        $stmt->execute();

    }

    public function edit($id)
    {
        
        $sql = "SELECT * FROM tb_played WHERE ply_id=:ply_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":ply_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $ply_id_track = $_POST['ply_id_track'];
        $ply_played = $_POST['ply_played'];
        $ply_id = $_POST['ply_id'];

        $sql = "UPDATE tb_played SET ply_id_track=:ply_id_track, ply_played=:ply_played WHERE ply_id=:ply_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":ply_id_track", $ply_id_track);
        $stmt->bindParam(":ply_played", $ply_played);
        $stmt->bindParam(":ply_id", $ply_id);
        $stmt->execute();

    }

    public function delete($id)
    {
        
        $sql = "DELETE FROM tb_played WHERE ply_id=:ply_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":ply_id", $id);
        $stmt->execute();

    }

}

