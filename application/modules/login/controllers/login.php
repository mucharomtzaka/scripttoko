<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MX_Controller {
	 
	 function __construct()
		{
			parent::__construct();
			$this->form_validation->CI =& $this;
		}
	 
	public function index()
	{
		$data['judul_lengkap'] = $this->config->item('nama_aplikasi_full');
		$data['judul'] = $this->config->item('nama_aplikasi_pendek');
		$data['instansi'] = $this->config->item('nama_instansi');
		$data['credit'] = $this->config->item('credit_aplikasi');
		$data['total'] = $this->cart->total_items();
		$this->load->view('header');
		$this->load->view('navi',$data);
		$this->load->view('login',$data);
		$this->load->view('footbar');
		$this->load->view('footer',$data);
		
	}
	public function setlog(){
		
	if($this->session->userdata('logged_in')==""){
			
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			
			if ($this->form_validation->run() == FALSE){
				$this->index();
			}
			else
			{
				$data = array(
					'username' => $this->input->post('username',true),
					'password' => $this->input->post('password',true)
				);
				$this->access_model->do_login($data);
			}
		}else if($this->session->userdata('logged_in')!="" && $this->session->userdata('id_level')==1)
		{
			header('location:'.base_url().'welcome/admin');
		}
		else if($this->session->userdata('logged_in')!="" && $this->session->userdata('id_level')==2)
		{
			header('location:'.base_url().'welcome/seller');
		}
		else if($this->session->userdata('logged_in')!="" && $this->session->userdata('id_level')==3)
		{
			header('location:'.base_url().'welcome/beranda');
		}
	}
	
	public function daftar(){
				$data = array(
					'username' =>$this->input->post('username'),
					'password' => md5($this->input->post('password',true)),
					'nama'	=>$this->input->post('nama'),
					'email' =>$this->input->post('email'),
					'alamat'=>$this->input->post('alamat'),
					'id_access'=>$this->input->post('member'),
					'jenis_kelamin'=>$this->input->post('jenis_kelamin')
				);
				$this->db->insert("user",$data);
				header('location:'.base_url().'login?action=pendaftaran_sukses');
			}
	public function daftarsell(){
				$data = array(
					'username' =>$this->input->post('username'),
					'password' => md5($this->input->post('password',true)),
					'nama'	=>$this->input->post('nama'),
					'email' =>$this->input->post('email'),
					'alamat'=>$this->input->post('alamat'),
					'id_access'=>$this->input->post('member'),
					'jenis_kelamin'=>$this->input->post('jenis_kelamin')
				);
				$this->db->insert("user",$data);
				header('location:'.base_url().'login?action=pendaftaran_sukses');
	}
	
	function logout(){
		$this->session->sess_destroy();
		header('location:'.base_url().'');
	}
}