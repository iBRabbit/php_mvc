<?php 

class Mahasiswa_model {

    private $table = 'mahasiswa';
    private $db;

    public function __construct() {
        $this -> db = new Database;
    }

    public function getAllMahasiswa() {
        $this -> db -> query("SELECT * FROM " . $this -> table);
        return $this -> db -> resultSet();
    }

    public function getMahasiswaByID($id) {
        $this -> db -> query("SELECT * FROM " . $this -> table . " WHERE id =:id"); // untuk simpan data yang akan di binding
        $this -> db -> bind('id', $id);
        return $this -> db -> single();
    }

    public function addMahasiswa($data) {
        $query = "INSERT INTO mahasiswa" . " VALUES ('', :nama, :nim, :email, :jurusan)";

        $this -> db -> query ($query);
        $this -> db -> bind('nama', $data['nama']);
        $this -> db -> bind('nim', $data['nim']);
        $this -> db -> bind('email', $data['email']);
        $this -> db -> bind('jurusan', $data['jurusan']);

        $this -> db -> execute();

        return $this -> db -> rowCount();
    }

}