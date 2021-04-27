<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LibraryInput extends CI_Controller {

    function index() {
        if($this->input->method() == "POST") {
            echo"Nama :" . $this->input->post("nama");
            echo"Email :" . $this->input->post("email");
            echo"Komentar :" . $this->input->post("komentar");
        }

        // Memanggil LibraryinputView pada folder views
        $this->load->view("LibraryinputView");
    }

}