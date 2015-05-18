<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Katalog_model extends CI_Model {
	public  function __construct(){
	
			parent::__construct(); 
			
			}
	public function ambildata(){
		 $sql = "SELECT * FROM produk,kategori_produk where produk.id_kategori=kategori_produk.id_kategori ORDER BY produk.id_produk";
		 return $this->db->query($sql);	
	}
	public function display_chart(){
		$sql = " SELECT produk.id_produk, produk.nama_produk,produk.harga_produk,produk.stock_produk,kategori_produk.id_kategori,kategori_produk.nama_kategori,produk.filename,
produk.location,produk.id_user,produk.publikasi,produk.operator,produk.desk_produk  from  produk  join kategori_produk on produk.id_kategori = kategori_produk.id_kategori  order by produk.id_produk 
DESC ";
		return $this->db->query($sql);	
	}
	
	 public function SearchResult($perPage,$uri,$d='') {
		$this->db->select('*');
		$this->db->from('cari_produk');
		if ($d != '')
			$this->db->like ('nama_produk',$d);
		$this->db->order_by('id_produk','DESC');
		$getData = $this->db->get('', $perPage, $uri);
		if($getData->num_rows() > 0)
		return $getData->result_array();
		else
		return null;
    }

	
	public function kategori($num, $offset){
		$this->db->order_by('id_kategori', 'ASC');
		return  $this->db->get('kategori_produk', $num, $offset);
	}
	public function listkategori(){
		$sql=" SELECT  *  FROM kategori_produk";
		return  $this->db->query($sql);
	}
	
	public function all_data(){
		$sql = "SELECT * FROM produk  WHERE `publikasi`=1  ORDER BY `id_produk` DESC ";
		return $this->db->query($sql);	
	}
	public function detailproduct($id_produk){
		$sql = "SELECT `id_produk`, `nama_produk`, `harga_produk`, `stock_produk`, `desk_produk`, 
		`id_kategori`, `filename`, `location`,user.nama FROM `produk` join user on produk.id_user = user.id_user 
		WHERE id_produk=".$id_produk."";
		return $this->db->query($sql);	
	}
	
	public  function getid_order(){
		$query= $this->db->query("SELECT MAX(id_order) as id_order FROM order_produk");
		foreach($query->result() as $kode ){
			$kode_transaksi = $kode->id_order;
		}
		$noUrut = (int) substr($kode_transaksi,2,3);
		$noUrut++;
		$char = "TR";
		 return $newID = $char.sprintf("%03s",$noUrut);	
	}

}