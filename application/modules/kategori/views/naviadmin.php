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
          <a class="navbar-brand fa fa-home" href="<?php echo base_url();?>admin/index"><?php echo isset($title) ? $title : ' Mediashop  Administrator';?></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-pills side-nav">
			<div class="col-lg-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title text-left">Chatting YM </h3>
              </div>
              <div class="panel-body">						
				
              </div>
            </div>
          </div>
          </ul>
          <ul class="nav navbar-nav navbar-right navbar-user">
		  
		   <li class="dropdown"><a href="#master" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-flag"></i>Master Data</a>
				<ul class="dropdown-menu">
                  <li><a href="<?php echo base_url('admin/kategori');?>"><i class=""></i>Kategori</a></li>
                  <li><a href="<?php echo base_url('admin/produk');?>"><i class=""></i>Produk</a></li>
				   <li><a href="<?php echo base_url('admin/katalog');?>"><i class="">katalog</i></a></li>
                  <li><a href="<?php echo base_url('admin/manufacture');?>"><i class=""></i>Manufacture</a></li>
				  <li><a href="<?php echo base_url('admin/transaksi');?>"><i class=""></i>transaksi</a></li>
					  <li><a href="#time"><i class="glyphicon glyphicon-th-large"></i>Berita</a></li>
					<li><a href="#produk"><i class="glyphicon glyphicon-flag"></i>Galeri</a></li>
					  <li><a href="#peta"><i class="glyphicon glyphicon-flag"></i>Pengaturan</a></li>
					
                </ul>
		   </li>
		   <li class="dropdown"><a href="<?php echo base_url('usermanager/index');?>"><i class="glyphicon glyphicon-user"></i>User Manajemen</a>
		   </li>
		    <li><a href="#cs">Tim Pengembang </a></li>
				<li class="dropdown"><a href="#"class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-sign up"></i> Profil User[<?php echo $username;?>]</a>
				<ul class="dropdown-menu">
					<li><a href="<?php echo base_url('admin/profil_user');?>"><i class=""></i>Panel akun</a></li>
					<li><a href="<?php echo base_url('admin/history');?>"><i class=""></i>History</a></li>
					<li><a href="<?php echo base_url('welcome/logout');?>"><i class=" fa fa-books fa fa-fire"></i>Keluar <b class="caret"></b></a></li>
				</ul>
				</li>
				
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
	      <div id="page-wrapper">
	   <div class="row">
		<div class="container">
		