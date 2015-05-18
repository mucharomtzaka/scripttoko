<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cart extends MX_controller{
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
		$data['kode_transaksi'] = $this->katalog_model->getid_order();
		$this->load->view('header');
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
		$this->load->view('cart',$data);
		$this->load->view('katalog',$data);
		$this->load->view('footbar',$data);
		$this->load->view('footer',$data);
	}
	
	public function add($id_produk){
		$list= $this->db->query("SELECT `id_produk`, `nama_produk`, `harga_produk`, `stock_produk`, `desk_produk`, 
		`id_kategori`, `filename`, `location`,user.nama FROM `produk` join user on produk.id_user = user.id_user 
		WHERE id_produk=".$id_produk."");
		if($list->num_rows() > 0 ){
			foreach($list->result() as  $row){
			$data = array(
			'id' => $row->id_produk,
			'name'=> $row->nama_produk,
			'qty'=>1,
			'price'=> $row->harga_produk,
			'gambar'=>$row->location,
			'seller'=>$row->nama,
			'stock' =>$row->stock_produk
			);
			$this->cart->insert(array($data));
			}
			
		}
		redirect(base_url().'cart/index');
	}
	public  function konfirmasi (){
			$stok = $this->input->post('stok');
			$id= $this->input->post('id_produk');
			$cart = $this->cart->contents();
			/*  Insert Data  produk di tabel detail order */
			foreach($cart as $items){
					$data= array(
							'id_order' => $this->katalog_model->getid_order(),
							'id_produk' =>$items['id'],
							'jumlah'=>$items['qty'],
							'seller'=>$items['seller'],
							'harga_satuan'=>$items['price'],
							'nama_produk'=>$items['name']
						);
					$this->db->insert('order_detail',$data);
					}
			/*  Insert Data  order */		
			$data_order = array(
						'id_order' => $this->katalog_model->getid_order(),
						'tgl_order'=>date('Y-m-d H:i:s'),
						'total_bayar' =>$this->cart->total() ,
						'nama'=>$this->session->userdata('username'),
						'alamat'=>$this->input->post('alamat',true),
						'metode_bayar'=>$this->input->post('method_bayar',true)	
					);
					$this->db->insert('order_produk',$data_order);
					
				$total_stock = $stok - $data['jumlah'];
				/*  Update Data  produk */	
				
				
				/*-----------*/
					
					
					$this->cart->destroy();
					redirect(base_url().'katalog/index?act=belanja_lagi&order=dikirim');					
			  }
			  
	public function empty_cart() {
		   $this->cart->destroy();
		   redirect('cart');
	}
	public function remove($rowid){
			$data = array(
				'rowid'=>$rowid,
				'qty'=>0
			);
			$this->cart->update(array($data));
			 redirect(base_url('cart/index'));
	}
	
	public function ordernow(){
		$data['kode_transaksi'] = $this->katalog_model->getid_order();
		$data['username'] = $this->session->userdata('username');
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
		$data['kode_transaksi'] = $this->katalog_model->getid_order();
		if(empty($data['cart'])){
			 redirect(base_url('cart/index'));
		}
		if($this->session->userdata('logged_in')!=""){
		$this->load->view('header');
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
		$this->load->view('detail_order',$data);
		$this->load->view('katalog',$data);
		$this->load->view('footbar',$data);
		$this->load->view('footer',$data);
		}else{
			  header('location:'.base_url().'login');
		}
	}
}