<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User_m
 *
 * @author USER
 */
class User_m extends MY_Model{
    protected $_table_name = 'users';
    protected $_order_by = 'id';
    public $rules_update = array(
        'username' => array(
                'field' => 'username', 
                'label' => 'User Name', 
                'rules' => 'trim|required'
        ), 
    );
    public $rules = array(
        'username' => array(
                'field' => 'username', 
                'label' => 'User Name', 
                'rules' => 'trim|required|is_unique[users.username]'
        ), 
        'password' => array(
                'field' => 'password', 
                'label' => 'Password', 
                'rules' => 'trim|required|xss_clean'
        ),
    );
    
    
    //put your code here
    public function get_new(){
        
        $user = new stdClass();;
        $user->id = '';
        $user->full_name = '';
        $user->username = '';
        $user->password = '';
        $user->email = '';
        $user->contact_no = '';
        $user->address = '';
        $user->orginal_picture = '';
        $user->thumb_picture = '';
        $user->remark = '';
        $user->user_type = '';
        $user->status = '';
        $user->date = '';
        return $user;
    }
    
    public function active_user_count() {
        return $this->db->where('status <', 2)->count_all_results("users");        
    }
    
    public function get_active_users($limit, $start) {
        $this->db->select('id, full_name, username, user_type, status');
        $this->db->where('status <', 2);
        $this->db->where('id >', 1);
        $this->db->limit($limit, $start);
        return parent::get();
    }
    
    public function trashed_user_count() {
        return $this->db->where('status', 2)->count_all_results("users");        
    }
    
    public function get_trashed_users($limit, $start) {
        $this->db->select('id, full_name, username, user_type, status');
        $this->db->where('status', 2);
        $this->db->where('id >', 1);
        $this->db->limit($limit, $start);
        return parent::get();
    }
    
    public function get_active_user() {
        
        $this->db->select('id, full_name, username, user_type, status');
        $this->db->where('status <', 2);
        $this->db->where('id >', 1);
        return parent::get();
        
    }

    public function hash ($string)
    {
        return hash('sha512', $string . config_item('encryption_key'));
    }
    
}
