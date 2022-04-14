<?php  

class Mahasiswa extends Controller {
    public function index () {
        $data['judul'] = 'Data Mahasiswa';
        $data['mhs'] = $this -> model('Mahasiswa_model') -> getAllMahasiswa();
        $this -> view('templates/header', $data);
        $this -> view('mahasiswa/index', $data);
        $this -> view('templates/footer');
    }

    public function detail($id) {
        $data['judul'] = 'Detail Mahasiswa';
        $data['mhs'] = $this -> model('Mahasiswa_model') -> getMahasiswaByID($id);
        $this -> view('templates/header', $data);
        $this -> view('mahasiswa/detail', $data);
        $this -> view('templates/footer');
    }

    public function add() {
        $data['judul'] = 'Tambah Mahasiswa';
        var_dump($_POST);
        if($this -> model ('Mahasiswa_model') -> addMahasiswa($_POST) > 0) {
            // $test = 'Location:' . BASE_URL ;
            header( 'Location:' . BASE_URL . 'mahasiswa');
            exit;
        }

    }
}