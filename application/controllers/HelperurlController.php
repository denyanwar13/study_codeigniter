<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HelperurlController extends CI_Controller {

    function __construct() {
        parent::__construct();

        // Memanggil helper url
        $this->load->helper("url");
    }

    function index() {
        // Memanggil HelperurlView pada folder views
        $this->load->view("HelperurlView");
    }

}