<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends MX_Controller {

	/*
		
	*/
	 function __construct()
		{
			parent::__construct();
			$this->form_validation->CI =& $this;
		}

		public function index(){
			$data['notice']='';
			$data['judul'] ='Konfirmasi Transfer Bank  Pembayaran disini agar dapat kami proses segera ';
			$data['notice'] = 'Terima Kasih telah berbelanja di mediashop ! Bila anda telah melakukan pembayaran';
			$data['judul_lengkap'] = $this->config->item('nama_aplikasi_full');
			$data['judul_pendek'] = $this->config->item('nama_aplikasi_pendek');
			$data['instansi'] = $this->config->item('nama_instansi');
			$data['credit'] = $this->config->item('credit_aplikasi');
			$data['alamat'] = $this->config->item('alamat_instansi');
			$data['selamat'] = ' Selamat Datang ';
			$data['username'] = $this->session->userdata('username');
			$data['status']  =$this->session->userdata('status');
			$data['error'] ='';
			$data['cart'] = $this->cart->contents();
			$data['total'] = $this->cart->total_items();
			$this->load->view('header');
			$this->load->view('navi2',$data);
			$this->load->view('pembayaran',$data);
			$this->load->view('footer',$data);

		}

		public function simpan(){
				$filename =$_FILES['userfile']['name'];
				$config['upload_path']          = './assets/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
                $this->load->library('upload', $config);
               	 if ( ! $this->upload->do_upload())
                {
                    	$data= array('error' => $this->upload->display_errors());
                        redirect(base_url('payment/index?act='.$data['error'].''));
                }
                else
                {
                	 $data = array('upload_data' => $this->upload->data());

                	$data = array(
                			'bank_tujuan'=>$this->input->post('bank_tujuan'),
                			'bank_asal'=>$this->input->post('bank_asal'),
                			'no_rekening'=>$this->input->post('no_rek'),
                			'nama_rekening'=>$this->input->post('nama'),
                			'id_order'=>$this->input->post('id_order'),
                			'jumlah_bayar'=>$this->input->post('nominal'),
                			'tgl_bayar'=>$this->input->post('tgl_bayar'),
                			'metode_bayar'=>$this->input->post('metode'),
                			'berkas'=>$filename
                		);
                		$this->db->insert('pembayaran',$data);
                	 	redirect(base_url('payment/index?act=Konfirmasi_telah_dikirim'));
                	}
				
		}
}