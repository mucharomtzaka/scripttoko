      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand fa fa-home" href="<?php echo base_url();?>beranda/index"><?php echo isset($title) ? $title : ' Mediashop Member ';?></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-pills side-nav">
		  
				<li><a href="#time"><i class="glyphicon glyphicon-th-large"></i>Berita</a></li>
				<li><a href="#produk"><i class="glyphicon glyphicon-flag"></i>Galeri</a></li>
				 <li><a href="#cs"<i class=" fa fa-comment fa fa-white"></i>Hubungi Kami </a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
		   <li><a href="<?php echo base_url('welcome/katalog');?>"><i class=""></i>Katalog</a></li>
		   <li><a href="#peta"><i class="glyphicon glyphicon-flag"></i>Status ORDER </a></li>
		   <li><a href="<?php echo base_url('beranda/payment');?>"><i class="glyphicon glyphicon-flag"></i>Konfirmasi Bank Transfer </a></li>
			   <li><a href="<?php echo base_url('welcome/keranjang');?>"><i class="glyphicon glyphicon-shopcart"></i> Keranjang Belanja </a></li>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-sign up"></i> Profil User[<?php echo $username;?>]</a>
					<ul class="dropdown-menu">
				  <li><a href="<?php echo base_url('beranda/profil_user');?>"><i class=""></i>Panel akun</a></li>
                  <li><a href="<?php echo base_url('beranda/orderlist');?>"><i class=""></i>Pesanan Saya</a></li>
				  <li><a href="<?php echo base_url('histori/index');?>"><i class=""></i>Histori login</a></li>
                  <li><a href="<?php echo base_url('beranda/wishlist');?>"><i class=""></i>wishlist</a></li>
                  <li><a href="<?php echo base_url('beranda/return');?>"><i class=""></i>Pengembalian barang saya</a></li>
				  <li><a href="<?php echo base_url('welcome/logout');?>"><i class=" fa fa-books fa fa-fire"></i>Keluar <b class="caret"></b></a></li>
                </ul>
				</li>
				<li><a href="#peta"><i class="glyphicon glyphicon-flag"></i>Peta Situs</a></li>
				<li><a href="#time"><i class="glyphicon glyphicon-envelope"></i>FAQ</a></li>
				
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
	      <div id="page-wrapper">
	   <div class="row">
		<div class="container">
		