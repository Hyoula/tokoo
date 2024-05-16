<!-- Page Wrapper -->
  <div style="margin-top:100px;"id="wrapper">

    <!-- Sidebar -->
    <ul style="padding-top:10px;"class="navbar-nav bg-dark sidebar sidebar-dark accordion " id="accordionSidebar">

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('toko/casuall')?>">
          <i class="fas fa-fw fa-store"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Kategori
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('kategori/casual')?>">
          <i class="fas fa-fw fa-shoe-prints"></i>
          <span>Casual</span></a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('kategori/cool')?>">
          <i class="fas fa-fw fa-temperature-low"></i>
          <span>The Coolest</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('kategori/formal')?>">
          <i class="fas fa-fw fa-user-tie"></i>
          <span>Formal</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('kategori/sport')?>">
          <i class="fas fa-fw fa-volleyball-ball"></i>
          <span>Sport</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Information
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-sign-in-alt"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="404.html">How to Buy</a>
            <a class="collapse-item" href="blank.html">Kinds of Type</a>
            <a class="collapse-item" href="blank.html">Our Inspiration</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->