<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Uploader extends MX_Controller {

	/*
		
	*/
	 function __construct()
		{
			parent::__construct();
		}
		
	public function index(){
			  $this->load->view('upload', array('error' => ' ' ));
	}
	Public function upload_file(){
		$config['upload_path']          = './bootstrap/images/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload())
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $this->load->view('upload1', $data);
                }
        }
	
}
