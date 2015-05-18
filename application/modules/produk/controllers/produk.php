<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends MX_Controller {

	/*
		
	*/
	 function __construct()
		{
			parent::__construct();
			$this->form_validation->CI =& $this;
		}

	public function index( $id='')
	{
	if($this->session->userdata('logged_in')!="")
		{
		if($this->session->userdata('id_level')==1){
			$data['judul_lengkap'] = $this->config->item('nama_aplikasi_full');
			$data['judul_pendek'] = $this->config->item('nama_aplikasi_pendek');
			$data['instansi'] = $this->config->item('nama_instansi');
			$data['credit'] = $this->config->item('credit_aplikasi');
			$data['alamat'] = $this->config->item('alamat_instansi');
			$data['selamat'] = ' Selamat Datang ';
			$data['username'] = $this->session->userdata('username');
			$data['status']  =$this->session->userdata('status');
			$data['id_user'] = $this->session->userdata('id_user');
			$data['kategori'] = $this->katalog_model->listkategori();
			$data['error']='';
			$data['prosedure'] ='<p> Administrator bertugas konfirmasi permintaan  produk yang telah di inputkan dari pihak seller <br> 
			status publis = 1 -> telah diterbitkan oleh pihak admin mediashop , 0 -> belum diterbitkan / belum dikonfirmasi oleh admin   </p>';
			
			$jml = $this->db->get('produk');

			//pengaturan pagination
			 $config['base_url'] = base_url().'produk/index';
			 $config['total_rows'] = $jml->num_rows();
			 $config['per_page'] = '5';
			 $config['first_page'] = 'Awal';
			 $config['last_page'] = 'Akhir';
			 $config['next_page'] = '«';
			 $config['prev_page'] = '»';

			//inisialisasi config
			 $this->pagination->initialize($config);

			//buat pagination
			 $data['halaman'] = $this->pagination->create_links();

			//tamplikan data

			$data['produk'] = $this->produk_model->Alldataproduk($config['per_page'],$id);
			
			$this->load->view('header');
			$this->load->view('naviadmin',$data);
			$this->load->view('produk',$data);
			$this->load->view('footbar',$data);
			$this->load->view('footer',$data);
			}else if( $this->session->userdata('id_level')==2){
					$data['judul_lengkap'] = $this->config->item('nama_aplikasi_full');
					$data['judul_pendek'] = $this->config->item('nama_aplikasi_pendek');
					$data['instansi'] = $this->config->item('nama_instansi');
					$data['credit'] = $this->config->item('credit_aplikasi');
					$data['alamat'] = $this->config->item('alamat_instansi');
					$data['selamat'] = ' Selamat Datang ';
					$data['username'] = $this->session->userdata('username');
					$data['id_user'] = $this->session->userdata('id_user');
					$data['status']  =$this->session->userdata('status');
					$data['error']='';
					$data['kategori'] = $this->katalog_model->listkategori();
					$data['prosedure'] = '<p>
					Catatan  : 
					 Seller hanya berlaku untuk input dan update isi produk  , Apabila Produk belum terpublikasikan  maka  Seller menghubungi  administrator agar  dapat di setujui 
					 Apabila produk telah  di setujui atau di konfirmasi pihak admin , maka produk  akan di terbitkan 	<br>
					  status publis = 1 -> telah diterbitkan oleh pihak admin mediashop , 0 -> belum diterbitkan / belum dikonfirmasi oleh admin 
					</p>';
					$jml = $this->db->get_where('produk',array('operator'=>$data['username']));

					//pengaturan pagination
					 $config['base_url'] = base_url().'produk/index';
					 $config['total_rows'] = $jml->num_rows();
					 $config['per_page'] = '5';
					 $config['first_page'] = 'Awal';
					 $config['last_page'] = 'Akhir';
					 $config['next_page'] = '«';
					 $config['prev_page'] = '»';

					//inisialisasi config
					 $this->pagination->initialize($config);

					//buat pagination
					 $data['halaman'] = $this->pagination->create_links();

					//tamplikan data

					$data['produk'] = $this->produk_model->dataproduk($config['per_page'],$id);
						
					$this->load->view('header');
					$this->load->view('navseller',$data);
					$this->load->view('produk',$data);
					$this->load->view('footbar',$data);
					$this->load->view('footer',$data);	
			}
		}
		else
		{
			header('location:'.base_url().'login');
		}
	}
	
	public function publish($id_produk){
			$this->produk_model->updatepublish($id_produk);
			redirect(base_url('produk/index'));
	}
	public function simpan(){
				$filename =  $_FILES['userfile']['name'];
				$config['upload_path']          = './assets/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 5000000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload())
                {
						$data= array('error' => $this->upload->display_errors());
					    redirect(base_url('produk/index?act='.$data['error'].''));
                }
                else
                {
                      $data = array('upload_data' => $this->upload->data());
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
					  $this->db->insert('produk',$data);
                      redirect(base_url('produk/index?act=datatersimpan'));
                }
	}
	public function hapus($id_produk){
		$this->db->where('id_produk', $id_produk);
		$this->db->delete('produk');
		redirect(base_url('produk/index'));
	}
	public function checklist(){
	
	}
	public function edit($id_produk){
		if($this->session->userdata('logged_in')!="")
		{
		if($this->session->userdata('id_level')==1){
			$data['judul_lengkap'] = $this->config->item('nama_aplikasi_full');
			$data['judul_pendek'] = $this->config->item('nama_aplikasi_pendek');
			$data['instansi'] = $this->config->item('nama_instansi');
			$data['credit'] = $this->config->item('credit_aplikasi');
			$data['alamat'] = $this->config->item('alamat_instansi');
			$data['selamat'] = ' Selamat Datang ';
			$data['username'] = $this->session->userdata('username');
			$data['status']  =$this->session->userdata('status');
			$data['id_user'] = $this->session->userdata('id_user');
			$data['kategori'] = $this->katalog_model->listkategori();
			$detail = $this->produk_model->detail($id_produk);
			foreach($detail->result() as $row){
				$data['id']  = $row->id_produk;
				$data['nama_produk']=$row->nama_produk;
				$data['harga'] = $row->harga_produk;
				$data['stok'] = $row->stock_produk;
				$data['desk'] = $row->desk_produk;
			}
			$data['error']='';
			$data['prosedure'] ='<p> Administrator bertugas konfirmasi permintaan  produk yang telah di inputkan dari pihak seller <br> 
			status publis = 1 -> telah diterbitkan oleh pihak admin mediashop , 0 -> belum diterbitkan / belum dikonfirmasi oleh admin   </p>';
			$this->load->view('header');
			$this->load->view('naviadmin',$data);
			$this->load->view('ubahproduk',$data);
			$this->load->view('footbar',$data);
			$this->load->view('footer',$data);
			}else if( $this->session->userdata('id_level')==2){
					$data['judul_lengkap'] = $this->config->item('nama_aplikasi_full');
					$data['judul_pendek'] = $this->config->item('nama_aplikasi_pendek');
					$data['instansi'] = $this->config->item('nama_instansi');
					$data['credit'] = $this->config->item('credit_aplikasi');
					$data['alamat'] = $this->config->item('alamat_instansi');
					$data['selamat'] = ' Selamat Datang ';
					$data['username'] = $this->session->userdata('username');
					$data['id_user'] = $this->session->userdata('id_user');
					$data['status']  =$this->session->userdata('status');
					$data['error']='';
					$data['kategori'] = $this->katalog_model->listkategori();
					$detail = $this->produk_model->detail($id_produk);
					foreach($detail->result() as $row){
							$data['id']  = $row->id_produk;
							$data['nama_produk']=$row->nama_produk;
							$data['harga'] = $row->harga_produk;
							$data['stok'] = $row->stock_produk;
							$data['desk'] = $row->desk_produk;
						}
					$data['prosedure'] = '<p>
					Catatan  : 
					 Seller hanya berlaku untuk input dan update isi produk  , Apabila Produk belum terpublikasikan  maka  Seller menghubungi  administrator agar  dapat di setujui 
					 Apabila produk telah  di setujui atau di konfirmasi pihak admin , maka produk  akan di terbitkan 	<br>
					  status publis = 1 -> telah diterbitkan oleh pihak admin mediashop , 0 -> belum diterbitkan / belum dikonfirmasi oleh admin 
					</p>';
						
					$this->load->view('header');
					$this->load->view('navseller',$data);
					$this->load->view('ubahproduk',$data);
					$this->load->view('footbar',$data);
					$this->load->view('footer',$data);	
			}
		}
		else
		{
			header('location:'.base_url().'login');
		}
	}
	
	public function update(){
				$filename =  $_FILES['userfile']['name'];
				$config['upload_path']          = './assets/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 5000000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload())
                {
						$data= array('error' => $this->upload->display_errors());
					    redirect(base_url('produk/index?act='.$data['error'].''));
                }
                else
                {
                      $cek = array('upload_data' => $this->upload->data());
					  $this->produk_model->updateproduk($filename);
                      redirect(base_url('produk/index?act=datatersimpan'));
			}
	}
}