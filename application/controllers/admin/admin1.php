<?php
class Admin1 extends CI_Controller{
    public function index(){
        $this->load->view('tmp_admin/header');
        $this->load->view('tmp_admin/sidebara');
        $this->load->view('admin/admind');
        $this->load->view('tmp_admin/footer');
    }
    
}

?>