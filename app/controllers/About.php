<?php 

class About {

    public function index ($nama = 'null', $pekerjaan = 'null') {
        echo "Hello nama saya $nama, pekerjaan $pekerjaan";
    }

    public function page() {
        echo 'About/page';
    }
}