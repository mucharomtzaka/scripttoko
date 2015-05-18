
<div class="container">
		<div class="row" id="datatransaksi">
          <div class="col-lg-10">
            <div class="panel panel-primary filterable">
			<div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
              <div class="panel-heading">
                <h3 class="panel-title text-left">DATA KONFIRMASI PEMBAYARAN</h3>
              </div>
              <div class="panel-body">
               <div id="container">
                <table class="table">
                  <thead>
                    <tr  class="filters">
                       <th><input type="text" class="form-control" placeholder="NO" disabled></th>
                      <th><input type="text" class="form-control" placeholder="Bank Tujuan" disabled></th>
                      <th><input type="text" class="form-control" placeholder="Nama Pengirim  " disabled></th>
                      <th><input type="text" class="form-control" placeholder="Bank Asal" disabled></th>
                      <th><input type="text" class="form-control" placeholder="Tanggal Transfer" disabled></th>
                      <th><input type="text" class="form-control" placeholder="Id_order" disabled></th>
                      <th><input type="text" class="form-control" placeholder="Jumlah Bayar" disabled></th>
                      <th><input type="text" class="form-control" placeholder="Metode Bayar" disabled></th>
                      <th><input type="text" class="form-control" placeholder="Berkas" disabled></th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                               <?php if(count($datakon) > 0  ){ ?>
                    <?php  $no=1;
                        foreach($datakon->result() as $dtTransaksi){?>
                        
                      <tr>
                      <td><?php echo $no;?></td>
                      <td><?php echo $dtTransaksi->bank_tujuan;?></td>
                      <td><?php echo $dtTransaksi->nama_rekening;?></td>
                      <td><?php echo $dtTransaksi->bank_asal;?></td>
                      <td><?php echo $dtTransaksi->tgl_bayar;?></td>
                      <td><?php echo $dtTransaksi->id_order;?></td>
                      <td><?php echo $dtTransaksi->jumlah_bayar;?></td>
                      <td><?php echo $dtTransaksi->metode_bayar;?></td>
                      <td><?php echo $dtTransaksi->berkas;?></td>
                      <td>
                      <a href="<?php echo base_url('transaksi/hapus_pembayaran/'.$dtTransaksi->id_bayar.'');?>">
                      <button type="button" class="btn btn-default">
                      <span class="glyphicon glyphicon-minus"></span>HAPUS
                      </button>
                      </a></td>
                      </tr>
                    <?php   
                          $no++;
                        } ?>
                      Halaman : <?php echo $halaman;?> <br>
                    <?php }else{?>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td rowspan="9"><h3 class="panel-title text-center">DATA TRANSAKSI TIDAK ADA LAPORAN  </h3></td>
                      <td></td>
                      <td></td>
                        </tr>
                    <?php }?>
                  </tbody>
                </table>
               </div>
				</div> 
				</div>
				</div> 
</div>