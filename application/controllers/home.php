<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	
	public function index()
	{
        $data['title']='Suji Shoes';
        $this->load->model('Product_model','product_m');

        // load library
        $this->load->library('pagination');

        // ambil data keyword pencarian
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        // config
        $this->db->like('name', $data['keyword']);
        $this->db->from('product');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 8;
	
	
        // initialize
        $this->pagination->initialize($config);

       
        $data['start'] = $this->uri->segment(3);
        $data['product'] = $this->product_m->getProduct($config['per_page'], $data['start'], $data['keyword']);

		$this->load->view('templates/user/header',$data);
		$this->load->view('home/index',$data);
		$this->load->view('templates/user/footer');
	}
}
