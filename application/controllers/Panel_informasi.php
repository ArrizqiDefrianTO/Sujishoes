<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Panel_informasi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('');
        $this->load->library('form_validation');
    }


   
        public function index()
        {
            $data['title']='Suji shoes';
            
		$this->load->view('templates/user/header',$data);
        $this->load->view('panel_informasi/index',$data);
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

