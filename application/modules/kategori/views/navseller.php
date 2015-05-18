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
          <a class="navbar-brand fa fa-home" href="<?php echo base_url();?>seller/index"><?php echo isset($title) ? $title : ' Mediashop  Seller ';?></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-pills side-nav">
		  
				<li><a href="#time"><i class="glyphicon glyphicon-th-large"></i>Berita</a></li>
				<li><a href="#produk"><i class="glyphicon glyphicon-flag"></i>Galeri</a></li>
				  <li><a href="#peta"><i class="glyphicon glyphicon-flag"></i>Pengaturan</a></li>
				 <li><a href="#cs"<i class=" fa fa-comment fa fa-white"></i>Tim Pengembang </a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
		  
		   <li class="dropdown"><a href="#master" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-flag"></i>Master Data</a>
				<ul class="dropdown-menu">
                  <li><a href="<?php echo base_url('seller/kategori');?>"><i class=""></i>Kategori</a></li>
                  <li><a href="<?php echo base_url('seller/produk');?>"><i class=""></i>Produk</a></li>
				  <li><a href="<?php echo base_url('seller/transaksi');?>"><i class=""></i>Transaksi</a></li>
				   <li><a href="<?php echo base_url('seller/billing');?>"><i class=""></i>Keuangan</a></li>
				  <li><a href="<?php echo base_url('seller/return');?>"><i class=""></i>Refund</a></li>
                </ul>
		   </li>
				<li class="dropdown"><a href="#"class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-sign up"></i> Profil User[<?php echo $username;?>]</a>
				<ul class="dropdown-menu">
					<li><a href="<?php echo base_url('seller/profil_user');?>"><i class=""></i>Panel akun</a></li>
					<li><a href="<?php echo base_url('seller/history');?>"><i class=""></i>History</a></li>
					<li><a href="<?php echo base_url('welcome/logout');?>"><i class=" fa fa-books fa fa-fire"></i>Keluar <b class="caret"></b></a></li>
				</ul>
				</li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
	      <div id="page-wrapper">
	   <div class="row">
		<div class="container">
		