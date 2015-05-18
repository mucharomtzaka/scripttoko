<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends MX_Controller {

	/**
	
	 
	 */
	 function __construct()
		{
			parent::__construct();
			
		}
	 
	public function index(){
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('id_level')== 3){
			$data['judul_lengkap'] = $this->config->item('nama_aplikasi_full');
			$data['judul_pendek'] = $this->config->item('nama_aplikasi_pendek');
			$data['instansi'] = $this->config->item('nama_instansi');
			$data['credit'] = $this->config->item('credit_aplikasi');
			$data['alamat'] = $this->config->item('alamat_instansi');
			$data['selamat'] = ' Selamat Datang ';
			$data['username'] = $this->session->userdata('username');
			$data['product'] =$this->katalog_model->ambildata();
			$data['kategori'] = $this->katalog_model->listkategori();
			$data['total'] = $this->cart->total_items();
			$this->load->view('header');
			$this->load->view('navi2',$data);
			$this->load->view('welcome_message',$data);
			$this->load->view('content',$data);
			$this->load->view('footbar',$data);
			$this->load->view('footer',$data);
		}
		else{
			header('location:'.base_url().'login');
		}	
	}
	
	public  function profil_user(){
		redirect(base_url('user/index'));
	}
	public  function history(){
		redirect(base_url('histori/index'));
	}
	public function payment(){
			redirect(base_url('payment/index'));
	}	
}
