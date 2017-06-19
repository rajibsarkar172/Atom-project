<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Displayg_m
 *
 * @author USER
 */
class Displayg_m extends MY_Model{
    
    protected $_table_name = 'gallery_div';
    protected $_order_by = 'id';
    /*public $rules = array(
        'title' => array(
                'field' => 'title', 
                'label' => 'Title', 
                'rules' => 'trim|required'
        ),
    );*/
    
    //put your code here
    public function get_divs() {
        $this->db->select('gallery_div.id, gallery_div.image_id, gallery_div.div_class, gallery_div.image_type');        
        $this->db->select('gallery_images.orginal_picture');
        $this->db->join('gallery_images','gallery_images.id = gallery_div.image_id', 'left');
        $this->db->order_by('gallery_div.id', 'ASC');
        return parent::get();
    }
}
