<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Contact_us extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('');
        $this->load->library('form_validation');
    }


   
        public function index()
        {
            $data['title']='Contatc Us';
            
		$this->load->view('templates/user/header',$data);
        $this->load->view('contact/index',$data);
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

