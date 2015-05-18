
<div class="container">
		<div class="row" id="inputbox">
          <div class="col-lg-10">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title text-left"><?php echo $judul;?></h3>
              </div>
              <div class="panel-body">
               <div id="container">
                <p> <?php echo $notice;?></p>
                <?php echo $error;?>
				<?php echo form_open_multipart("payment/simpan");?>
						<table class="table">
							<tr>
                  <td>No.order</td>
                  <td>:</td>
                  <td><input type="text" name="id_order" id="id_order" required></td>
              </tr>
              <tr>
                  <td>Bank Tujuan</td>
                  <td>:</td>
                  <td>
                      <select name="bank_tujuan" id="bank_tujuan">
                        <option value="">pilih bank</option>
                        <option value="Mandiri">Mandiri</option>
                        <option value="BNI">BNI</option>
                        <option value="BCA">BCA</option>
                      </select>
                  </td>
              </tr>
              <tr>
                  <td>Bank Asal</td>
                  <td>:</td>
                  <td><input type="text" name="bank_asal" id="bank_asal" required></td>
              </tr>
               <tr>
                  <td>Nama Pengirim </td>
                  <td>:</td>
                  <td><input type="text" name="nama" id="nama"required></td>
              </tr>
               <tr>
                  <td>NO_rekening</td>
                  <td>:</td>
                  <td><input type="text" name="no_rek" id="no_rek" required></td>
              </tr>
               <tr>
                  <td>Nominal Transfer</td>
                  <td>:</td>
                  <td><input type="text" name="nominal" id="nominal" required></td>
              </tr>
               <tr>
                  <td>Tanggal Transfer</td>
                  <td>:</td>
                  <td><input type="date" name="tgl_bayar" id="tgl_bayar" required></td>
              </tr>
               <tr>
                  <td>Metode Transfer</td>
                  <td>:</td>
                  <td><select name="metode" id="metode">
                    <option value="">Pilih Metode</option>
                     <option value="ATM">ATM</option>
                      <option value="E-banking">E-Banking</option>
                       <option value="Counter bank">Counter Bank</option>
                        <option value="M-banking">M-Banking</option>
                  </select></td>
              </tr>
              <tr>
                  <td>File transferan:</td>
                  <td></td>
                  <td><input type="file" name="userfile" id="userfile"></td>
              </tr>
               <tr>
                  <td colspan="2"></td>
                  <td><input type="submit" name="simpan" value="Konfirmasi">
                      <input type="button" name="batal" value="batal" onclick="self.history.back();">
                  </td>
              </tr>
						</table>   	
				</form>
			   </div>
              </div>
            </div>
          </div>
        </div><!-- /.row -->
</div>

