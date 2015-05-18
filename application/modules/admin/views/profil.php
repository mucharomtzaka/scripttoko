<div class="container">
		<div class="row" id="kategori">
          <div class="col-lg-10">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title text-left">Profil User </h3>
              </div>
              <div class="panel-body">
               <div id="container text-left">
				<table class="table" colspan="2">
				<tr>
					<td>Nama </td>
					<td>:</td>
					<td><?php echo $nama;?></td>
				</tr>
				<tr>
					<td>Email </td>
					<td>:</td>
					<td><?php echo $mail;?></td>
				</tr>
				<tr>
					<td>Level</td>
					<td>:</td>
					<td><?php echo $status;?></td>
				</tr>
					<td>Username</td>
					<td>:</td>
					<td><?php echo $username;?></td>
				</table>
				<div class="panel panel-primary">
					<div class="panel-heading">
						<a href="#" class="panel-title text-left"> <button>UPDATE INFO</button></a>
					</div>
					
				</div>
			   </div>
                
              </div>
            </div>
          </div>
        </div><!-- /.row -->
</div>
