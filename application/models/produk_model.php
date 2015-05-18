<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Produk_model extends CI_Model {
	public  function __construct(){
			parent::__construct(); 	
			}
	public function dataproduk($num,$offset){
		$username = $this->session->userdata('username');
		$this->db->order_by('id_produk', 'DESC');
		return  $this->db->get_where('produk',array('operator'=>$username),$num,$offset);;
			
	}
	
	public function Alldataproduk($num,$offset){
		$this->db->order_by('id_produk', 'DESC');
		return  $this->db->get('produk',$num,$offset);;
			
	}
	public function updatepublish($id_produk){
			$this->db->where('id_produk',$id_produk);
		return $this->db->update('produk',array('publikasi'=>1));
	}
	public function countdataAccessoris(){
			$data= $this->db->query("SELECT count(id_kategori) AS Accessories FROM `cari_produk` where `nama_kategori` = 'accessories' ")->result_array();
			
		return $data;
	}
	public function countdataGadget(){
			$data = $this->db->query("SELECT count(id_kategori)  As Gadget FROM `cari_produk` where `nama_kategori` = 'gadget' ")->result_array();
			return $data;
	}
	public function countdataTravel(){
			$data = $this->db->query("SELECT count(id_kategori)  As Travel FROM `cari_produk` where `nama_kategori` = 'travel' ")->result_array();
			return $data;
	}
	public function  countdataHotel(){
			$data = $this->db->query("SELECT count(id_kategori)  As Hotel FROM `cari_produk` where `nama_kategori` = 'hotel' ")->result_array();
			return $data;
	}
	public function detail($id_produk){
			
			return $this->db->get_where('produk',array('id_produk'=>$id_produk));
	}
	public function datatransaksi($num,$offset){
		$this->db->order_by('id_order', 'DESC');
		return  $this->db->get('order_produk',$num,$offset);
	}
	public function datakonfirm($num,$offset){
		$this->db->order_by('id_bayar', 'DESC');
		return  $this->db->get('pembayaran',$num,$offset);
	}
	public function detail_order($id_order){
			$SQL= $this->db->get_where("order_detail",array('id_order'=>$id_order));
			return $SQL;
		
	}
	public function updateproduk($filename){
					$data = array(
										'nama_produk'=>$this->input->post('nama_produk'),
										'harga_produk'=>$this->input->post('harga'),
										'stock_produk'=>$this->input->post('stok'),
										'id_kategori'=>$this->input->post('kategori'),
										'operator'=>$this->input->post('username'),
										'id_user'=>$this->input->post('id_user'),
										'desk_produk'=>$this->input->post('deskripsi'),
										'publikasi'=>$this->input->post('publikasi'),
										'location'=>'assets/'.$filename,
										'filename'=>$filename
								);
					  $this->db->replace('produk',$data,array('id_produk'=>$id_produk));
	}
	public function kategori(){
		return $this->db->query("SELECT `nama_kategori` AS kategori FROM `kategori_produk`")->result_array();
	}
}