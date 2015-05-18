<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Access_model extends CI_Model {
	public  function __construct(){
			parent::__construct(); 	
			}
	
	public function do_login(){
		$data = $this->input->post(null,true);
		$is_login = $this->db->get_where('viewakses',array(
										'username'=>$data['username'],
										'password'=>md5(trim($data['password'])),
										))->row();
		if($is_login){
			$sess_data = array(
				'logged_in'	=> true,
				'nama'		=> $is_login->nama,
				'id_user'	=> $is_login->id_user,
				'username'	=> $is_login->username,
				'email' 	=> $is_login->email,
				'status'=> $is_login->nama_level,
				'id_level' => $is_login->id_level,
				'id_access'=> $is_login->id_access,
				'photo'      => $is_login->photo
			);
			$this->session->set_userdata($sess_data);
			$ip = $_SERVER['REMOTE_ADDR'];
			$browser = $_SERVER['HTTP_USER_AGENT'];
			$this->db->insert('logaccess',array('waktu_log'=>date('Y-m-d H:i:s'),'level'=>$is_login->nama_level,'username'=>$is_login->username,'IP'=>$ip,'Browser'=>$browser));
			redirect(base_url().'login/setlog');
		}else{
			
			$this->session->set_flashdata('result_login', "Maaf, kombinasi username dan password yang anda masukkan tidak valid dengan database kami.");
			header('location:'.base_url().'login/setlog');
		}
	}
	
	public function riwayatlog($num,$offset){
		$username = $this->session->userdata('username');
		$this->db->order_by('id_log', 'ASC');
		return  $this->db->get_where('logaccess',array('username'=>$username),$num,$offset);;
			
	}
	
	public function dataadmin($num,$offset){
		$id_access =1;
		$this->db->order_by('id_user', 'ASC');
		return  $this->db->get_where('user',array('id_access'=>$id_access),$num,$offset);;
	}
	
	public function dataseller($num,$offset){
		$id_access =2;
		$this->db->order_by('id_user', 'ASC');
		return  $this->db->get_where('user',array('id_access'=>$id_access),$num,$offset);;
	}
	
	public function datamember($num,$offset){
		$id_access =3;
		$this->db->order_by('id_user', 'ASC');
		return  $this->db->get_where('user',array('id_access'=>$id_access),$num,$offset);;
	}
	public function registerUser(){
		$data = array(
							'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
							'alamat'=>$this->input->post('alamat'),
							'email'=>$this->input->post('email'),
							'username'=>$this->input->post('username'),
							'password'=>md5($this->input->post('password')),
							'id_access'=>$this->input->post('level'),
							'nama'=>$this->input->post('nama')
						);
		$this->db->insert('user',$data);
	}
}