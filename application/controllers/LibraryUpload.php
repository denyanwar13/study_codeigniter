<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LibraryUpload extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    function index() {
        $error = "";
        $data = "";

        // Setting konfigurasi upload
        $config['upload_path'] = './images/';
        $config['allowed_types'] = 'gif|jpg|png';

        // Load library upload
        $this->load->library('upload', $config);

        // Melakukan pengecekan jika upload gambar gagal
        if (!$this->upload->do_upload('gambar')) {
            $error = $this->upload->display_errors();
        } else {
            // Jika upload gambar berhasil
            $data = $this->upload->data();
        }

        $this->load->view("LibraryUploadView", array('error' => $error,
                                                     'data' => $data));
    }

}