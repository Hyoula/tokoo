<body id="page-top">
    <!-- Sidebar -->
    <div class="header navbar fixed-top">
       <b>#DareToStepUp</b>
    </div>
    <nav style="margin-top:30px;"class="navbar navbar-expand-lg navbar-dark bg-dark navbar-default fixed-top">
    
    <div class="container-fluid">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 <div class="navbar-header">
      <a class="navbar-brand" href="#">
        <img src="<?php echo base_url()?>assets/img/logo-sneakers-w@72x.png">
      </a>
    </div>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('toko/index')?>">Beranda <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Promo</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="<?php echo base_url('toko/casuall')?>" aria-haspopup="true" aria-expanded="false">
          Sneaker
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
			
      <span style="color: white; margin-bottom:-13px;">
      <div class="navbar">
        <div class="nav navbar-nav navbar-right">
          <i style="padding-left:15px; padding-right:10px"class="fa fa-heart fa-2x"></i>
          
          <?php $keranjangg = '
      <i data-toggle="collapse" data-target="#collapseMalasngoding" aria-expanded="false" aria-controls="collapseMalasngoding" style="cursor:pointer; padding-right:10px;"class="fa fa-cart-arrow-down fa-2x"></i><sup style="margin-left:-6px; margin-right:5px;">
<span class="badge badge-light">'.$this->cart->total_items().'</span></sup>'
          ?>
<div style="color: black; position:absolute;" class="collapse" id="collapseMalasngoding">
	<div style="overflow-y:scroll;height:500px;box-shadow:1px 2px 3px;margin-top:50px; margin-bottom:-300px; margin-left:-240px; position:inherit; left:6em; width:350px;" class="card card-body">
     <h4>Keranjang Belanja</h4>
     
     <?php $no=1; foreach($this->cart->contents() as $items) :?>
      <span style="margin-left: 10px; margin-bottom:10px; margin-top:50px;">
      <h5><?php echo $items['name']?></h5>
      <p><?php echo $items['qty']?></p>
      <h6>Rp. <?php echo number_format($items['price'], 0,',','.')?></h6>
        
      </span>
     <?php endforeach;?>
      <?php if($this->session->userdata('username')){?>
     <center><a href="<?php echo base_url('toko/bayar')?>"><span class="badge badge-success pb-2 pt-2 pl-5 pr-5">Rp. <?php echo number_format($this->cart->total(), 0,',','.')?></span></a></center>
      <?php }else{?>
      <?php echo anchor('out/login','<button style="margin-left:80px" class="btn btn-primary pl-5 pr-5">Login</button>')?>
      <?php }?>
     <a class="btn btn-danger btn-sm mt-1" href="<?php echo base_url('toko/hapus_krj')?>"><i class="fa fa-trash fa-1x" ></i></a>
	</div>
</div>
          <?php echo $keranjangg?>
      
      <?php if($this->session->userdata('username')){?>
      <div style="margin-left: 0px;font-weight:bold;margin-top:-45px;">Hai <?php echo $this->session->userdata('username')?> </div>
      <?php echo anchor('out/logout','<i class="fa fa-sign-out-alt fa-2x"><h6 style="margin-top:-5px;">Logout</h6></i>')?>
      <?php }else{?>
      <?php echo anchor('out/login','<i class="fa fa-sign-in-alt fa-2x"><h6 style="margin-top:-5px;">Login</h6></i>')?>
      <?php }?>
      
        </div>
      </div></span>
    </form>
  </div></div>
</nav>
        <!-- End of Topbar -->
