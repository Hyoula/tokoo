<?php
    class Kategori extends CI_Controller
    {
        public function casual()
        {
            $data['casual']=$this->model_kategori->data_casual()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('templates/sidebar2');
            $this->load->view('templates/casual2', $data);
            $this->load->view('templates/footer');
        }
        
        public function cool()
        {
            $data['cool']=$this->model_kategori->data_cool()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('templates/sidebar2');
            $this->load->view('templates/cool', $data);
            $this->load->view('templates/footer');
        }
        public function formal()
        {
            $data['formal']=$this->model_kategori->data_formal()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('templates/sidebar2');
            $this->load->view('templates/formal', $data);
            $this->load->view('templates/footer');
        }
        public function sport()
        {
            $data['sport']=$this->model_kategori->data_sport()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('templates/sidebar2');
            $this->load->view('templates/sport', $data);
            $this->load->view('templates/footer');
        }
    }
?>