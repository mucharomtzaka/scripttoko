<div class="container">
		<div class="row" id="kategori">
          <div class="col-lg-10">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title text-left">Selamat Datang Marketplace Mediashop</h3>
              </div>
              <div class="panel-body text-center">
               <div id="container">
				Ingin Berjualan di Marketplace Mediashop 
					<p>
						Daftarkan semua barang anda yang anda miliki . Anda yang mengatur harga barang anda .
					</p>
					<p>
						Anda pilih dan susun orderan anda dalam waktu 24 jam 
						Kami mengatur pengiriman dan membantu anda untuk memenuhi kepuasan pelanggan 
					</p>
					<p>
							Tidak ada biaya tambahan untuk pemeliharaan , hanya komisi  akses bebas untuk kategori alhi  dan pemasaran .
					</p>
			   </div>
              </div>
            </div>
          </div>
        </div><!-- /.row -->
</div>

<div class="container">
		<div class="row">
          <div class="col-lg-10">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title text-center">Daftar Hari ini </h3>
				<p class="text-center">untuk mendapatkan  pelatihan gratis guna meningkatkan penjualan online Anda !</p>
              </div>
              <div class="panel-body text-center">
               <div id="container ">
			   <a href="#" data-toggle="modal" data-target=".pop-up-2">
				  <button type="submit" class="btn btn-default">
					<span class="glyphicon glyphicon-sign up"></span>Jadilah SELLER MEDIASHOP 
					</button>
					</a>
			   </div>
              </div>
            </div>
          </div>
        </div><!-- /.row -->
</div>

 <!--  Modal content for the lion image example -->
  <div class="modal fade pop-up-2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel-2" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title" id="myLargeModalLabel-2">Pendaftaran SELLER MEDIASHOP</h4>
        </div>
        <div class="modal-body">
						<table>
							<?php echo form_open("login/daftarsell");?>
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
							<td><input type="hidden" name="member"  value="2"></td>
							<td><input type="submit" id="btn-login" class="btn btn-success" Value="DAFTAR"> </input></td>
							</tr>
							  </form>
							</table>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal mixer image -->