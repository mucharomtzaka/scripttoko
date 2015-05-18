<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seller extends MX_Controller {

	/**
	 * Index Page for this controller.
	 
	 */
	 function __construct()
		{
			parent::__construct();
			
		}
	 
	public function index(){
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('id_level')== 2){
			$data['judul_lengkap'] = $this->config->item('nama_aplikasi_full');
			$data['judul_pendek'] = $this->config->item('nama_aplikasi_pendek');
			$data['instansi'] = $this->config->item('nama_instansi');
			$data['credit'] = $this->config->item('credit_aplikasi');
			$data['alamat'] = $this->config->item('alamat_instansi');
			$data['selamat'] = ' Selamat Datang ';
			$data['username'] = $this->session->userdata('username');
			$data['status']  =$this->session->userdata('status');
			$data['product'] =$this->katalog_model->ambildata();
			$data['kategori'] = $this->katalog_model->listkategori();
			$this->load->view('header');
			$this->load->view('navseller',$data);
			$this->load->view('welcome_message',$data);
			$this->load->view('footbar',$data);
			$this->load->view('footer',$data);
		}
		else{
			header('location:'.base_url().'login');
		}	
	}
	
	public  function profil_user(){
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('id_level')== 2){
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
			$data['product'] =$this->katalog_model->ambildata();
			$data['kategori'] = $this->katalog_model->listkategori();
			$this->load->view('header');
			$this->load->view('navseller',$data);
			$this->load->view('welcome_message',$data);
			$this->load->view('profil',$data);
			$this->load->view('footbar',$data);
			$this->load->view('footer',$data);
		}
		else{
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
	public function transaksi(){
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('id_level')== 2){
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
			
			$this->load->view('header');
			$this->load->view('navseller',$data);
			$this->load->view('transaksi',$data);
			$this->load->view('footbar',$data);
			$this->load->view('footer',$data);
		}
		else{
			header('location:'.base_url().'login');
		}
	}
}
