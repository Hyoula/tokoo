<div style="margin-top:20px;"class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Formal</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>
  <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
      <div class="carousel-item active" data-interval="10000">
      <img src="<?php echo base_url()?>assets/img/casual/redback-1080x400.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item" data-interval="2000">
      <img src="<?php echo base_url()?>assets/img/casual/Rieker-Remonte-Winter-2019-1080x400.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item">
      <img src="<?php echo base_url()?>assets/img/casual/Posts_image_persistantpain-1080x400.jpg" class="d-block w-100" >
      </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
  </a>
  </div>
    <!-- Content Row -->
    <div class="container-fluid"><center>
    <h2 style="margin-top:50px;">CHECK ME</h2>
    <div class="iki">
    <div class="row text-center row-cols-1 row-cols-md-3">
      <?php foreach ($formal as $brg) : ?>
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
  <?php endforeach;?>
  </div>
  </div></center>
  </div>