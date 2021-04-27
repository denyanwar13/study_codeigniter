<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HelpercustomizeController extends CI_Controller {

    function __construct() {
        parent::__construct();

        // Memanggul helper customize
        $this->load->helper('customize');
    }

    function index() {
        // Memanggil HelpercustomizeView pada folder views
        $this->load->view("HelpercustomizeView");
    }
}