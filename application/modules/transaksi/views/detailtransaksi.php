<div class="container">
		<div class="row" id="data produk">
          <div class="col-lg-10">
            <div class="panel panel-primary filterable">
              <div class="panel-heading">
                <h3 class="panel-title text-left">Detail Produk Pemesanan </h3>
				<div class="pull-right">
					<button type="button" class="btn btn-print" onclick="">
					   <span class="glyphicon glyphicon-print"></span> CETAK LAPORAN ORDER
					  </button>
					  </div>
              </div>
              <div class="panel-body">
               <div id="container">
				<table class="table text-center">
                <thead>
				<tr>
					<th>Kode Transaksi : <?php echo $id;?></th>
				</tr>
                    <tr>
						
                        <th> ID Produk</th>
						<th> Nama Produk</th>
                        <th>Quantity</th>
                        <th class="text-center">Harga Satuan</th>
                        <th class="text-center"> Sub Total</th>
                    </tr>
                </thead>
                <tbody>
				<?php foreach($order_detail->result() as $r ){?>
					<tr>
						<td><?php echo $r->id_produk;?></td>
						<td><?php echo $r->nama_produk;?></td>
						<td><?php echo $r->jumlah;?></td>
						<td><?php echo " Rp.".number_format($r->harga_satuan,0,'.','.');?></td>
						<td><?php 
								$item = $r->jumlah;
								$to = $r->harga_satuan;
								$sub = $item * $to;
								echo " Rp.".number_format($sub,0,'.','.');
								
						?></td>
					</tr>
					
				<?php }?>
					<tr>
						<th></th>
						<th></th>
						<th></th>
					</tr>
                </tbody>
            </table>			
			   </div>
			   <div class="pull-center">
					<button type="button" class="btn btn-default" onclick="self.history.back()">
					   <span class="glyphicon glyphicon-arrows"></span> Kembali
					  </button>
					</div>  
              </div>
            </div>
          </div>
        </div><!-- /.row -->
</div>
