<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LibraryTable extends CI_Controller {

    public function index() {
        // Meload library table
        $this->load->library('table');

        // Setting tampilan table
        $template = array('table_open' => '<table border="1px" cellpadding="10px" cellspacing="2px">');
        $this->table->set_template($template);
        
        // Data yang dimasukan ke dalam table
        $this->table->set_heading('GGI', 'Name', 'Division', 'Position');
        $this->table->add_row(array('J0396523', 'Deny Anwar', 'Information System Technology', 'Senior Programmer'));

        // Memanggil LibrarytableView, untuk menampilkan table
        $this->load->view("LibrarytableView");
    }

}