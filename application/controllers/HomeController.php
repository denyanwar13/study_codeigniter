<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

    function index() {
        // Memanggil HomeModel.php pada folder models
        $this->load->model("HomeModel");
        $tampilData = $this->HomeModel->getData();

        // Memanggil HomeView.php pada folder views
        $this->load->view("HomeView", array("tampilData" => $tampilData));
    }

}