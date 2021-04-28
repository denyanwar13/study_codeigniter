<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LibrarySession extends CI_Controller {

    public function index() {
        // Loading session library
        $this->load->library('session');

        // Adding data to session
        $this->session->set_userdata('username', 'denyanwar');
        $this->session->set_userdata('password', '123456');
        $this->session->set_userdata('name', 'Deny Anwar');

        // Memanggil LibrarysessionView, untuk menampilkan data session
        $this->load->view("LibrarysessionView");
    }

}