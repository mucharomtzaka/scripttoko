<div class="container">
	<div class="row" id="detail">
          <div class="col-lg-10">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title text-left">Detail Produk </h3>
              </div>
              <div class="panel-body text-center">
               <div id="container">
			   <?php $no=1; 
					foreach($product->result() as $dtproduk){
					?>
					<div class="row-fluid ">
							<div class="artst-pic pull-left">
                    		<a href="#">
                    			<img  src="<?php echo base_url($dtproduk->location);?>"alt="" class="img-responsive" />
                    		</a>
                    	</div>
                        <div class="artst-prfle pull-center">
                        	Nama Produk: <?php echo $dtproduk->nama_produk; ?><br>
							 Harga:<small>Rp.<?php echo number_format($dtproduk->harga_produk,0,'.','.');?><br>
							 <p>Stock:<?php echo $dtproduk->stock_produk; ?></p><br>
							 <p>Seller:<?php echo $dtproduk->nama; ?></p><br>
							 Deskripsi :<p><?php echo $dtproduk->desk_produk; ?></p>
                        </div>
                    </div>
					<input type="hidden" name="id_produk" value="<?php echo $dtproduk->id_produk;?>">
					<?php if($this->session->userdata('logged_in')!="" && $this->session->userdata('id_level')==1){?>
								<button type="button" class="btn btn-default" onclick="self.history.back()">
							   <span class="glyphicon glyphicon-arrows"></span>Kembali
							  </button>
					<?php } else if($this->session->userdata('logged_in')!="" && $this->session->userdata('id_level')==1){ ?>
								<button type="button" class="btn btn-default" onclick="self.history.back()">
							   <span class="glyphicon glyphicon-arrows"></span>Kembali
							  </button>	
					 <?php } else{	?>
							<a href="<?php echo base_url();?>cart/add/<?php echo $dtproduk->id_produk;?>">  <button type="button" class="btn btn-default">
                            <span class="glyphicon glyphicon-shopping-cart"></span>Beli </button></a>
					<?php }?>
					<?php
						$no++;
						}
						?>
                </div>
					</div>
			   </div>
                
              </div>
            </div>
          </div>
        </div><!-- /.row -->
</div>