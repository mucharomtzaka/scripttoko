<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends MX_Controller {

	/*
		
	*/
	 function __construct()
		{
			parent::__construct();
			$this->form_validation->CI =& $this;
		}
		
		public function index(){
			$d= $this->input->post('search');
			$data['judul_lengkap'] = $this->config->item('nama_aplikasi_full');
			$data['judul_pendek'] = $this->config->item('nama_aplikasi_pendek');
			$data['instansi'] = $this->config->item('nama_instansi');
			$data['credit'] = $this->config->item('credit_aplikasi');
			$data['alamat'] = $this->config->item('alamat_instansi');
			$data['selamat'] = ' Selamat Datang ';
			$data['username'] = $this->session->userdata('username');
			$data['status']  =$this->session->userdata('status');
			$data['cart'] = $this->cart->contents();
			$data['total'] = $this->cart->total_items();
					if($this->session->userdata('logged_in')!="" && $this->session->userdata('id_level')== 3){
						$this->load->view('navi2',$data);
				}else{
						$this->load->view('navi',$data);
				}
				if(!$data['cart']){
					$data['message']='<p><b> Isi keranjang Belanja anda Masih Kosong !</b> <a href='.base_url().'>Lanjutkan pemesanan </a></p>';
				}else{
					$data['message']=$this->session->flashdata('message');
				}
				$this->db->select('*');
				$this->db->from('cari_produk');
				$getData = $this->db->get('');
				$a = $getData->num_rows();
				$config['base_url'] = base_url().'search/index?search/'.$this->input->post('search').''; //set the base url for pagination
				$config['total_rows'] = $a; //total rows
				$config['per_page'] = '5'; //the number of per page for pagination
				$config['uri_segment'] = 3; //see from base_url. 3 for this case
				$config['num_links'] = 2;
				$config['full_tag_open'] = '<p>';
				$config['full_tag_close'] = '</p>';
				$this->pagination->initialize($config); //initialize pagination
		
			$this->load->view('header');
			$data['cari_produk'] = $this->katalog_model->SearchResult($config['per_page'],$this->uri->segment(3),$d);
			$this->load->view('pencarian',$data);
			$this->load->view('footbar',$data);
			$this->load->view('footer',$data);
			
		}
		
}