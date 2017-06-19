<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Newletter_setting_m
 *
 * @author Mithucn
 */
class Contact_setting_m extends MY_Model {
    //put your code here
    //put your code here
     protected $_table_name = 'contact_setting';
    protected $_order_by = 'id';
    public $rules = array(
        'email' => array(
                'field' => 'email', 
                'label' => 'Email', 
                'rules' => 'trim|required|valid_email'
        ),        
    );
    
    
    //put your code here
    public function get_new(){
        
        $setting = new stdClass();;
        $setting->id = '';
        $setting->smtp_host = '';
        $setting->smtp_port = '';
        $setting->email = '';
        $setting->password = '';
        return $setting;
    }
    public function getSetting(){     
                return $this->db->select('*')->get($this->_table_name)->row();
    }
  
}
