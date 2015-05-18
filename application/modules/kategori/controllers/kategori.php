<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends MX_Controller {

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
			
			$jml = $this->db->get('kategori_produk');

			//pengaturan pagination
			 $config['base_url'] = base_url().'kategori/index';
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

			$data['kategori'] = $this->katalog_model->kategori($config['per_page'],$id);
			
			$this->load->view('header');
			$this->load->view('naviadmin',$data);
			$this->load->view('kategori',$data);
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
					$jml = $this->db->get('kategori_produk');

						//pengaturan pagination
						 $config['base_url'] = base_url().'kategori/index';
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

						$data['kategori'] = $this->katalog_model->kategori($config['per_page'],$id);
					$this->load->view('header');
					$this->load->view('navseller',$data);
					$this->load->view('kategori',$data);
					$this->load->view('footbar',$data);
					$this->load->view('footer',$data);	
			}
			
		}
		else
		{
			header('location:'.base_url().'login');
		}
	}

	public function simpan(){
	$data =array(
				'nama_kategori'=>$this->input->post('nama_kategori'),
				'desk_kategori'=>$this->input->post('deskripsi')
		);
	$this->db->insert('kategori_produk',$data);
	redirect(base_url('kategori/index?act=simpandata'));
	}
	

	
	
	
}
