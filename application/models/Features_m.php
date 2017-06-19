<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Headercontent_m
 *
 * @author USER
 */
class Features_m extends MY_Model{
    
    protected $_table_name = 'features';
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
        
        $feature = new stdClass();
        $feature->id = '';
        $feature->title = '';
        $feature->sub_title = '';
        $feature->description = '';
        $feature->orginal_picture = '';
        $feature->thumb_picture = '';
        $feature->status = '';
        $feature->date = '';
        return $feature;
    }
    
    public function active_features_count() {
        return $this->db->where('status <', 2)->count_all_results("features");        
    }
    
    public function get_active_feature($limit, $start) {
        $this->db->select('id, title, status, thumb_picture');
        $this->db->where('status <', 2);
        $this->db->limit($limit, $start);
        return parent::get();
    }
    
    public function trashed_features_count() {
        return $this->db->where('status', 2)->count_all_results("features");        
    }
    
    public function get_trashed_features($limit, $start) {
        $this->db->select('id, title, status, thumb_picture');
        $this->db->where('status', 2);
        $this->db->limit($limit, $start);
        return parent::get();
    }
    
    public function get_active_features() {
        
        $this->db->select('id, title, status, thumb_picture ,description');
        $this->db->where('status <', 2);
        return parent::get();
        
    }
    
}
