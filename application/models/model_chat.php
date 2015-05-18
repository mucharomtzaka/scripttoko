<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_chat extends CI_Model {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function getPesan()
	{
		$data = $this->db->query('select * from tbl_chat');
		$res = $data->result_array();
		$count = $data->num_rows();
		if($count>=1){
			 $data = $res;
			return $data;
		}else{
			$data='';
			return $data;
		}		
		

	}
	public function insertPesan($data)
	{
		$data = $this->db->insert('tbl_chat',$data);
		return $data;
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */