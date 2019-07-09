<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$this->load->view('upload_form', array('error' => ' ' ));
	}

	public function movefile()
	{
		$config['upload_path']          = './vendor/script/images/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 500;
		/*$config['max_width']            = 1024;
		$config['max_height']           = 768;*/

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('userfile'))
		{
			print_r($config['upload_path']);
			print_r($this->upload->display_errors());
		}
		else{
			print_r($this->upload->data());
			die;
			$this->load->view('upload_success', $data);
		}
	}
	public function move(){
		if(!empty($_FILES)){
			print_r($_FILES);
			die;
		}
	}
}
?>

