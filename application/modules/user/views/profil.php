<div class="container">
		<div class="row" id="kategori">
          <div class="col-lg-10">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title text-left"> Panel Kontrol Akun </h3>
              </div>
              <div class="panel-body">
			  <p> Dari Panel kontrol Akun. Anda dapat melihat detail akun,aktivitas terakhir dan memperbaharui informasi akun anda .</p>
			  <p> Pilih Panel dibawah ini untuk melihat atau mengubah informasi </p>
               <div id="container">
				 <div id="container text-left">
				 
				<table class="table" colspan="2">
				<tr>
					<td>ID User</td>
					<td>:</td>
					<td><?php echo $id_user;?></td>
				</tr>
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
				<tr>
					<td>Password</td>
					<td>:</td>
					<td><input type= "password" value="<?php echo $katakey;?>" disabled="yes"></td>
				</tr>
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
          </div>
        </div><!-- /.row -->
</div>
