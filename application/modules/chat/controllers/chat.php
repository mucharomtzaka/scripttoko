<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Chat extends MX_Controller {
 function __construct()
		{
			parent::__construct();
			$this->form_validation->CI =& $this;
		}
	public function index()
	{
		$data = $this->model_chat->getPesan();
		
		$this->load->view('index1',array('data'=>$data));
	}
	public function tampil_pesan(){
		$data = $this->model_chat->getPesan();
		if ($data==''){
			echo "<span style='font-size:12px;color:gray;'>empty...</span>";
		}else{			
			foreach ($data as $key) {
				echo '<tr><td>'.$key['nama'].'</td><td>:&nbsp;'.$key['pesan'].'</td></tr>';
			}			
		}
	}
	public function insert_pesan(){
		$data = array(
			'nama'=>$_POST['nama'],
			'pesan'=>$_POST['pesan'],
			);
		$data = $this->model_chat->insertPesan($data);
		if($data >= 1){
			echo "<span style='color:green;'>pesan terkirim...</span>";
			//redirect('chat/tampil_pesan');
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */