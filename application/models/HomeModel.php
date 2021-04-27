<?php

class HomeModel extends CI_Model {

    public function getData() {
        $data = array (
            'Nama' => 'Deny Anwar',
            'Pekerjaan' => 'Web Developer',
            'Perusahaan' => 'Google',
            'Website' => 'http://www.denyanwar.com',
        );

        return $data;
    }

}