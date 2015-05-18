<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Marketplace extends MX_controller{
	function __construct()
		{
			parent::__construct();
			
		}
	public function index(){
		$data['judul_lengkap'] = $this->config->item('nama_aplikasi_full');
		$data['judul'] = $this->config->item('nama_aplikasi_pendek');
		$data['instansi'] = $this->config->item('nama_instansi');
		$data['credit'] = $this->config->item('credit_aplikasi');
		$data['product'] =$this->katalog_model->ambildata();
		$data['kategori'] = $this->katalog_model->listkategori();
		$data['peringatan'] ='';
		$data['username'] = $this->session->userdata('username');
		$data['cart'] = $this->cart->contents();
		$data['total'] = $this->cart->total_items();
		$this->load->view('header');
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('id_level')== 2){
				$this->load->view('naviseller',$data);
		}else{
				$this->load->view('navi',$data);
		}
		$this->load->view('market',$data);
		$this->load->view('footbar',$data);
		$this->load->view('footer',$data);
	}
}