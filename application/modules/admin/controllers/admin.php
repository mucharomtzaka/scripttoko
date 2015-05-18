<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MX_Controller {

	/*
		
	*/
	 function __construct()
		{
			parent::__construct();
			$this->form_validation->CI =& $this;
		}

	public function index()
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
			$data['listkategori'] = $this->produk_model->kategori();
			$data['Accessories']=$this->produk_model->countdataAccessoris();
			$data['Gadget']=$this->produk_model->countdataGadget();
			$data['Travel']=$this->produk_model->countdataTravel();
			$data['Hotel']=$this->produk_model->countdataHotel();
			$this->load->view('header');
			$this->load->view('naviadmin',$data);
			$this->load->view('welcome_message',$data);
			$this->load->view('content_admin',$data);
			$this->load->view('footbar',$data);
			$this->load->view('footer',$data);
		}
		else
		{
			header('location:'.base_url().'login');
		}
	}
	
	public function get_penjualan(){
		
	}

	public function cari()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('id_level')== 1 ){
			$data['judul_lengkap'] = $this->config->item('nama_aplikasi_full');
			$data['judul_pendek'] = $this->config->item('nama_aplikasi_pendek');
			$data['instansi'] = $this->config->item('nama_instansi');
			$data['credit'] = $this->config->item('credit_aplikasi');
			$data['alamat'] = $this->config->item('alamat_instansi');
			$data['username'] = $this->session->userdata('username');
			$this->load->view('header');
			$this->load->view('naviadmin');
			$this->load->view('login',$data);
			$this->load->view('footbar');
			$this->load->view('footer',$data);
		}else{
			header('location:'.base_url().'login');
		}		
	}
	
	public  function profil_user(){
	
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('id_level')==1)
		{
			$data['judul_lengkap'] = $this->config->item('nama_aplikasi_full');
			$data['judul_pendek'] = $this->config->item('nama_aplikasi_pendek');
			$data['instansi'] = $this->config->item('nama_instansi');
			$data['credit'] = $this->config->item('credit_aplikasi');
			$data['alamat'] = $this->config->item('alamat_instansi');
			$data['selamat'] = ' Selamat Datang ';
			$data['id_user'] =$this->session->userdata('id_user');
			$data['username'] = $this->session->userdata('username');
			$data['nama']  = $this->session->userdata('nama');
			$data['status']  = $this->session->userdata('status');
			$data['mail']  = $this->session->userdata('email');
			$data['katakey']=$this->session->userdata('password');
			$this->load->view('header');
			$this->load->view('naviadmin',$data);
			$this->load->view('profil',$data);
			$this->load->view('footbar',$data);
			$this->load->view('footer',$data);
		}
		else
		{
			header('location:'.base_url().'login');
		}
		
	}
	
	public function kategori(){
	redirect(base_url('kategori/index'));
	
	}
	public function history(){
	redirect(base_url('histori/index'));
	
	}
	public function produk(){
	redirect(base_url('produk/index'));
	}
	
	public function katalog(){
	
	redirect(base_url('katalog/index'));
	}
	public  function transaksi(){
	redirect(base_url('transaksi/index'));
	}
	
}

/* End of file admin.php */
/* Location: ./application/modules/controllers/admin.php */