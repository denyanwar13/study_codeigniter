<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HelpernumberController extends CI_Controller {

    function __construct() {
        parent::__construct();
        // Memanggil helper number
        $this->load->helper("number");
    }

    function index() {
        // Memanggil HelpernumberView pada folder views
        $this->load->view("HelpernumberView");
    }

}