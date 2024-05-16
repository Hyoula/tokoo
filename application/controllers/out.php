<?php
class Out extends CI_Controller{
    public function login(){
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
        if($this->form_validation->run()==FALSE){
            $this->load->view('templates/header');
            $this->load->view('form_login');
		    $this->load->view('templates/footer');
        }else{
            $out=$this->model_out->cek_login();
            if($out==FALSE){
                $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Holy guacamole!</strong> Username atau Password anda salah!!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('out/login');
            }else{
                $this->session->set_userdata('username',$out->username);
                $this->session->set_userdata('role_id',$out->role_id);
                switch($out->role_id){
                    case 1 : redirect('admin/admin1');break;
                    case 2 : redirect('toko/casuall');break;
                    default : break;
                }
            }
        }
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('toko/index');
    }
}
?>
