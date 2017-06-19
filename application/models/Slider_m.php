<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Slider_m
 *
 * @author USER
 */
class Slider_m extends MY_Model{
    
    protected $_table_name = 'sliders';
    protected $_order_by = 'id';
    public $rules = array(
        'title1' => array(
                'field' => 'title1', 
                'label' => 'Title 1', 
                'rules' => 'trim|required'
        ),
    );
    
    
    //put your code here
    public function get_new(){
        
        $slide = new stdClass();;
        $slide->id = '';
        $slide->title1 = '';
        $slide->type = '';
        $slide->link = '';
        $slide->orginal_picture = '';
        $slide->thumb_picture = '';
        $slide->status = '';
         $slide->set_banner = '';
        $slide->date = '';
        return $slide;
    }
    
    public function active_slide_count() {
        return $this->db->where('status <', 2)->count_all_results("sliders");        
    }
    
    public function get_active_slide($limit, $start) {
        $this->db->select('id, title1, status, type, thumb_picture,set_banner');
        $this->db->where('status <', 2);
        $this->db->limit($limit, $start);
        return parent::get();
    }
    
    public function trashed_slide_count() {
        return $this->db->where('status', 2)->count_all_results("sliders");        
    }
    
    public function get_trashed_slide($limit, $start) {
        $this->db->select('id, title1, status, type, thumb_picture');
        $this->db->where('status', 2);
        $this->db->limit($limit, $start);
        return parent::get();
    }
    
    public function get_active_slides() {
        
        $this->db->select('id, title1, status');
        $this->db->where('status <', 2);
        return parent::get();
        
    }
    
}
