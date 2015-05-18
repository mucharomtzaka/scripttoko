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
          <a class="navbar-brand fa fa-home" href="<?php echo base_url();?>"><?php echo isset($title) ? $title : ' Mediashop ';?></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-pills side-nav">
		  
				<li><a href="<?php echo base_url('berita/index');?>"><i class="glyphicon glyphicon-th-large"></i>Berita</a></li>
				<li><a href="<?php echo base_url('galeri/index');?>"><i class="glyphicon glyphicon-flag"></i>Galeri</a></li>
				 <li><a href="<?php echo base_url('marketplace/index');?>"><i class="glyphicon glyphicon-flag"></i>MarketPlace </a></li>
				 <li><a href="<?php echo base_url('bantuan/index');?>"<i class=" fa fa-comment fa fa-white"></i>Hubungi Kami </a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
		  <li><a href="<?php echo base_url('welcome/katalog');?>"><i class=""></i>Katalog</a></li>
		   <li><a href="<?php echo base_url('tips/index');?>"><i class="glyphicon glyphicon-flag"></i>Cara Pemesanan </a></li>
			   <li><a href="<?php echo base_url('welcome/keranjang');?>"><i class="glyphicon glyphicon-shopcart"></i> Keranjang Belanja [<?php echo $total;?>]</a></li>
				<li><a href="<?php echo base_url('login');?>"><i class=" fa fa-books fa fa-fire"></i> Masuk <b class="caret"></b></a></li>
				<li><a href="<?php echo base_url('login/index');?>"><i class="glyphicon glyphicon-sign up"></i> Daftar </a></li>
				<li><a href="#peta"><i class="glyphicon glyphicon-flag"></i>Peta Situs</a></li>
				<li><a href="<?php echo base_url('faq/index');?>"><i class="glyphicon glyphicon-envelope"></i>FAQ</a></li>
				
          </ul>
		 
        </div><!-- /.navbar-collapse -->
      </nav>
	      <div id="page-wrapper">
	   <div class="row">
		<div class="container">
		