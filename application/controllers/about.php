<?php

defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('');
        $this->load->library('form_validation');
    }


   
        public function index()
        {
            $data['title']='About Us';
            
		$this->load->view('templates/user/header',$data);
        $this->load->view('about/index',$data);
		$this->load->view('templates/user/footer');
          
        }
    



    public function add()
   {}


    public function delete($id)
    {
       
    }

    public function edit($id)
   {}
   
  
}

