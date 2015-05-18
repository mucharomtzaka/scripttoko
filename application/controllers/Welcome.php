<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 
	 */
	 function __construct()
		{
			parent::__construct();
			
		}
	 
	public function index($param='')
	{
		if($this->session->userdata('logged_in')!="")
		{
			if($this->session->userdata('id_level')==1){
				redirect(base_url('admin/index'));
			}else if($this->session->userdata('id_level')==2){
				redirect(base_url('seller/index'));
			}else if($this->session->userdata('id_level')==3){
				$this->beranda();
			}
		}else{
		$data['judul_lengkap'] = $this->config->item('nama_aplikasi_full');
		$data['judul'] = $this->config->item('nama_aplikasi_pendek');
		$data['instansi'] = $this->config->item('nama_instansi');
		$data['credit'] = $this->config->item('credit_aplikasi');
		$data['product'] =$this->katalog_model->all_data();
		$data['kategori'] = $this->katalog_model->listkategori();
		$data['username'] = $this->session->userdata('username');
		$data['status']  =$this->session->userdata('status');
		if($param == 'keluar')
			$param = 'Anda Telah Keluar Dari Mediashop';
		$data['keluar'] = $param;
		$data['total'] = $this->cart->total_items();
		$this->load->view('header');
		$this->load->view('navi',$data);
		$this->load->view('content',$data);
		$this->load->view('footbar',$data);
		$this->load->view('footer',$data);
		}
	}
	public function beranda(){
		redirect(base_url('beranda/index'));
	}
	public function admin(){
	    redirect(base_url('admin/index'));
	}
	public function seller(){
	    redirect(base_url('seller/index'));
	}
	public function berita(){
		redirect(base_url('berita/index'));
	}
	public function galeri(){
		redirect(base_url('galeri/index'));
	}
	public function katalog(){
		redirect(base_url('katalog/index'));
	}
	public function keranjang(){
		redirect(base_url('cart/index'));
	}
	public function group($nama_kategori){
		
	}
	
	function logout()
	{
		$this->session->sess_destroy();
		$this->db->update('logaccess',array('last_login'=>date('Y-m-d H:i:s')));
		header('location:'.base_url().'welcome/index?notice=keluar');
	}

}
