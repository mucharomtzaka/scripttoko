
<div class="container">
<a href="#"  onClick="$('#inputbox').slideToggle('slow')" class="btn btn-default btn-xs btn-add" id="btn-add"><span class="glyphicon glyphicon-plus"></span> Tambah</a><br>
		<div class="row" id="inputbox"  style="display:none;">
          <div class="col-lg-10">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title text-left">INPUT DATA KATEGORI</h3>
              </div>
              <div class="panel-body">
               <div id="container">
				<?php echo form_open("kategori/simpan");?>
						<table class="table">
							<tr colspan="2">
								<td>Nama kategori</td>
								<td><input type="text" name="nama_kategori" id="nama_kategori"  class="form-control" placeholder="nama kategori"  required></td>
							</tr>
							<tr>
								<td> Deskripsi
								<td><div class="input-group">
								 <textarea name="deskripsi" class="form-control" id="deskripsi" placeholder="deskripsi" cols="100" rows="8"></textarea>                              
							   </div></td>
							</tr>
							<tr>
								<td></td>
								<td><div class="input-group"><input type="submit" id="btn-simpan" class="btn btn-success" Value="Simpan"> </input></div>	
								</td>
								<td> <div class="input-group"><input type="reset" id="btn-reset" class="btn btn-reset" Value="Reset"> </input></div></td>
							</tr>
						</table>   	
				</form>
			   </div>
              </div>
            </div>
          </div>
        </div><!-- /.row -->
</div>


<div class="container">
		<div class="row" id="kategori">
          <div class="col-lg-10">
            <div class="panel panel-primary filterable">
              <div class="panel-heading">
                <h3 class="panel-title text-left">Data Kategori</h3>
				<div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
              </div>
              <div class="panel-body">
               <div id="container">
					<table class="table text-center">
					<thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="Nomor Urutan" disabled></th>
                        <th><input type="text" class="form-control" placeholder=" Id kategori" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Nama Kategori" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Deskripsi" disabled></th>
						 <th>Aksi</th>
                    </tr>
					</thead>
					<tbody>
					<?php $no=1; 
					foreach($kategori->result() as $dtkategori){
					?>
					<tr>
						<td><?php echo $no;?></td>
						<td><?php echo $dtkategori->id_kategori;?></td>
						<td><?php echo $dtkategori->nama_kategori;?></td>
						<td><?php echo $dtkategori->desk_kategori;?></td>
						<td><a href="" class="btn btn-default btn-xs btn-fire"><span class="glyphicon glyphicon-fire"></span>Edit</a> | <a href="" class="btn btn-default btn-xs btn-minus"><span class="glyphicon glyphicon-minus"></span> Hapus</a></td>
					</tr>
					<?php
						$no++;
						}
					?>
					</tbody>
				</table>
					Halaman : <?php echo $halaman;?>
			   </div>
              </div>
            </div>
          </div>
        </div><!-- /.row -->
</div>

