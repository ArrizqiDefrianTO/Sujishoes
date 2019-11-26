<?php


class Product_model  extends CI_Model
{
    public function gettAllProduct()
    {


        return  $this->db->get('product')->result_array();
    }

    public function getProduct($limit, $start,$keyword= null)
    {

        if ($keyword) {
            $this->db->like('name', $keyword);
 
        }
        return $this->db->get('product', $limit, $start)->result_array();
    }

    public function countAllProduct()
    {

        return $this->db->get('product')->num_rows();
    }
}
