<?php
	class Ajaxsearch extends CI_Controller{
		function index()
 {
  $this->load->view('search');
 }

 function fetch()
 {
  $output = '';
  $query = '';
  $this->load->model('ajaxsearch_model');
  if($this->input->post('query'))
  {
   $query = $this->input->post('query');
  }
  $data = $this->ajaxsearch_model->fetch_data($query);
  $output .= '
  <div class="container">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <div class="col mb-4">
              <div class="card h-100">
                <img src="<?php echo base_url().'/assets/img/casual/'.$brg->gambar?>" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title"><b><?php echo $brg->nm_brg?></b></h5>
                  <p class="card-text"><span class="badge badge-warning">Rp. <?php echo number_format($brg->harga, 0,',','.')?></span></p>
                  <h6><?php echo $brg->merek?></h6>
              </div>
            </div>
          </div>
        </div>
  ';
  if($data->num_rows() > 0)
  {
   foreach($data->result() as $row)
   {
    $output .= '
      
              <div class="flip-card-back">
                <h2 style=" margin-top:15px;margin-bottom:-3px;" ><?php echo $brg->merek?></h2> 
                <p style="margin-bottom:-3px;" ><?php echo $brg->warna?></p> 
                <p style="margin-bottom:5px;" ><?php echo $brg->nm_brg?></p>
                <span class="badge badge-secondary">Rp 320.000,00</span>
                <p style="font-size: 30px;margin-top:-5px;"><span class="badge badge-success btn-">Rp. <?php echo number_format($brg->harga, 0,',','.')?></span></p>
                  <p style="font-weight:bold; margin-bottom:-1px; margin-top:-10px;">Size :</p>
                <div class="btn btn-group btn-group-toggle mb-3" data-toggle="buttons">
                  <label style="margin-left: 3px; margin-right:3px;" class="btn btn-secondary">
                    <input type="radio" name="size" id="size" value="39"> 39
                  </label>
                  <label style="margin-left: 3px; margin-right:3px;" class="btn btn-secondary">
                    <input type="radio" name="size" id="size" value="40"> 40
                  </label>
                  <label style="margin-left: 3px; margin-right:3px;" class="btn btn-secondary">
                    <input type="radio" name="size" id="size" value="41"> 41
                  </label>
                  <label style="margin-left: 3px; margin-right:3px;" class="btn btn-secondary">
                    <input type="radio" name="size" id="size" value="42"> 42
                  </label>
                </div>
                <?php echo anchor('toko/keranjang/'.$brg->id, '<div style="margin-top:-5px;" class="btn btn-primary">Buy Me</div>')?></td>
                
              </div>
    </div>
  </div></div>
    ';
   }
  }
  else
  {
   $output .= '<tr>
       <td colspan="5">No Data Found</td>
      </tr>';
  }
  $output .= '</table>';
  echo $output;
 }
 
}
	}
?>
