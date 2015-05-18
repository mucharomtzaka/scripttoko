
<div class="container">
		<div class="row" id="kategori">
          <div class="col-lg-10">
            <div class="panel panel-primary filterable">
              <div class="panel-heading">
                <h3 class="panel-title text-left">Data Riwayat</h3>
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
                        <th><input type="text" class="form-control" placeholder="Time login " disabled></th>
                        <th><input type="text" class="form-control" placeholder="Time logout" disabled></th>
						<th><input type="text" class="form-control" placeholder="Level" disabled></th>
						<th><input type="text" class="form-control" placeholder="Username" disabled></th>
						<th>IP Address</th>
						<th>Browser</th>
						 <th>Aksi</th>
                    </tr>
					</thead>
					<tbody>
					<?php $no=1; 
					foreach($riwayat->result() as $dtriwayat){
					?>
					<tr>
						<td><?php echo $no;?></td>
						<td><?php echo $dtriwayat->waktu_log;?></td>
						<td><?php echo $dtriwayat->last_login;?></td>
						<td><?php echo $dtriwayat->level;?></td>
						<td><?php echo $dtriwayat->username;?></td>
						<td><?php echo $dtriwayat->IP;?></td>
						<td><?php echo $dtriwayat->Browser;?></td>
						
						<td><a href="<?php echo base_url('histori/hapus/'.$dtriwayat->id_log.'');?>" class="btn btn-default btn-xs btn-minus"><span class="glyphicon glyphicon-minus"></span> Hapus</a></td>
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

