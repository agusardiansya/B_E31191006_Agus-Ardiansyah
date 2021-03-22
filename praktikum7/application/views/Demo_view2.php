<?php
class Demo_view2  extend CI_Controller{
    public function ___construct(){
        parent : : ___construct();
        $this->load->helper('url')
    }
    public function index(){
        $this->load->view('Demoview');
    }
}
?>