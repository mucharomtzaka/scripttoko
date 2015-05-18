<div class="container">
    <div class="well well-sm">
        <strong>Category Title</strong>
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
                <img class="group list-group-image" src="<?php echo base_url($dtproduk->location);?>" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                      <?php echo $dtproduk->nama_produk; ?></h4>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                             Rp.<?php echo   number_format($dtproduk->harga_produk,0,'.','.');?></p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="<?php echo base_url();?>katalog/detail/<?php echo $dtproduk->id_produk;?>">Beli</a>
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
