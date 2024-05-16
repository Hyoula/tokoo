<?php
class Toko extends CI_Controller{
    public function index(){
        
         $this->load->library('session');

        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
        $this->load->view('toko');
		$this->load->view('templates/footer');
    }
	public function search(){
		$keyword=$this->input->post('keyword');
		$data['barang']=$this->model_barang->get_keyword($keyword);
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
        $this->load->view('templates/sidebar2');
        $this->load->view('templates/casual', $data);
		$this->load->view('templates/footer');
	}

    public function casuall(){
        $data['barang']=$this->model_barang->tampil_data()->result();
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
        $this->load->view('templates/sidebar2');
        $this->load->view('templates/casual', $data);
		$this->load->view('templates/footer');
    }
    public function cooll(){
        $data['barang']=$this->model_barang->tampil_data()->result();
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
        $this->load->view('templates/sidebar2');
        $this->load->view('templates/cool', $data);
		$this->load->view('templates/footer');
    }
    public function formall(){
        $data['barang']=$this->model_barang->tampil_data()->result();
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
        $this->load->view('templates/sidebar2');
        $this->load->view('templates/formal', $data);
		$this->load->view('templates/footer');
    }
    public function keranjang($id){
        $barang = $this->model_barang->find($id);

        $data = array(
        'id'      => $barang->id,
        'price'   => $barang->harga,
        'qty'     => 1,
        'name'    => $barang->nm_brg,
        );

        $this->cart->insert($data);
        redirect('toko/casuall');
    }
    public function hapus_krj(){
        $this->cart->destroy();
        redirect('toko/casuall');
    }
    public function bayar(){
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
        $this->load->view('templates/sidebar2');
        $this->load->view('mbayar');
		$this->load->view('templates/footer');
    }
    public function pesan(){
        $proses=$this->model_invoice->index();
        if($proses){
        $this->cart->destroy();
        redirect('toko/index');   
        }else{
            echo "Maaf, Pesanan anda gagal diproses";
        }
    }
}
?>
