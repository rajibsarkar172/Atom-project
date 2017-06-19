<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Aboutcontent
 *
 * @author USER
 */
class Aboutcontent extends Admin_Controller{
    
    private $error;
    private $success;
    
    public function __construct() {
        parent::__construct();
        
        $this->file_path = realpath(APPPATH . '../uploads/aboutcontent/');
        $this->upload_path = 'uploads/aboutcontent/';
        
        $this->form_validation->set_error_delimiters('<dd class="error">', '</dd>');  
                
        if($this->session->userdata('user_type') != 'Administrator'){
            redirect('index');
        }
        
        /* Get Settings */
        $this->data['setting'] = $this->setting->get(4);
    }
    
    //put your code here
    private function handle_error($err) {
        $this->error .= $err . "\r\n";
    }

    private function handle_success($succ) {
        $this->success .= $succ . "\r\n";
    }
    
    public function index() {
        $this->create();
    }
    
    public function create($id = NULL) {
        
        $this->data['aboutcontents'] = $this->aboutcontent->get_active_aboutcontents();
        
        if($id){
            $this->data['aboutcontent'] = $this->aboutcontent->get($id);
            
            if($this->data['aboutcontent']){
                $this->data['aboutcontent'];
            } else {
                redirect('admin/aboutcontent/create');
            }
            
        } else {
            $this->data['aboutcontent'] = $this->aboutcontent->get_new($id);
        }
        
        // Set up the form
        $rules = $this->aboutcontent->rules;
        $this->form_validation->set_rules($rules);

        // Process the form
        if ($this->form_validation->run() == TRUE) {

            $data['title'] = $this->input->post('title');
            $data['sub_title'] = $this->input->post('sub_title');
            
            $data['description'] = $this->input->post('description');
            
            if($this->input->post('date') != ''){
            $data['date'] = $this->input->post('date');
            } else {
            $data['date'] = date('Y-m-d');    
            }
            
            if($this->input->post('status') != ''){
                $data['status'] = $this->input->post('status'); 
            } else {
                $data['status'] = 0;                   
            }
            
            $resp = $this->aboutcontent->save($data, $id);
            
            $lastid = $this->db->insert_id();

            if ($resp === TRUE) {
                $this->handle_error('<div class="alert alert-danger">Error while saving file info to Database.</div>');
            } else {
                $this->handle_success('<div class="alert alert-success">Save Data Successfully.</div>');
            }
            
            $this->session->set_flashdata('n_error', $this->error);
            $this->session->set_flashdata('success', $this->success);
            
            if($id){
                
                redirect('admin/aboutcontent/create/'.$id);            
            
            } else {
            
                redirect('admin/aboutcontent/create');
            }
            
        }

        // Load the view
        $this->data['sub_view'] = 'panel/aboutcontent/add';
        $this->load->view('panel/common/_layout_main', $this->data);
    }
    
    
    
    public function manage() {
        
        $config = array();
        $config["base_url"] = base_url() . "admin/aboutcontent/manage";
        $config["total_rows"] = $this->aboutcontent->active_aboutcontent_count();
        $config["per_page"] = 15;
        $config["uri_segment"] = 4;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&gt;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="current"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';

        $config['first_link'] = '&lt;&lt;';
        $config['last_link'] = '&gt;&gt;';
        
 
        $this->pagination->initialize($config);
 
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $this->data["aboutcontents"] = $this->aboutcontent->get_active_aboutcontent($config["per_page"], $page);
        $this->data["links"] = $this->pagination->create_links();
        
        // Load the view
        $this->data['sub_view'] = 'panel/aboutcontent/manage';
        $this->load->view('panel/common/_layout_main', $this->data);
    }
    
    public function delete() {
        
        $id = $this->input->post('id');
        $data['status'] = $this->input->post('status');
        
        $result = $this->aboutcontent->get($id);
        
        if($result->status == 1){
            echo 'error';
        } else {
            $resp = $this->aboutcontent->save($data, $id);
            echo 'success';
        }
        
    }
    
    
    public function trash(){
        
        $config = array();
        $config["base_url"] = base_url() . "admin/aboutcontent/trash";
        $config["total_rows"] = $this->aboutcontent->trashed_aboutcontent_count();
        $config["per_page"] = 15;
        $config["uri_segment"] = 4;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&gt;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="current"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';

        $config['first_link'] = '&lt;&lt;';
        $config['last_link'] = '&gt;&gt;';
        
 
        $this->pagination->initialize($config);
 
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $this->data["aboutcontents"] = $this->aboutcontent->get_trashed_aboutcontent($config["per_page"], $page);
        $this->data["links"] = $this->pagination->create_links();
        
        //$this->data['users'] = $this->aboutcontent->get_by(['status' => 2]);
        
        // Load the view
        $this->data['sub_view'] = 'panel/aboutcontent/manage_trash';
        $this->load->view('panel/common/_layout_main', $this->data);
    }
    
    public function undo($id){
        $data['status'] = 0;       
        
        $resp = $this->aboutcontent->save($data, $id);

        $this->handle_success('<div class="alert alert-success">Undo Header Content Successfully</div>');

        $this->session->set_flashdata('success', $this->success);
        
        // Load the view
        redirect('admin/aboutcontent/trash');
    }
    
    public function remove($id){
        $resp = $this->aboutcontent->delete($id);

        $this->handle_success('<div class="alert alert-danger">Remove Header Content Parmanently</div>');

        $this->session->set_flashdata('success', $this->success);

        // Load the view
        redirect('admin/aboutcontent/trash');
    }
    
    public function changestatus() {
        
        $id = $this->input->post('id');       
        $data['status'] = $this->input->post('status');   
        
        if($data['status'] != 0){
            $posts = $this->aboutcontent->get_by(['status' => 1]);
            
            if(count($posts) >= 1){
                
                echo json_encode(array("message" => '<div class="alert alert-danger">already active '.count($posts).' Post</div>', "type" => "error"));
                
            } else {
                $resp = $this->aboutcontent->save($data, $id);
                echo json_encode(array("message" => '<div class="alert alert-success">Activated Content Successfully</div>', "type" => "success"));
            }            
        } else {
            $resp = $this->aboutcontent->save($data, $id);
            echo json_encode(array("message" => '<div class="alert alert-danger">Deactivated Content Successfully</div>', "type" => "success"));
        } 
        
    }
    
}
