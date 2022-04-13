<?php 

class About extends Controller{

    public function index ($nama = 'null', $pekerjaan = 'null') {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['judul'] = 'About Me';
        $this -> view('templates/header', $data);
        $this -> view('about/index', $data); // panggil method view di controller dan kirim data
        $this -> view('templates/footer');
    }

    public function page() {
        $data['judul'] = 'My Pages';
        $this -> view('templates/header', $data);
        $this -> view('about/page');
        $this -> view('templates/footer');
    }
}