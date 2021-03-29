<?php
if ( ! defined('BASEPATH')) exit('No direct script access
allowed');
class Angkatan extends CI_Controller {
    public function index()
    {
        $this->load->view('view_angkatan');
    }
}
?>