<?php 

class Artist extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_artist";
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
        $art_name = $_POST['art_name'];

        $sql = "INSERT INTO tb_artist (art_name) VALUES (:art_name)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":art_name", $art_name);
        $stmt->execute();

    }

    public function edit($id)
    {
        
        $sql = "SELECT * FROM tb_artist WHERE art_id=:art_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":art_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $art_name = $_POST['art_name'];
        $art_id = $_POST['art_id'];

        $sql = "UPDATE tb_artist SET art_name=:art_name WHERE art_id=:art_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":art_name", $art_name);
        $stmt->bindParam(":art_id", $art_id);
        $stmt->execute();

    }

    public function delete($id)
    {
        
        $sql = "DELETE FROM tb_artist WHERE art_id=:art_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":art_id", $id);
        $stmt->execute();

    }

}

