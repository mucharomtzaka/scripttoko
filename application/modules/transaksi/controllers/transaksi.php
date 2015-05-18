<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends MX_Controller {

	/*
		
	*/
	 function __construct()
		{
			parent::__construct();
			$this->form_validation->CI =& $this;
		}
		
		public function index( $id='')
	{
	if($this->session->userdata('logged_in')!="")
		{
		if($this->session->userdata('id_level')==1){
			$data['judul_lengkap'] = $this->config->item('nama_aplikasi_full');
			$data['judul_pendek'] = $this->config->item('nama_aplikasi_pendek');
			$data['instansi'] = $this->config->item('nama_instansi');
			$data['credit'] = $this->config->item('credit_aplikasi');
			$data['alamat'] = $this->config->item('alamat_instansi');
			$data['selamat'] = ' Selamat Datang ';
			$data['username'] = $this->session->userdata('username');
			$data['status']  =$this->session->userdata('status');
			$data['id_user'] = $this->session->userdata('id_user');
			$data['error']='';
			$data['prosedure'] ='<p> Administrator bertugas konfirmasi permintaan  produk yang telah di inputkan dari pihak seller <br> 
					Seller harus konfirmasi jadwal pengiriman barang yang telah dipesan oleh client dan  memberitahu  berita acara pemesanan </p>';
			
			$jml = $this->db->get('order_produk');

			//pengaturan pagination
			 $config['base_url'] = base_url().'transaksi/index';
			 $config['total_rows'] = $jml->num_rows();
			 $config['per_page'] = '5';
			 $config['first_page'] = 'Awal';
			 $config['last_page'] = 'Akhir';
			 $config['next_page'] = '«';
			 $config['prev_page'] = '»';

			//inisialisasi config
			 $this->pagination->initialize($config);

			//buat pagination
			 $data['halaman'] = $this->pagination->create_links();

			//tamplikan data

			$data['transaksi'] = $this->produk_model->datatransaksi($config['per_page'],$id);
			$this->load->view('header');
			$this->load->view('naviadmin',$data);
			$this->load->view('transaksi',$data);
			$this->load->view('footbar',$data);
			$this->load->view('footer',$data);
			}else if( $this->session->userdata('id_level')==2){
					$data['judul_lengkap'] = $this->config->item('nama_aplikasi_full');
					$data['judul_pendek'] = $this->config->item('nama_aplikasi_pendek');
					$data['instansi'] = $this->config->item('nama_instansi');
					$data['credit'] = $this->config->item('credit_aplikasi');
					$data['alamat'] = $this->config->item('alamat_instansi');
					$data['selamat'] = ' Selamat Datang ';
					$data['username'] = $this->session->userdata('username');
					$data['id_user'] = $this->session->userdata('id_user');
					$data['status']  =$this->session->userdata('status');
					$data['error']='';
					$data['prosedure'] = '<p>
					Catatan  : 
					 Seller hanya berlaku untuk input dan update isi produk  , Apabila Produk belum terpublikasikan  maka  Seller menghubungi  administrator agar  dapat di setujui 
					 Apabila produk telah  di setujui atau di konfirmasi pihak admin , maka produk  akan di terbitkan 	<br>
					  status publis = 1 -> telah diterbitkan oleh pihak admin mediashop , 0 -> belum diterbitkan / belum dikonfirmasi oleh admin 
					</p>';
					$jml = $this->db->get('order_produk',array('operator'=>$data['username']));

					//pengaturan pagination
					 $config['base_url'] = base_url().'transaksi/index';
					 $config['total_rows'] = $jml->num_rows();
					 $config['per_page'] = '5';
					 $config['first_page'] = 'Awal';
					 $config['last_page'] = 'Akhir';
					 $config['next_page'] = '«';
					 $config['prev_page'] = '»';

			//inisialisasi config
			 $this->pagination->initialize($config);

			//buat pagination
			 $data['halaman'] = $this->pagination->create_links();

			//tamplikan data

			$data['transaksi'] = $this->produk_model->datatransaksi($config['per_page'],$id);
					$this->load->view('header');	
					$this->load->view('navseller',$data);
					$this->load->view('transaksi',$data);
					$this->load->view('footbar',$data);
					$this->load->view('footer',$data);	
			}
		}
		else
		{
			header('location:'.base_url().'login');
		}
	}
	public function hapus($id_order){
		$this->db->delete('order_produk',array('id_order'=>$id_order));
		$this->db->delete('order_detail',array('id_order'=>$id_order));
		redirect(base_url('transaksi/index'));
	}
	public function detail($id_order){
					$data['id'] = $id_order;
					$data['judul_lengkap'] = $this->config->item('nama_aplikasi_full');
					$data['judul_pendek'] = $this->config->item('nama_aplikasi_pendek');
					$data['instansi'] = $this->config->item('nama_instansi');
					$data['credit'] = $this->config->item('credit_aplikasi');
					$data['alamat'] = $this->config->item('alamat_instansi');
					$data['selamat'] = ' Selamat Datang ';
					$data['username'] = $this->session->userdata('username');
					$data['id_user'] = $this->session->userdata('id_user');
					$data['status']  =$this->session->userdata('status');
					$data['error']='';
					$data['cart'] = $this->cart->contents();
					$data['order_detail']=$this->produk_model->detail_order($id_order);
				
					$this->load->view('header');
						if($this->session->userdata('id_level')==1){
							$this->load->view('naviadmin',$data);
						}else if($this->session->userdata('id_level')==2) {
							$this->load->view('navseller',$data);
						}
					$this->load->view('detailtransaksi',$data);
					$this->load->view('footbar',$data);
					$this->load->view('footer',$data);
	}

	public function datakonfirm($id=''){
		if($this->session->userdata('id_level')==1){
			$data['judul_lengkap'] = $this->config->item('nama_aplikasi_full');
			$data['judul_pendek'] = $this->config->item('nama_aplikasi_pendek');
			$data['instansi'] = $this->config->item('nama_instansi');
			$data['credit'] = $this->config->item('credit_aplikasi');
			$data['alamat'] = $this->config->item('alamat_instansi');
			$data['selamat'] = ' Selamat Datang ';
			$data['username'] = $this->session->userdata('username');
			$data['status']  =$this->session->userdata('status');
			$data['id_user'] = $this->session->userdata('id_user');
			$data['error']='';
			
			
			$jml = $this->db->get('pembayaran',array());

			//pengaturan pagination
			 $config['base_url'] = base_url().'transaksi/datakonfirm';
			 $config['total_rows'] = $jml->num_rows();
			 $config['per_page'] = '5';
			 $config['first_page'] = 'Awal';
			 $config['last_page'] = 'Akhir';
			 $config['next_page'] = '«';
			 $config['prev_page'] = '»';

			//inisialisasi config
			 $this->pagination->initialize($config);

			//buat pagination
			 $data['halaman'] = $this->pagination->create_links();

			//tamplikan data

			$data['datakon'] = $this->produk_model->datakonfirm($config['per_page'],$id);
			$this->load->view('header');
			$this->load->view('naviadmin',$data);
			$this->load->view('konfirm',$data);
			$this->load->view('footbar',$data);
			$this->load->view('footer',$data);	
		}

	}

}