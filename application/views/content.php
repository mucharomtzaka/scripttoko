 <div class="container">
				<div class="row">
					<div class="span12">
						<?php echo form_open('search/index?search='.$this->input->post('search').''); ?>
							<div class="input-append">
								<input type="text" class="search-query" placeholder="Search" name="search" required>
								<button type="submit" class="btn"><i class=" fa fa-search"></i></button>
							</div>
						</form>
					</div>
				</div>
			</div>
			
			
<div class="container">
		<div class="col-lg-10">
		<div class="panel panel-primary">
        <div class="panel-body span9">
			<div class="header_center_images" style="height:10%">
		   <!-- FlexSlider -->
              <section class="slider" >
				  <div class="flexslider">
					<ul class="slides span2">
					<?php $no=1; 
					foreach($product->result() as $dtproduk){
					?>
						 <li  id="<?php echo $no;?>">
						 <div class="artst-pic pull-left">
								   <img alt="100X100" style="width:272; height:185"  src="<?php echo base_url($dtproduk->location);?>" 
								   title="<?php echo $dtproduk->nama_produk; ?>"  alt="" class="img-responsive">
								  
							</div>
							 <div class="artst-prfle pull-center">
                        	<div class="art-title">

                             <div class="span2">
							 Nama Produk :<?php echo $dtproduk->nama_produk;?>
							 Deskripsi : <?php echo $dtproduk->desk_produk;?>
							 <b>Harga:<small>Rp.<?php echo $dtproduk->harga_produk;?>,00</small></b> <br>
							 <a href="<?php echo base_url();?>cart/add/<?php echo $dtproduk->id_produk;?>">Beli</a></div>
                            </div>
                        </div>
							</li>
						<?php
							$no++;
						}
						?>		
				    </ul>
				  </div>
	      </section>
<!-- FlexSlider -->
	</div> 
			</div>
		</div>
	</div>
</div>

<div class="container">
		<div class="row" id="kategori">
          <div class="col-lg-10">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title text-left">KATEGORI</h3>
              </div>
              <div class="panel-body">
               <div id="container">
				<?php foreach($kategori->result() as $dtkategori){?>
               <a href="<?php echo base_url();?>welcome/group/<?php echo $dtkategori->nama_kategori;?>">
               	<span style="font-size:+3;"><?php echo $dtkategori->nama_kategori;?></span></a>
				<?php  } ?> 
			   </div>
                
              </div>
            </div>
          </div>
        </div><!-- /.row -->
</div>
<div class="container">
    <div class="well well-sm">
        <strong>Produk Terbaru</strong>
        <div class="btn-group">
            <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
            </span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
                class="glyphicon glyphicon-th"></span>Grid</a>
        </div>
    </div>
    <div id="products" class="row list-group">
	<?php $no=1; 
					foreach($product->result() as $dtproduk){
					?>
        <div class="item  col-xs-4 col-lg-4" id="<?php echo $no;?>">
            <div class="thumbnail">
                <img class="group list-group-image"  src="<?php echo base_url($dtproduk->location);?>" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                      <?php echo $dtproduk->nama_produk; ?></h4>
					  <p class="group inner list-group-item-text">
						 Deskripsi : <?php echo $dtproduk->desk_produk;?>
					  </p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                             Rp.<?php echo   number_format($dtproduk->harga_produk,0,'.','.');?></p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="<?php echo base_url();?>katalog/detail/<?php echo $dtproduk->id_produk;?>">
                            	Beli</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<?php
				$no++;
						}
						?>  
				</div>
</div>