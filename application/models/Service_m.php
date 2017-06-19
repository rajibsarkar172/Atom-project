<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Events_m
 *
 * @author USER
 */
class Service_m extends MY_Model{
    
    protected $_table_name = 'services';
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
        
        $event = new stdClass();;
        $event->id = '';
        $event->title = '';
        $event->sub_title = '';
        $event->description = '';
        $event->link = '';
        $event->orginal_picture = '';
        $event->thumb_picture = '';
        $event->banner_thumb_picture = '';
        $event->thumb_picture = '';
        $event->status = '';
        $event->date = '';
        $event->type = '';
        $event->show_menu = '';
        return $event;
    }
    
    public function active_event_count() {
        return $this->db->where('status <', 2)->count_all_results("services");        
    }
    
    public function get_active_event($limit, $start) {
        $this->db->select('id, title, status, thumb_picture, show_menu,type');
        $this->db->where('status <', 2);
        $this->db->limit($limit, $start);
        return parent::get();
    }
    
    public function trashed_event_count() {
        return $this->db->where('status', 2)->count_all_results("services");        
    }
    
    public function get_trashed_event($limit, $start) {
        $this->db->select('id, title, status, thumb_picture');
        $this->db->where('status', 2);
        $this->db->limit($limit, $start);
        return parent::get();
    }
    
    public function get_active_events() {
        
        $this->db->select('id, title, status');
        $this->db->where('status <', 2);
        return parent::get();
        
    }
    
}
