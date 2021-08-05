<?php
Class MyDb {
    public function __construct()
    {
        $host = "localhost";
        $dbname = "db";
        $username = "root";
        $password = "";
        //metode PDO
        $this->db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
    }
    public function show()
    {
        $query = $this->db->prepare("SELECT * FROM warga");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }
    public function add_data($no_ktp,$nama,$alamat,$no_hp)
    {
        $data = $this->db->prepare('INSERT INTO warga (no_ktp,nama,alamat,no_hp) VALUES (?, ?, ?, ?)');
        
        $data->bindParam(1, $no_ktp);
        $data->bindParam(2, $nama);
        $data->bindParam(3, $alamat);
        $data->bindParam(4, $no_hp);

        $data->execute();
        return $data->rowCount();
    }
    public function get_by_id($id_warga){
        $query = $this->db->prepare("SELECT * FROM warga where id=?");
        $query->bindParam(1, $id_warga);
        $query->execute();
        return $query->fetch();
    }
    public function delete($id_warga)
    {
        $query = $this->db->prepare("DELETE FROM warga where id=?");
        $query->bindParam(1, $id_warga);
        $query->execute();
        return $query->rowCount();
    }
}
// var_dump("no errror");

?>
