<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Headercontent
 *
 * @author USER
 */
class Features extends Admin_Controller{
    
    private $error;
    private $success;
    
    public function __construct() {
        parent::__construct();
        
        $this->file_path = realpath(APPPATH . '../uploads/features/');
        $this->upload_path = 'uploads/features/';
        
        $this->form_validation->set_error_delimiters('<dd class="error">', '</dd>');  
                
        if ($this->session->userdata('user_type') != 'Administrator') {
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
        
        $this->data['features'] = $this->features->get_active_features();
        
        if($id){
            $this->data['feature'] = $this->features->get($id);
            
            if($this->data['feature']){
                $this->data['feature'];
            } else {
                redirect('admin/features/create');
            }
            
        } else {
            $this->data['feature'] = $this->features->get_new();
        }
        
        // Set up the form
        $rules = $this->features->rules;
        $this->form_validation->set_rules($rules);

        // Process the form
        if ($this->form_validation->run() == TRUE) {
            
            if(!$this->input->post('orginal_picture')){
                if ($_FILES['userfile']['size'] > 0) {
                    $config = array(
                        'allowed_types' => 'jpg|jpeg|png',
                        'upload_path' => $this->file_path,
                        'max_size' => 10000
                    );

                    $this->load->library('upload', $config);
                    $this->upload->do_upload();
                    $image_data = $this->upload->data();

                    $config = array(
                        'source_image' => $image_data['full_path'],
                        'new_image' => $this->file_path . '/thumbs',
                        'maintain_ration' => false,
                        'width' => 300,
                        'height' => 160
                    );

                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize();	

                    $data['orginal_picture'] = $this->upload_path.$image_data["file_name"];
                    $data['thumb_picture'] = $this->upload_path.'thumbs/'.$image_data["file_name"];
                } 
            }

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
            
            $resp = $this->features->save($data, $id);
            
            $lastid = $this->db->insert_id();

            if ($resp === TRUE) {
                $this->handle_error('<div class="alert alert-danger">Error while saving file info to Database.</div>');
            } else {
                $this->handle_success('<div class="alert alert-success">Save Data Successfully.</div>');
            }
            
            $this->session->set_flashdata('n_error', $this->error);
            $this->session->set_flashdata('success', $this->success);
            
            if($id){
                
                redirect('admin/features/create/'.$id);            
            
            } else {
            
                redirect('admin/features/create');
            }
            
        }

        // Load the view
        $this->data['sub_view'] = 'panel/features/add';
        $this->load->view('panel/common/_layout_main', $this->data);
    }
    
    public function removeimage($id) {
        
        $result = $this->features->get($id);
        
        $orginal_picture = $result->orginal_picture;
        $thumb_picture = $result->thumb_picture;
        
        if (is_readable($orginal_picture) && unlink($orginal_picture)) {
            //echo "The file has been deleted";
        }
        
        if (is_readable($thumb_picture) && unlink($thumb_picture)) {
            //echo "The file has been deleted";
        }
        
        $data['orginal_picture'] = '';
        $data['thumb_picture'] = '';
        
        $resp = $this->features->save($data, $id);

        $this->handle_success('<div class="alert alert-success">Remove Image Successfully.</div>');
        
        $this->session->set_flashdata('success', $this->success);

        // Load the view
        redirect('admin/features/create/'.$id);
        
    }
    
    public function manage() {
        
        $config = array();
        $config["base_url"] = base_url() . "admin/features/manage";
        $config["total_rows"] = $this->features->active_features_count();
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
        $this->data["features"] = $this->features->get_active_feature($config["per_page"], $page);
        $this->data["links"] = $this->pagination->create_links();
        
        // Load the view
        $this->data['sub_view'] = 'panel/features/manage';
        $this->load->view('panel/common/_layout_main', $this->data);
    }
    
    public function delete() {
        
        $id = $this->input->post('id');
        $data['status'] = $this->input->post('status');
        
        $result = $this->features->get($id);
        
        if($result->status == 1){
            $data['status'] = 'error';
            echo json_encode($data);
        } else {
            $resp = $this->features->save($data, $id);
            $data['status'] = 'success';
            echo json_encode($data);
        }
        
    }
    
    
    public function trash(){
        
        $config = array();
        $config["base_url"] = base_url() . "admin/features/trash";
        $config["total_rows"] = $this->features->trashed_features_count();
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
        $this->data["featuress"] = $this->features->get_trashed_features($config["per_page"], $page);
        $this->data["links"] = $this->pagination->create_links();
        
        //$this->data['users'] = $this->features->get_by(['status' => 2]);
        
        // Load the view
        $this->data['sub_view'] = 'panel/features/manage_trash';
        $this->load->view('panel/common/_layout_main', $this->data);
    }
    
    public function undo($id){
        $data['status'] = 0;       
        
        $resp = $this->features->save($data, $id);

        $this->handle_success('<div class="alert alert-success">Undo Header Content Successfully</div>');

        $this->session->set_flashdata('success', $this->success);
        
        // Load the view
        redirect('admin/features/trash');
    }
    
    public function remove($id){
        $result = $this->features->get($id);
        
        $orginal_picture = $result->orginal_picture;
        $thumb_picture = $result->thumb_picture;
        
        if (is_readable($orginal_picture) && unlink($orginal_picture)) {
            //echo "The file has been deleted";
        }
        
        if (is_readable($thumb_picture) && unlink($thumb_picture)) {
            //echo "The file has been deleted";
        }
        
        $resp = $this->features->delete($id);

        $this->handle_success('<div class="alert alert-danger">Remove Header Content Parmanently</div>');

        $this->session->set_flashdata('success', $this->success);

        // Load the view
        redirect('admin/features/trash');
    }
    
    public function changestatus() {
        
        $id = $this->input->post('id');       
        $data['status'] = $this->input->post('status');   
        
        if($data['status'] != 0){
            $posts = $this->features->get_by(['status' => 1]);
            
            if(count($posts) >= 10){
                
                echo json_encode(array("message" => '<div class="alert alert-danger">already active '.count($posts).' Post</div>', "type" => "error"));
                
            } else {
                $resp = $this->features->save($data, $id);
                echo json_encode(array("message" => '<div class="alert alert-success">Activated Content Successfully</div>', "type" => "success"));
            }            
        } else {
            $resp = $this->features->save($data, $id);
            echo json_encode(array("message" => '<div class="alert alert-danger">Deactivated Content Successfully</div>', "type" => "success"));
        } 
        
    }
    
}
