<div class="container">
		<div class="row" id="kataloh">
          <div class="col-lg-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title text-left">Katalog Produk</h3>
              </div>
              <div class="panel-body">
               <div id="container">
				<div class="section group">
				<?php $no=1; 
					foreach($product->result() as $dtproduk){
					?>
					<div class="col span_1_of_4">
				<div class="thumbnail ">
                <img class="group list-group-image" style="width:35%"  src="<?php echo base_url($dtproduk->location);?>" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                      <?php echo $dtproduk->nama_produk; ?></h4>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                             Rp.<?php echo   number_format($dtproduk->harga_produk,0,'.','.');?></p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="<?php echo base_url();?>katalog/detail/<?php echo $dtproduk->id_produk;?>">Detail</a>
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
              </div>
            </div>
          </div>
        </div><!-- /.row -->
</div>









