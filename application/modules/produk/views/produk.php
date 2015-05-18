<div class="container">
 <?php $this->session->flashdata('pesan');?>
<a href="#"  onClick="$('#inputbox').slideToggle('slow')" class="btn btn-default btn-xs btn-add" id="btn-add"><span class="glyphicon glyphicon-plus"></span> Tambah</a><br>
		<div class="row" id="inputbox"  style="display:none;">
          <div class="col-lg-10">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title text-left">INPUT DATA PRODUK</h3>
              </div>
              <div class="panel-body text-center">
               <div id="container">
			   <?php if($error == ''){
						echo $error;
						}
				?>
				<?php echo form_open_multipart('produk/simpan');?>
						<table class="table">
							<tr colspan="2">
								<td>Nama Produk</td>
								<td><input type="text" name="nama_produk"  id="nama_produk " class="form-control" placeholder="nama produk"  required></td>
							</tr>
							<tr>
								<td>Harga</td>
								<td><input type="text" name="harga" id="harga" class="form-control"  placeholder=" Rp. " required> </td>
							</tr>
							<tr>
								<td>Stock</td>
								<td><input type="text" name="stok" id="stok" class="form-control" placeholder="Stok" required>    </td>
							</tr>
							<tr>
								<td>Kategori</td>
								<td>
										<select name= "kategori"  class="input-group"  id="kategori">
										<option > Pilih Salah satu Kategori Produk </option>
										<?php foreach($kategori->result() as $list){?>
												<option  value=" <?php echo $list->id_kategori;?>" > <?php echo $list->nama_kategori;?></option>
										<?php }  ?>
							</select>       
								</td>
							</tr>
							<tr>
								<td>File Gambar</td>
								<td> <input type="file" id="userfile" name="userfile" class="form-control"> </td>
							</tr>
							
							<tr>
								<td>Operator</td>
								<td><input type="text" name="username" id="username" class="form-control"   value="<?php echo $username;?>" disabled>
									<input type="hidden" name="username" id="username" class="form-control"   value="<?php echo $username;?>">
								</td>
							</tr>
							<tr>
								<td>ID Operator</td>
								<td> <input type="text" name="id_user"  id="id_user"class="form-control"    value="<?php echo $id_user;?>" disabled>
								<input type="hidden" name="id_user"  id="id_user"class="form-control"    value="<?php echo $id_user;?>" >
								</td>
							</tr>
							<tr>
								<td> Deskripsi
								<td><div class="input-group">
								 <textarea name="deskripsi" id="deskripsi" class="form-control" placeholder="deskripsi" cols="100" rows="8"></textarea>                              
							   </div></td>
							</tr>
							<tr>
								<td></td>
								<td><div class="input-group"><input type="submit" id="btn-simpan" class="btn btn-success" Value="Simpan"> </input></div>	
								</td>
								<td> <div class="input-group"><input type="reset" id="btn-reset" class="btn btn-reset" Value="Reset"> </input></div></td>
							</tr>
						</table>
						<?php 
							if($this->session->userdata('id_level')==1){
								echo '<input type="hidden" name="publikasi"  id="publikasi " class="form-control" value="1">';
							}else if($this->session->userdata('id_level')==2){
								echo '<input type="hidden" name="publikasi"  id="publikasi " class="form-control" value="0">';
							}
						 ?>
					   	
				</form>
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
                <h3 class="panel-title text-left">Data Produk</h3>
				<div class="pull-right">
					
					<a href="<?php echo base_url('produk/checklist');?>" class="btn btn-default btn-xs btn-minus"><span class="glyphicon glyphicon-minus"></span>Hapus</a>
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
              </div>
              <div class="panel-body">
               <div id="container">
					<table class="table text-center">
					<thead>
					<tr>
						
					</tr>
                    <tr class="filters">
						<th><input type="checkbox" name="checkall" class="checkall" > <span class="glyphicon glyphicon-checkbox"></span>Check</input></th>
                        <th><input type="text" class="form-control" placeholder="Urutan" disabled></th>
						<th><input type="text" class="form-control" placeholder="Nama Produk" disabled></th>
						<th><input type="text" class="form-control" placeholder="Harga " disabled></th>
						<th><input type="text" class="form-control" placeholder="Stok" disabled></th>
						<th><input type="text" class="form-control" placeholder="kategori" disabled></th>
						<th><input type="text" class="form-control" placeholder="Publish" disabled></th>
						<th><input type="text" class="form-control" placeholder="Operator" disabled></th>
						<th><input type="text" class="form-control" placeholder="Deskripsi " disabled></th>
						 <th>Aksi</th>
                    </tr>
					</thead>
					<tbody>
					<?php $no=1; 
					foreach($produk->result() as $dtproduk){
					?>
					<tr>
						<td><input type="checkbox" id="checklist" class="checklist"  value="<?php echo $dtproduk->id_produk;?>"></td>
						<td><?php echo $no;?></td>
						<td><?php echo $dtproduk->nama_produk;?></td>
						<td>Rp.<?php echo number_format($dtproduk->harga_produk,0,'.','.');?></td>
						<td><?php echo $dtproduk->stock_produk;?></td>
						<td><?php echo $dtproduk->id_kategori;?></td>
						<td><?php echo $dtproduk->publikasi;?></td>
						<td><?php echo $dtproduk->operator;?></td>
						<td><?php echo $dtproduk->desk_produk;?></td>
						
						<td><a href="<?php echo base_url();?>produk/edit/<?php echo $dtproduk->id_produk;?>" class="btn btn-default btn-xs btn-fire"><span class="glyphicon glyphicon-fire"></span>Edit</a> 
						| 	<?php if($this->session->userdata('id_level')==1){ ?>
									<a href="<?php echo base_url();?>produk/publish/<?php echo $dtproduk->id_produk;?>" class="btn btn-default btn-xs btn-check"  onclick="return confirm('Apakah  Anda Yakin untuk Terbitkan   Produk  ini ?')"><span class="glyphicon glyphicon-check"></span>Terbitkan</a> 
							<?php }  ?>
						|
						<a href="<?php echo base_url();?>produk/hapus/<?php echo $dtproduk->id_produk;?>" class="btn btn-default btn-xs btn-minus" onclick="return confirm('Apakah  Anda Yakin untuk Hapus   Produk  ini ?')"><span class="glyphicon glyphicon-minus"></span> Hapus</a></td>
					</tr>
					<?php
						$no++;
						}
					?>
					</tbody>
				</table>
					Halaman : <?php echo $halaman;?> <br>
					<?php echo $prosedure;?>
							
			   </div>
              </div>
            </div>
          </div>
        </div><!-- /.row -->
</div>

