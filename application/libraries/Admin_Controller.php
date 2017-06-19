<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin_Controller
 *
 * @author Hasib
 */
class Admin_Controller extends MY_Controller{
    
    function __construct() {
        
        parent::__construct();
        ini_set('memory_limit', "5000M");
        $this->data['meta_title'] = '';
        $this->load->helper('form');
        $this->load->helper('text');
        $this->load->helper('date');
        $this->load->helper('security');
        $this->load->library('form_validation'); 
        $this->load->library('encrypt');
        $this->load->library('session');
        $this->load->model('Login_m', 'login');
        $this->load->model('User_m', 'user');
        $this->load->model('Slider_m', 'slider');
        $this->load->model('features_m', 'features');
        $this->load->model('Aboutcontent_m', 'aboutcontent');
        $this->load->model('Contact_setting_m', 'contact_setting');
        $this->load->model('Settings_m','setting');  
        $this->load->model('Service_m', 'services');
        $this->load->model('Displayg_m', 'displayg');
        //$this->load->model('galleryfile_m', 'galleryfile');
        
        // Login check
        $exception_uris = array(
            'login'
        );
        
        if (in_array(uri_string(), $exception_uris) == FALSE) {
            if ($this->login->loggedin() == FALSE) {
                redirect('login');
            }
        }
        
    }
    
    //put your code here
    
    
}
