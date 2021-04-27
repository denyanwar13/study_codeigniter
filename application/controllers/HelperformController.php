<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HelperformController extends CI_Controller {

    function __construct() {
        parent::__construct();

        // Memanggil helper form
        $this->load->helper('form');
    }

    function index() {
        // Memanggil HelperformView pada folder views
        $this->load->view("HelperformView");
    }

}