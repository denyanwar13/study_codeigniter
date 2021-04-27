<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HelperhtmlController extends CI_Controller {

    function __construct() {
        parent::__construct();
        
        // Memanggil helper html
        $this->load->helper("html");
    }

    function index() {
        // Memanggil HelperhtmlView pada folder views
        $this->load->view("HelperhtmlView");
    }

}