<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login
 *
 * @author Hasib
 */
class Login extends Admin_Controller{
    
    function __construct() {
        
        parent::__construct();
        
        $this->form_validation->set_error_delimiters("<div class='alert alert-warning'>", '</div>');
        
         /* Get Settings */
        $this->data['setting'] = $this->setting->get(4);
        
    }

    //put your code here
    public function index($id = NULL) {
        // Redirect a user if he's already logged in
        $dashboard = 'index';
        
        if($this->session->userdata('id') && $this->session->userdata('status') == 1){
            redirect("admin/panel");
        }
        
        // Set form
        $rules = $this->login->rules_login;
        $this->form_validation->set_rules($rules);

        // Process form
        if ($this->form_validation->run() == TRUE) {
           
            if($this->login->login() == TRUE && $this->session->userdata('status') == 1){

               redirect("admin/panel");
                
                
            } else {
              
                $msg['message']="<div class='alert alert-danger'>Account not active or not invalid.</div>";
                $this->session->set_flashdata($msg);
                redirect('login', 'refresh');
                
            }
        }

        // Load view
        $this->load->view('public/login/index', $this->data);
        
    }
    
    public function logout ()
    {
        $this->login->logout();
        redirect('login');
    }
    
}
