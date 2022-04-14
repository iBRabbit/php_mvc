<?php

class Groups extends Controller{ 

    public function index($groupname = 'test') {
        $data['judul'] = 'My Groups';
        $data['groupname'] = $groupname;
        $this -> view('templates/header', $data);
        $this -> view('groups/index', $data);
        $this -> view('templates/footer');
    }

}
