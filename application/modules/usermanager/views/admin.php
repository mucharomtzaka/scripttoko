<div class="container">
		<div class="row" id="data produk">
          <div class="col-lg-10">
            <div class="panel panel-primary filterable">
              <div class="panel-heading">
                <h3 class="panel-title text-left">Data Administrator</h3>
				<div class="pull-right">
					  <a href="#" data-toggle="modal" data-target=".pop-up-2"><button class="btn btn-default btn-xs btn-add"><span class="glyphicon glyphicon-plus"></span> Tambah</button></a>
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
              </div>
              <div class="panel-body">
               <div id="container">
					<table class="table text-center">
					<thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="Urutan" disabled></th>
						<th><input type="text" class="form-control" placeholder="Nama " disabled></th>
						<th><input type="text" class="form-control" placeholder="username" disabled></th>
						<th><input type="text" class="form-control" placeholder="id_acces" disabled></th>
						<th><input type="text" class="form-control" placeholder="status" disabled></th>
						 <th>Aksi</th>
                    </tr>
					</thead>
					<tbody>
							<?php $no=1; 
					foreach($radmin->result() as $dtadmin){
					?>
					<tr>
						<td><?php echo $no;?></td>
						<td><?php echo $dtadmin->nama;?></td>
						<td><?php echo $dtadmin->username;?></td>
						<td><?php echo $dtadmin->id_access;?></td>
						<td><?php echo $dtadmin->status;?></td>
						<td><a href="<?php echo base_url();?>usermanager/edit/<?php echo $dtadmin->id_user;?>" class="btn btn-default btn-xs btn-fire"><span class="glyphicon glyphicon-fire"></span>Edit</a> | <a href="<?php echo base_url();?>produk/hapus/<?php echo $dtadmin->id_user;?>" class="btn btn-default btn-xs btn-minus"><span class="glyphicon glyphicon-minus"></span> Hapus</a></td>
					</tr>
					<?php
						$no++;
						}
					?>
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
                <h3 class="panel-title text-left">Data Seller </h3>
				<div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
              </div>
              <div class="panel-body">
               <div id="container">
					<table class="table text-center">
					<thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="Urutan" disabled></th>
						<th><input type="text" class="form-control" placeholder="Nama " disabled></th>
						<th><input type="text" class="form-control" placeholder="username" disabled></th>
						<th><input type="text" class="form-control" placeholder="id_acces" disabled></th>
						<th><input type="text" class="form-control" placeholder="status" disabled></th>
						 <th>Aksi</th>
                    </tr>
					</thead>
					<tbody>
							<?php $no=1; 
					foreach($sellerdata->result() as $dtseller){
					?>
					<tr>
						<td><?php echo $no;?></td>
						<td><?php echo $dtseller->nama;?></td>
						<td><?php echo $dtseller->username;?></td>
						<td><?php echo $dtseller->id_access;?></td>
						<td><?php echo $dtseller->status;?></td>
						<td><a href="<?php echo base_url();?>usermanager/edit/<?php echo $dtseller->id_user;?>" class="btn btn-default btn-xs btn-fire"><span class="glyphicon glyphicon-fire"></span>Edit</a> | <a href="<?php echo base_url();?>produk/hapus/<?php echo $dtadmin->id_user;?>" class="btn btn-default btn-xs btn-minus"><span class="glyphicon glyphicon-minus"></span> Hapus</a></td>
					</tr>
					<?php
						$no++;
						}
					?>
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
                <h3 class="panel-title text-left">Data Pelanggan </h3>
				<div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
              </div>
              <div class="panel-body">
               <div id="container">
					<table class="table text-center">
					<thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="Urutan" disabled></th>
						<th><input type="text" class="form-control" placeholder="Nama " disabled></th>
						<th><input type="text" class="form-control" placeholder="username" disabled></th>
						<th><input type="text" class="form-control" placeholder="id_acces" disabled></th>
						<th><input type="text" class="form-control" placeholder="status" disabled></th>
						 <th>Aksi</th>
                    </tr>
					</thead>
					<tbody>
							<?php $no=1; 
					foreach($memberdata->result() as $dtmember){
					?>
					<tr>
						<td><?php echo $no;?></td>
						<td><?php echo $dtmember->nama;?></td>
						<td><?php echo $dtmember->username;?></td>
						<td><?php echo $dtmember->id_access;?></td>
						<td><?php echo $dtmember->status;?></td>
						<td><a href="<?php echo base_url();?>usermanager/edit/<?php echo $dtmember->id_user;?>" class="btn btn-default btn-xs btn-fire"><span class="glyphicon glyphicon-fire"></span>Edit</a> | <a href="<?php echo base_url();?>usermanager/hapus/<?php echo $dtmember->id_user;?>" class="btn btn-default btn-xs btn-minus"><span class="glyphicon glyphicon-minus"></span> Hapus</a></td>
					</tr>
					<?php
						$no++;
						}
					?>
					</tbody>
				</table>
			   </div>
			   
              </div>
            </div>
          </div>
        </div><!-- /.row -->
</div>
Halaman : <?php echo $halaman;?>


 <!--  Modal content for the lion image example -->
  <div class="modal fade pop-up-2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel-2" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title" id="myLargeModalLabel-2">Tambah User Admin </h4>
        </div>
        <div class="modal-body">
						<table>
							<?php echo form_open("usermanager/add");?>
							<tr>
								<td ><b>Jenis Kelamin </b></td>
								<td><div class="input-group">
								<select name="jenis_kelamin" class="form-control" >
									<option value="Laki-laki"> Laki-laki</option>
									<option value="Perempuan"> Perempuan</option>
								</select>
								</div></td>
							</tr>
							<tr>
								<td ><b>Nama Lengkap</b></td>
								<td><div class="input-group"><input type="text" name="nama"  class="form-control" placeholder="nama lengkap" size="100" required></div></td>
							</tr>
							<tr>
								<td><b>Alamat</b></td>
								<td><div  class="input-group"><input type="text" name="alamat"  class="form-control"  placeholder=" alamat " size="100"required></div></td>
							</tr>
							<tr>
								<td><b>Email </b></td>
								<td><div  class="input-group"><input type="email" name="email" class="form-control" placeholder=" email" size="100"required></div></td>
							</tr>
							<tr>
								<td><b>Username</b></td>
								<td><div  class="input-group"><input type="text" name="username"  class="form-control" placeholder="isikan username"  size="100"required></div></td>
							</tr>
							<tr>
								<td><b>Password </b></td>
								<td><div class="input-group"><input type="password" name="password" class="form-control" placeholder="isikan password" size="100" required></div></td>
							</tr>
							<tr>
								<td ><b>Level </b></td>
								<td><div class="input-group">
								<select name="level" class="form-control" >
									<option value="1"> Administrator</option>
									<option value="2"> Seller</option>
								</select>
								</div></td>
							</tr>
							<tr>
							<td><input type="submit" id="btn-login" class="btn btn-success" Value="Tambah"> </input></td>
							</tr>
							  </form>
							</table>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal mixer image -->
