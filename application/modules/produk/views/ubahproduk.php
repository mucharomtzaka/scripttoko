<div class="container">
 <?php $this->session->flashdata('pesan');?>

		<div class="row" id="inputbox">
          <div class="col-lg-10">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title text-left">UPDATE DATA PRODUK</h3>
              </div>
              <div class="panel-body text-center">
               <div id="container">
			   <?php if($error == ''){
						echo $error;
						}
				?>
				<?php echo form_open_multipart('produk/update');?>
				 <input type="hidden" name="id_produk"  id="id_produk "  value="<?php echo $id;?>">
				 <?php 
					if($this->session->userdata('id_level')==1){
						echo '<input type="hidden" name="publikasi"  id="publikasi " class="form-control" value="1">';
					}else if($this->session->userdata('id_level')==2){
						echo '<input type="hidden" name="publikasi"  id="publikasi " class="form-control" value="0">';
					}
				 ?>
						<table class="table">
							<tr colspan="2">
								<td>Nama Produk</td>
								<td><input type="text" name="nama_produk"  id="nama_produk " class="form-control"  value="<?php echo $nama_produk;?>"></td>
							</tr>
							<tr>
								<td>Harga</td>
								<td><input type="text" name="harga" id="harga" class="form-control"   value="<?php echo $harga;?>"> </td>
							</tr>
							<tr>
								<td>Stock</td>
								<td><input type="text" name="stok" id="stok" class="form-control"  value="<?php echo $stok;?>">    </td>
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
								<td> *** Required</td>
							</tr>
							<tr>
								<td>File Gambar</td>
								<td> <input type="file" id="userfile" name="userfile" class="form-control"> </td>
								<td> *** Required</td>
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
								 <textarea name="deskripsi" id="deskripsi" class="form-control" placeholder="deskripsi" cols="100" rows="8"><?php echo $desk;?></textarea>                              
							   </div></td>
							</tr>
							<tr>
								<td></td>
								<td><div class="input-group"><input type="submit" id="btn-simpan" class="btn btn-success" Value="UPDATE"> </input></div>	
								</td>
								<td> <div class="input-group"><input type="reset" id="btn-reset" class="btn btn-reset" Value="Reset"> </input></div></td>
							</tr>
						</table>
					    <button type="button" class="btn btn-default" onclick="self.history.back()">
							   <span class="glyphicon glyphicon-arrows"></span>Kembali
							  </button>	   	
				</form>
			   </div>
              </div>
            </div>
          </div>
        </div><!-- /.row -->
</div>