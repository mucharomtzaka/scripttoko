<?php echo form_open('cart/konfirmasi');?>
<div class="container">
		<div class="row" id="data produk">
          <div class="col-lg-10">
            <div class="panel panel-primary filterable">
              <div class="panel-heading">
                <h3 class="panel-title text-left">Detail Produk Pemesanan </h3>
              </div>
              <div class="panel-body">
               <div id="container">
				<table class="table text-center">
                <thead>
				<tr>
					<th> Kode Transaksi : <?php echo  $kode_transaksi;?> <input type="hidden" name="kode_transaksi" id="kode_transaksi" value="<?php echo  $kode_transaksi;?>"></th>
				</tr>
                    <tr>
                        <th>Produk</th>
                        <th>Quantity</th>
                        <th class="text-center">Harga</th>
                        <th class="text-center">Total</th>
                    </tr>
                </thead>
                <tbody>
				<tr rowspan="5">
					<td></td>
					<td><?php
						if(count($cart)>0){
							echo $message;
						}
					?></td>
					<td></td>
				</tr>
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
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="<?php echo base_url();?><?php echo "". $items['gambar'];?>" style="width: 72px; height: 72px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading"> <input type="hidden"  id="name" value="<?php echo "". $items['name'];?>" > <?php echo "". $items['name'];?></h4>
								<h3 class="media-heaading">Stock : Ready <input type="hidden" class="form-control" name="stok" id="stok"value="<?php echo "". $items['stock'];?>"></h3>
								<input type="hidden" name="id_produk[]"  id="id_produk[]"value="<?php echo "". $items['id'];?>">
								KODE PRODUK :<?php echo "". $items['id'];?><br>
								<input type="hidden" name="seler"  id="seler"value="<?php echo "". $items['seller'];?>">
								SELLER:<?php echo "". $items['seller'];?>
								
                            </div>
                        </div></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                        <input type="hidden"  name="gty" id="qty" value="<?php echo "". $items['qty'];?>"> <?php echo "". $items['qty'];?>
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong><input type="hidden" id="price"value="<?php echo " Rp.".number_format($items['price'],0,'.','.');?>"></strong><?php echo " Rp.".number_format($items['price'],0,'.','.');?></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong><input type="hidden"  id="total_amout"value="<?php 
						$total_row= $items['price'] * $items['qty'];
								echo "Rp.".number_format($total_row,0,'.','.');?>">
						<?php 
						$total_row= $items['price'] * $items['qty'];
								echo "Rp.".number_format($total_row,0,'.','.');?></strong></td>
                    </tr>
						<?php 
							$no++;	} 
						?>
                    <tr>
                        <td> </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Subtotal</h5></td>
                        <td class="text-right"><h5><strong><input type="hidden"  id="total_sub"value="<?php echo "Rp.".number_format($this->cart->total(),0,'.','.');?>">
						<?php echo "Rp.".number_format($this->cart->total(),0,'.','.');?></strong></h5></td>
                    </tr>
                    <tr>
                        <td> Barang akan dikirim setelah pembayaran kami terima </td>
                        <td></td>
                        <td>   </td>
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3><strong><input type="hidden" id="total"value="<?php echo "Rp.".number_format($this->cart->total(),0,'.','.');?>">
						<?php echo "Rp.".number_format($this->cart->total(),0,'.','.');?>
						</strong></h3></td>
                    </tr>
                </tbody>
            </table>			
			   </div>
              </div>
            </div>
          </div>
        </div><!-- /.row -->
</div>


<div class="container">
		<div class="row" id="data produk">
          <div class="col-lg-10">
            <div class="panel panel-primary filterable">
              <div class="panel-heading">
                <h3 class="panel-title text-left">Metode Pembayaran  </h3>
              </div>
              <div class="panel-body">
               <div id="container">
					<table class="table text-center">
					<tbody>
					<tr>
						<select name="method_bayar"  id= "method_bayar"class="form-control" required >
						<option>---Pilih Salah Satu Metode Pembayaran  diatas ini-----</option>
							<option value="cod" > Cash On delivery </option>
							<option value="kartu_kredit" > Kartu Kredit </option>
							<option value="Cash" > Cash </option>
							<option value="Transfer"> Transfer</option>
							<option value="Debit"> Debit </option>
						</select >
					</tr>
					</tbody>
				</table>
				
			   </div>
              </div>
            </div>
          </div>
        </div><!-- /.row -->
</div>


<div class="container">
		<div class="row">
          <div class="col-lg-10">
            <div class="panel panel-primary filterable">
              <div class="panel-heading">
                <h3 class="panel-title text-left">  Pengiriman   </h3>
              </div>
              <div class="panel-body">
               <div id="container">
					<table class="table text-center">
					<thead>
                    <tr >
                      <th> Alamat Tujuan </th>
                    </tr>
					</thead>
					<tbody>
					<tr>
					<td><textarea name="alamat" id="alamat" cols="100" rows="4" required></textarea></td>
					</tr>
					</tbody>
				</table>
				
			   </div>
              </div>
            </div>
          </div>
        </div><!-- /.row -->
</div>
<div class="container">
	 <button type="submit" class="btn btn-default">
       <span class="glyphicon glyphicon-shopping-cart"></span>Pesan Sekarang 
      </button> |
	   <button type="button" class="btn btn-default" onclick="self.history.back()">
       <span class="glyphicon glyphicon-arrows"></span>Batal 
      </button>
</div>
 </form>


