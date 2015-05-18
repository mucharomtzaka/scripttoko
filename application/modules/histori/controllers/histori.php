<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Histori extends MX_Controller {

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
			
			$jml = $this->db->get_where('logaccess',array('username'=>$data['username']));

			//pengaturan pagination
			 $config['base_url'] = base_url().'histori/index';
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

			$data['riwayat'] = $this->access_model->riwayatlog($config['per_page'],$id);
			
			$this->load->view('header');
			$this->load->view('naviadmin',$data);
			$this->load->view('riwayat',$data);
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
					$data['status']  =$this->session->userdata('status');
					$data['product'] =$this->katalog_model->ambildata();
					$jml = $this->db->get_where('logaccess',array('username'=>$data['username']));

					//pengaturan pagination
					 $config['base_url'] = base_url().'histori/index';
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

					$data['riwayat'] = $this->access_model->riwayatlog($config['per_page'],$id);
						
					$this->load->view('header');
					$this->load->view('navseller',$data);
					$this->load->view('riwayat',$data);
					$this->load->view('footbar',$data);
					$this->load->view('footer',$data);	
			}else if( $this->session->userdata('id_level')==3){
					$data['judul_lengkap'] = $this->config->item('nama_aplikasi_full');
					$data['judul_pendek'] = $this->config->item('nama_aplikasi_pendek');
					$data['instansi'] = $this->config->item('nama_instansi');
					$data['credit'] = $this->config->item('credit_aplikasi');
					$data['alamat'] = $this->config->item('alamat_instansi');
					$data['selamat'] = ' Selamat Datang ';
					$data['username'] = $this->session->userdata('username');
					$data['status']  =$this->session->userdata('status');
					$data['product'] =$this->katalog_model->ambildata();
					$data['total'] = $this->cart->total_items();
					$jml = $this->db->get_where('logaccess',array('username'=>$data['username']));

					//pengaturan pagination
					 $config['base_url'] = base_url().'histori/index';
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

					$data['riwayat'] = $this->access_model->riwayatlog($config['per_page'],$id);
						
					$this->load->view('header');
					$this->load->view('navi2',$data);
					$this->load->view('riwayat',$data);
					$this->load->view('footbar',$data);
					$this->load->view('footer',$data);	
			}
			
		}
		else
		{
			header('location:'.base_url().'login');
		}
	}

		public function hapus($id_log){
			$this->db->delete('logaccess',array('id_log'=>$id_log));
			redirect(base_url('histori/index'));
		}
	
	

	
	
	
}
