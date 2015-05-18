<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Usermanager extends MX_Controller {

	/*
		
	*/
	 function __construct()
		{
			parent::__construct();
			$this->form_validation->CI =& $this;
		}

	public function index($id='')
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('id_level')==1)
		{
			$data['judul_lengkap'] = $this->config->item('nama_aplikasi_full');
			$data['judul_pendek'] = $this->config->item('nama_aplikasi_pendek');
			$data['instansi'] = $this->config->item('nama_instansi');
			$data['credit'] = $this->config->item('credit_aplikasi');
			$data['alamat'] = $this->config->item('alamat_instansi');
			$data['selamat'] = ' Selamat Datang ';
			$data['username'] = $this->session->userdata('username');
			$data['status']  =$this->session->userdata('status');
			
			$jml = $this->db->get_where('user',array('id_access'=>1));

			//pengaturan pagination
			 $config['base_url'] = base_url().'usermanager/index';
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
			 $data['radmin'] = $this->access_model->dataadmin($config['per_page'],$id);
			 $data['sellerdata']=$this->access_model->dataseller($config['per_page'],$id);
			 $data['memberdata']=$this->access_model->datamember($config['per_page'],$id);
			$this->load->view('header');
			$this->load->view('naviadmin',$data);
			$this->load->view('admin',$data);
			$this->load->view('footbar',$data);
			$this->load->view('footer',$data);
		}
		else
		{
			header('location:'.base_url().'login');
		}
	}
	public function seller()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('id_level')==1)
		{
			$data['judul_lengkap'] = $this->config->item('nama_aplikasi_full');
			$data['judul_pendek'] = $this->config->item('nama_aplikasi_pendek');
			$data['instansi'] = $this->config->item('nama_instansi');
			$data['credit'] = $this->config->item('credit_aplikasi');
			$data['alamat'] = $this->config->item('alamat_instansi');
			$data['selamat'] = ' Selamat Datang ';
			$data['username'] = $this->session->userdata('username');
			$data['status']  =$this->session->userdata('status');
			$this->load->view('header');
			$this->load->view('naviadmin',$data);
			$this->load->view('seller',$data);
			$this->load->view('footbar',$data);
			$this->load->view('footer',$data);
		}
		else
		{
			header('location:'.base_url().'login');
		}
	}
	public function member()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('id_level')==1)
		{
			$data['judul_lengkap'] = $this->config->item('nama_aplikasi_full');
			$data['judul_pendek'] = $this->config->item('nama_aplikasi_pendek');
			$data['instansi'] = $this->config->item('nama_instansi');
			$data['credit'] = $this->config->item('credit_aplikasi');
			$data['alamat'] = $this->config->item('alamat_instansi');
			$data['selamat'] = ' Selamat Datang ';
			$data['username'] = $this->session->userdata('username');
			$data['status']  =$this->session->userdata('status');
			$this->load->view('header');
			$this->load->view('naviadmin',$data);
			$this->load->view('member',$data);
			$this->load->view('footbar',$data);
			$this->load->view('footer',$data);
		}
		else
		{
			header('location:'.base_url().'login');
		}
	}
	
	public function add(){
		$this->access_model->registerUser();
		redirect(base_url('usermanager/index?notice=simpandata'));
	}
	
}

/* End of file admin.php */
/* Location: ./application/modules/controllers/admin.php */