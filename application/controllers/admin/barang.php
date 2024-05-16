<?php 
    class Barang extends CI_Controller{
        public function index(){
            $data['barang']=$this->model_barang->tampil_data()->result();
            $this->load->view('tmp_admin/header');
            $this->load->view('tmp_admin/sidebara');
            $this->load->view('admin/barang', $data);
            $this->load->view('tmp_admin/footer');
        }
        public function tambah_aksi(){
            $nm_brg = $this->input->post('nm_brg');
            $kategori = $this->input->post('kategori');
            $size = $this->input->post('size');
            $harga = $this->input->post('harga');
            $merek = $this->input->post('merek');
            $warna = $this->input->post('warna');
            $stok = $this->input->post('stok');
            $gambar = $_FILES['gambar'];
            if($gambar=''){}
            else{
                $config['upload_path'] = './assets/img/casual';
                $config['allowed_types'] ='jpg|png|jpeg';
                
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('gambar')){
                    echo "Upload Gagal"; die();
                }else{
                    $gambar = $this->upload->data('file_name');
                }
            }

            $data = array(
                'nm_brg'=> $nm_brg,
                'kategori'=> $kategori,
                'size'=> $size,
                'harga'=> $harga,
                'merek'=> $merek,
                'warna'=> $warna,
                'stok'=> $stok,
                'gambar'=> $gambar,
            );

            $this->model_barang->input_data($data, 'brg');
            redirect('admin/barang/index');
        }
        
        public function hapus($id){
            $where = array('id' => $id);
            $this->model_barang->hapus_data($where, 'brg');
            redirect('admin/barang/index');
        }
    public function edit($id){
        $where = array('id' => $id);
        $data['barang'] = $this->model_barang->edit_data($where, 'brg')->result();
        $this->load->view('tmp_admin/header');
		$this->load->view('tmp_admin/sidebara');
		$this->load->view('admin/edit', $data);
		$this->load->view('tmp_admin/footer');
    }
    public function update(){
        $id = $this->input->post('id');
        $nm_brg = $this->input->post('nm_brg');
        $kategori = $this->input->post('kategori');
        $size = $this->input->post('size');
        $harga = $this->input->post('harga');
        $merek = $this->input->post('merek');
        $warna = $this->input->post('warna');
        $stok = $this->input->post('stok');

       $data = array(
            'nm_brg'=> $nm_brg,
            'kategori'=> $kategori,
            'size'=> $size,
            'harga'=> $harga,
            'merek'=> $merek,
            'warna'=> $warna,
            'stok'=> $stok
        );
        $where = array(
            'id'=> $id
        );
        $this->model_barang->update_data($where,$data, 'brg');
        redirect('admin/barang/index');
    }
        public function detail($id){
            $this->load->model('model_barang');
            $detail = $this->model_barang->detail_data($id);
            $data['detail'] = $detail;
            $this->load->view('tmp_admin/header');
            $this->load->view('tmp_admin/sidebara');
            $this->load->view('admin/detail', $data);
            $this->load->view('tmp_admin/footer');
        }
        
        public function print(){
            $data['barang'] = $this->model_barang->tampil_data()->result();

            $this->load->view('admin/print', $data);
        }
    }
?>
