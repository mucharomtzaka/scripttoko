<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Katalog extends MX_Controller {
	public  function __construct(){
			parent::__construct(); 
			}
	public function index(){
		$data['judul_lengkap'] = $this->config->item('nama_aplikasi_full');
		$data['judul'] = $this->config->item('nama_aplikasi_pendek');
		$data['instansi'] = $this->config->item('nama_instansi');
		$data['credit'] = $this->config->item('credit_aplikasi');
		$data['product'] =$this->katalog_model->all_data();
		$data['kategori'] = $this->katalog_model->listkategori();
		$data['total'] = $this->cart->total_items();
		$data['username'] = $this->session->userdata('username');
		$this->load->view('header');
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('id_level')==1){
			$this->load->view('naviadmin',$data);
		}
		elseif($this->session->userdata('logged_in')!="" && $this->session->userdata('id_level')== 3){
				$this->load->view('navi2',$data);
		}else{
				$this->load->view('navi',$data);
		}
		$this->load->view('katalog',$data);
		$this->load->view('footbar',$data);
		$this->load->view('footer',$data);	
	}
	public function detail($id_produk){
	
		$data['judul_lengkap'] = $this->config->item('nama_aplikasi_full');
		$data['judul'] = $this->config->item('nama_aplikasi_pendek');
		$data['instansi'] = $this->config->item('nama_instansi');
		$data['credit'] = $this->config->item('credit_aplikasi');
		$data['product'] =$this->katalog_model->detailproduct($id_produk);
		$data['produk_recent']= $this->katalog_model->all_data();
		$data['kategori'] = $this->katalog_model->listkategori();
		$data['total'] = $this->cart->total_items();
		$data['username'] = $this->session->userdata('username');
		
		$this->load->view('header');
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('id_level')==1){
			$this->load->view('naviadmin',$data);
		}
		elseif($this->session->userdata('logged_in')!="" && $this->session->userdata('id_level')== 3){
				$this->load->view('navi2',$data);
		}else{
				$this->load->view('navi',$data);
		}
		$this->load->view('detailproduct',$data);
		$this->load->view('recent',$data);
		$this->load->view('footbar',$data);
		$this->load->view('footer',$data);	
	
	}
	
	
	

}