<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$data['title']='WPU User Login';
		$this->load->view('templates/user/header',$data);
		$this->load->view('home');
		$this->load->view('templates/user/footer');
	}
}
