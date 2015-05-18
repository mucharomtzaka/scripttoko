<div class="container">
		<div class="row" id="pencarian">
          <div class="col-lg-10">
            <div class="panel  panel-primary filterable">
              <div class="panel-heading">
                <h3 class="panel-title text-left">Pencarian</h3>
              </div>
              <div class="panel-body">
               <div id="container">
				<div class="row">
					<div class="span12">
						<?php echo form_open('search/index?search/'.$this->input->get('search').''); ?>
							<div class="input-append">
								<input type="text" class="search-query" placeholder="Search" name="search"  placeholder=" masukan nama produk yang di cari" required>
								<button type="submit" class="btn"><i class=" fa fa-search"></i></button>
							</div>
						</form>
					</div>
				</div>
				<div class="pull-right">
				 <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
				 </div>
				<table class="table">
				<thead>
				<tr class="filters">
						<th><input type="text" class="form-control" placeholder="Urutan" disabled></th>
						<th><input type="text" class="form-control" placeholder="Nama Produk" disabled></th>
						<th><input type="text" class="form-control" placeholder="Harga " disabled></th>
						<th><input type="text" class="form-control" placeholder="Stok" disabled></th>
						<th><input type="text" class="form-control" placeholder="Operator" disabled></th>
						<th><input type="text" class="form-control" placeholder="Deskripsi " disabled></th>
						 <th>Aksi</th>	
				</tr>
				</thead>
				<tbody>
				<?php if( count($cari_produk) > 0 ) {?>
				<?php $no=1; 
				foreach($cari_produk as $dtproduk){ ?>
					<tr>
							<td><?php echo $no;?></td>
							<td><?php echo $dtproduk ['nama_produk'];?></td>
							<td>Rp.<?php echo number_format($dtproduk['harga_produk'],0,'.','.');?></td>
							<td><?php echo $dtproduk['stock_produk'];?></td>
							<td><?php echo $dtproduk['operator'];?></td>
							<td><?php echo $dtproduk['desk_produk'];?></td>
							<td><div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="<?php echo base_url();?>katalog/detail/<?php echo $dtproduk['id_produk'];?>">Detail</a>
                        </div></td>	
					</tr>
					
				<?php
						
					$no++;
					}?>
				<?php } else{
						echo " <tr><td> <h2>Data Tidak Ada</h2> </td></tr>";
				}?>
				</tbody>
				</table>
			   </div>
              </div>
            </div>
          </div>
        </div><!-- /.row -->
</div>