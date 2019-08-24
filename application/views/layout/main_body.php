<html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Website Peminjaman</title>
    <link rel="stylesheet" href="<?php echo base_url('style/home.css');?>">
    <link href="../style/assets/font/css/all.css" rel="stylesheet">
    <link href="<?php echo base_url('style/assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <script src="<?php echo base_url('style/assets/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('style/assets/jquery/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('style/home.js');?>"></script>

 
  </head>

  <body>
  <div class="page-wrapper chiller-theme toggled">
    <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
      <i class="fas fa-bars"></i>
    </a>
    <nav id="sidebar" class="sidebar-wrapper">
      <div class="sidebar-content">
        <div class="sidebar-brand">
          <a href="">Website Peminjaman</a>
          <div id="close-sidebar">
            <i class="fas fa-times"></i>
          </div>
        </div>
        <div class="sidebar-header">
          <div class="user-pic">
          </div>
          <div class="user-info">
            <span class="user-name"><?= ucwords($this->session->userdata('nama')) ?></span>
            <span class="user-role"><?php ?></span>
            <span class="user-status">
              <i class="fa fa-circle"></i>
              <span>Online</span>
            </span>
          </div>
        </div>
        <!-- sidebar-header  -->
        <div class="sidebar-search">
          <div>
            <div class="input-group">
              <input type="text" class="form-control search-menu" placeholder="Search...">
              <div class="input-group-append">
                <span class="input-group-text">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </span>
              </div>
            </div>
          </div>
        </div>
        <!-- sidebar-search  -->
        <div class="sidebar-menu">
          <ul>
            <li class="header-menu">
              <span>Sidebar</span>
            </li>
            <li class="sidebar-dropdown">
            <?php if($this->session->userdata('level') == 1){?>
          
              <a href="#">
                <i class="fa fa-tachometer-alt"></i>
                <span>Inventaris</span>
                <span class="badge badge-pill badge-warning">Barang</span>
              </a>
              <div class="sidebar-submenu">
                <ul>
                  <li>
                    <a href="#">Dashboard 1
                      <span class="badge badge-pill badge-success">Pro</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">Dashboard 2</a>
                  </li>
                  <li>
                    <a href="#">Dashboard 3</a>
                  </li>
                </ul>
              </div><?php } ?>
            </li>
            <li class="sidebar-dropdown">
              <a href="#">
                <i class="fa fa-shopping-cart"></i>
                <span>Peminjaman</span>
                <span class="badge badge-pill badge-success">???</span>
              </a>
              <div class="sidebar-submenu">
                <ul>
                  <li>
                    <a href="#">Products

                    </a>
                  </li>
                  <li>
                    <a href="#">Orders</a>
                  </li>
                  <li>
                    <a href="#">Credit cart</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="sidebar-dropdown">
              <?php if($this->session->userdata('level') != 3){?>
                <a href="#">
                  <i class="far fa-gem"></i>
                  <span>Pengembalian</span>
                </a>
                <div class="sidebar-submenu">
                  <ul>
                    <li>
                      <a href="#">General</a>
                    </li>
                    <li>
                      <a href="#">Panels</a>
                    </li>
                    <li>
                      <a href="#">Tables</a>
                    </li>
                    <li>
                      <a href="#">Icons</a>
                    </li>
                    <li>
                      <a href="#">Forms</a>
                    </li>
                  </ul>
                </div>
              <?php }?>
            </li>
            <li class="sidebar-dropdown">
              <?php if($this->session->userdata('level') == 1){?>
                <a href="#">
                  <i class="fa fa-chart-line"></i>
                  <span>Generate laporan</span>
                  <span class="badge badge-pill badge-danger">!!!</span>
                </a>
                <div class="sidebar-submenu">
                  <ul>
                    <li>
                      <a href="#">Pie chart</a>
                    </li>
                    <li>
                      <a href="#">Line chart</a>
                    </li>
                    <li>
                      <a href="#">Bar chart</a>
                    </li>
                    <li>
                      <a href="#">Histogram</a>
                    </li>
                  </ul>
                </div>
              <?php }?>
            </li>
            <li>
              <a href="<?php echo site_url('login/logout');?>">
                <i class="fa fa-times"></i>
                <span>LogOut</span>
              </a>
            </li>
          </ul>
        </div>
        <!-- sidebar-menu  -->
      </div>
    </nav>