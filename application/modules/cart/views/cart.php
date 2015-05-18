<div class="container">
		<div class="row" id="kategori">
          <div class="col-lg-10">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title text-left">Keranjang Belanja</h3>
              </div>
              <div class="panel-body">
               <div id="container">
				
			   </div>
			   <?php echo form_open('cart/ordernow');?>
				<table class="table responsive">
                <thead>
				<tr>
					<td><input type="hidden" name="kode_transaksi" value="<?php echo  $kode_transaksi;?>"></td>
				</tr>
                    <tr>
                        <th>Produk</th>
                        <th>Quantity</th>
                        <th class="text-center">Harga</th>
                        <th class="text-center">Total</th>
                        <th> Aksi </th>
                    </tr>
                </thead>
                <tbody>
				<?php if(count($cart)>0){?>
				<?php
					$grand_total =0;
					$no=1;
					foreach($cart as $items){
					
				?>
                    <tr>
					<?php if($this->cart->has_options($items['rowid'])){
						foreach($this->cart->product_option($items['rowid']) as $option => $value){
							echo $option.":<em>".$value."</em>";
						}
					}
					?>
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="<?php echo base_url();?>/<?php echo "". $items['gambar'];?>" style="width: 72px; height: 72px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading"> <input type="hidden" class="form-control" id="name" value="<?php echo "". $items['name'];?>" > <?php echo "". $items['name'];?></h4>
								<h3 class="media-heaading">Stock : Ready<input type="hidden" class="form-control" name="stok" id="stok"value="<?php echo "". $items['stock'];?>"></h3>
								<input type="hidden" class="form-control" id="id_produk"value="<?php echo "". $items['id'];?>">
								KODE PRODUK :<?php echo "". $items['id'];?><br>
								<input type="hidden" class="form-control" id="seller"value="<?php echo "". $items['seller'];?>">
								SELLER  :<?php echo "". $items['seller'];?>
                            </div>
                        </div></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                        <input type="hidden" class="form-control" id="qty" value="<?php echo "". $items['qty'];?>"> <?php echo "". $items['qty'];?>
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong><input type="hidden" class="form-control" id="price"value="<?php echo " Rp.".number_format($items['price'],0,'.','.');?>"></strong><?php echo " Rp.".number_format($items['price'],0,'.','.');?></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong><input type="hidden" class="form-control" id="total_amout"value="<?php 
						$total_row= $items['price'] * $items['qty'];
								echo "Rp.".number_format($total_row,0,'.','.');?>">
						<?php 
						$total_row= $items['price'] * $items['qty'];
								echo "Rp.".number_format($total_row,0,'.','.');?></strong></td>
                        <td class="col-sm-1 col-md-1">
                       <a href="<?php echo base_url('cart/remove/'.$items['rowid'].'');?>"><button type="button" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove"></span> Remove
                        </button></a></td>
                    </tr>
					<?php 
						$no++;
							}
					?>
                    <tr>
                        <td> </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Subtotal</h5></td>
                        <td class="text-right"><h5><strong><input type="hidden" class="form-control" id="total_sub"value="<?php echo "Rp.".number_format($this->cart->total(),0,'.','.');?>">
						<?php echo "Rp.".number_format($this->cart->total(),0,'.','.');?></strong></h5></td>
                    </tr>
                    <tr>
                        <td> Barang akan dikirim setelah pembayaran kami terima </td>
                        <td></td>
                        <td>   </td>
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3><strong><input type="hidden" class="form-control" id="total"value="<?php echo "Rp.".number_format($this->cart->total(),0,'.','.');?>">
						<?php echo "Rp.".number_format($this->cart->total(),0,'.','.');?>
						</strong></h3></td>
                    </tr>
					<?php  
							}else
								{	
						?>
						<tr rowspan="5">
					<td></td>
					<td><?php echo $message;?></td>
					<td></td>
				</tr>
					<?php }?>
				<tr>
                        <td>   </td>
                        <td>   </td>
                        <td> <button type="button" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove"></span><a href="<?php echo base_url();?>cart/empty_cart"> Kosongkan isi keranjang</a>
                        </button>  </td>
                        <td>
                        <button type="submit" class="btn btn-default">
                            <span class="glyphicon glyphicon-shopping-cart"></span>Lanjutkan ke Pembayaran
                        </button></td>
                    </tr>
			
                    
					
						
                </tbody>
            </table>
						
                </form>
              </div>
            </div>
          </div>
        </div><!-- /.row -->
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-10 col-md-10 col-md-offset-1">
            
        </div>
    </div>
</div>