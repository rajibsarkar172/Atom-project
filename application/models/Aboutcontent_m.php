<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Aboutcontent_m
 *
 * @author USER
 */
class Aboutcontent_m extends MY_Model{
    
    protected $_table_name = 'about_contants';
    protected $_order_by = 'id';
    public $rules = array(
        'title' => array(
                'field' => 'title', 
                'label' => 'Title', 
                'rules' => 'trim|required'
        ),
    );
    
    
    //put your code here
    public function get_new(){
        
        $aboutcontent = new stdClass();;
        $aboutcontent->id = '';
        $aboutcontent->title = '';
         $aboutcontent->sub_title = '';
        $aboutcontent->description = '';
        $aboutcontent->status = '';
        $aboutcontent->date = '';
        return $aboutcontent;
    }
    
    public function active_aboutcontent_count() {
        return $this->db->where('status <', 2)->count_all_results("about_contants");        
    }
    
    public function get_active_aboutcontent($limit, $start) {
        $this->db->select('id, title, status,sub_title');
        $this->db->where('status <', 2);
        $this->db->limit($limit, $start);
        return parent::get();
    }
    
    public function trashed_aboutcontent_count() {
        return $this->db->where('status', 2)->count_all_results("about_contants");        
    }
    
    public function get_trashed_aboutcontent($limit, $start) {
        $this->db->select('id, title, status,sub_title');
        $this->db->where('status', 2);
        $this->db->limit($limit, $start);
        return parent::get();
    }
    
    public function get_active_aboutcontents() {
        
        $this->db->select('id, title, status');
        $this->db->where('status <', 2);
        return parent::get();
        
    }
    
}
