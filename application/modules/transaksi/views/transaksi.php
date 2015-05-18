<div class="container">
		<div class="row" id="datatransaksi">
          <div class="col-lg-10">
            <div class="panel panel-primary filterable">
			<div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
              <div class="panel-heading">
                <h3 class="panel-title text-left">DATA TRANSAKSI JUAL BELI </h3>
              </div>
              <div class="panel-body">
			  
               <div id="container">
			  
			   <table class="table text-center">
			   <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="NO" disabled></th>
						<th><input type="text" class="form-control" placeholder="ID ORDER" disabled></th>
						<th><input type="text" class="form-control" placeholder="TANGGAL  " disabled></th>
						<th><input type="text" class="form-control" placeholder="TBAYAR" disabled></th>
						<th><input type="text" class="form-control" placeholder="NAMA PEMESAN" disabled></th>
						<th><input type="text" class="form-control" placeholder="ALAMAT" disabled></th>
						<th><input type="text" class="form-control" placeholder="CARA BAYAR" disabled></th>
						<th><input type="text" class="form-control" placeholder="STATUS" disabled></th>
						<th><input type="text" class="form-control" placeholder="DETAIL " disabled></th>
						<th>Aksi</th>
                    </tr>
					</thead>
					<tbody>
				<?php if(count($transaksi) > 0  ){ ?>
				<?php  $no=1;
						foreach($transaksi->result() as $dtTransaksi){?>
						
					<tr>
					<td><?php echo $no;?></td>
					<td><?php echo $dtTransaksi->id_order;?></td>
					<td><?php echo $dtTransaksi->tgl_order;?></td>
					<td><?php echo $dtTransaksi->total_bayar;?></td>
					<td><?php echo $dtTransaksi->nama;?></td>
					<td><?php echo $dtTransaksi->alamat;?></td>
					<td><?php echo $dtTransaksi->metode_bayar;?></td>
					<td><?php echo $dtTransaksi->status_order;?></td>
					<td>
					<a href="<?php echo base_url('transaksi/detail/'.$dtTransaksi->id_order.'');?>">
				  <button type="button" class="btn btn-default">
					<span class="glyphicon glyphicon-dashboard"></span>Show 
					</button>
					</a>
					</td>
					<td>
					<a href="<?php echo base_url('transaksi/konfirmasi/'.$dtTransaksi->id_order.'');?>">
					<button type="button" class="btn btn-default">
					<span class="glyphicon glyphicon-move"></span>EDIT
					</button>
					</a>
					|<a href="<?php echo base_url('transaksi/hapus/'.$dtTransaksi->id_order.'');?>">
					<button type="button" class="btn btn-default">
					<span class="glyphicon glyphicon-minus"></span>HAPUS
					</button>
					</a></td>
					</tr>
						<tr>
						<td><input type="hidden" name="id_order" id="id_order" value="<?php echo $dtTransaksi->id_order;?>"></td>
							
						</tr>
				<?php 	$no++;
						} ?>
					Halaman : <?php echo $halaman;?> <br>
					<?php echo $prosedure;?>
				<?php }else{?>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td rowspan="9"><h3 class="panel-title text-center">DATA TRANSAKSI TIDAK ADA LAPORAN  </h3></td>
					<td></td>
					<td></td>
						</tr>
				<?php }?>
			   </div>
                </table>								
					</div>
				</div> 
				</div>
				</div> 
</div>
