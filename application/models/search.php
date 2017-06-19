<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of search
 *
 * @author Rajib Sarkar
 */

class Search extends MY_Model


{
function get_search() {
  $match = $this->input->post(‘search’);
  $this->db->like(‘title’,$match);
  $this->db->or_like(‘description’,$match);
  $this->db->or_like(‘link’,$match);
  $this->db->or_like(‘type’,$match);
  $query = $this->db->get(‘services’);
  return $query->result();
}
}