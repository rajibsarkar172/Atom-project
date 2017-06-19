<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Slider
 *
 * @author USER
 */
class Slider extends Admin_Controller{
    
    private $error;
    private $success;
    
    public function __construct() {
        parent::__construct();
        
        if ($this->session->userdata('user_type') != 'Administrator') {
            redirect('index');
        }
       
        $this->file_path = realpath(APPPATH . '../uploads/slider/');
        $this->upload_path = 'uploads/slider/';
        
        $this->form_validation->set_error_delimiters('<dd class="error">', '</dd>'); 
                
        /* Get Settings */
        $this->data['setting'] = $this->setting->get(4);
                  
        $this->load->library('image_lib');
    }
    
    //put your code here
    private function handle_error($err) {
        $this->error .= $err . "\r\n";
    }

    private function handle_success($succ) {
        $this->success .= $succ . "\r\n";
    }
    
    public function index() {
        $this->add();
    }
    
    public function add($id = NULL) {
        
        $this->data['slides'] = $this->slider->get_active_slides();
        
        if($id){
            $this->data['slide'] = $this->slider->get($id);
            
            if($this->data['slide']){
                $this->data['slide'];
            } else {
                redirect('admin/slider/add');
            }
            
        } else {
            $this->data['slide'] = $this->slider->get_new($id);
        }
        
        // Set up the form
        $rules = $this->slider->rules;
        $this->form_validation->set_rules($rules);

        // Process the form
        if ($this->form_validation->run() == TRUE) {
            if(!$this->input->post('orginal_picture')){
                if ($_FILES['userfile']['name']) {
                    
                    $config = array(
                        'allowed_types' => 'jpg|jpeg|png',
                        'upload_path' => $this->file_path,
                        'max_size' => 10000,
                    );
                    
                    $this->load->library('upload', $config);
                    $this->upload->do_upload();
                    $image_data = $this->upload->data();
                    
                    $config_res['source_image'] = $this->upload_path.$image_data['file_name'];
                    $config_res['maintain_ratio'] = FALSE;
                    $config_res['width'] = 1919;
                    $config_res['height'] = 498;
                    $config_res['new_image'] = $this->file_path.'/croped';

                    $this->image_lib->initialize($config_res);

                    $this->image_lib->resize();

                    $config = array(
                        'source_image' => $this->upload_path.$image_data['file_name'],
                        'new_image' => $this->file_path . '/thumbs',
                        'maintain_ration' => FALSE,
                        'width' => 617,
                        'height' => 160
                    );

                    $this->image_lib->initialize($config);

                    $this->image_lib->resize();

                    $this->image_lib->clear();

                    $data['main_image'] = $this->upload_path.$image_data["file_name"];
                    $data['orginal_picture'] = $this->upload_path.'croped/'.$image_data["file_name"];
                    $data['thumb_picture'] = $this->upload_path.'thumbs/'.$image_data["file_name"];
               $upload_file=TRUE;
                } else{  
                    $upload_file=false;
                     $this->handle_error('<div class="alert alert-danger">Image field is mandatory</div>');     
                }
            }else{
                  $upload_file=TRUE;
            }
            if($upload_file){
             
                $data['title1'] = $this->input->post('title1');
                $data['type'] = $this->input->post('type');

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

                $resp = $this->slider->save($data, $id);

                if ($resp === TRUE) {
                    $this->handle_error('<div class="alert alert-danger">Error while saving file info to Database.</div>');
                } else {
                    $this->handle_success('<div class="alert alert-success">Save Data Successfully.</div>');
                }
                
            }

            
            $this->session->set_flashdata('error', $this->error);
            $this->session->set_flashdata('success', $this->success);
            
            if($id){
                
                redirect('admin/slider/add/'.$id);            
            
            } else {
            
                redirect('admin/slider/add');
                
            }
            
        }

        // Load the view
        $this->data['sub_view'] = 'panel/slider/add';
        $this->load->view('panel/common/_layout_main', $this->data);
    }
    
    public function removeimage($id) {
        
        $result = $this->slider->get($id);
        
        $main_image = $result->main_image;
        $orginal_picture = $result->orginal_picture;
        $thumb_picture = $result->thumb_picture;
        
        if (is_readable($main_image) && unlink($main_image)) {
            //echo "The file has been deleted";
        }
        
        if (is_readable($orginal_picture) && unlink($orginal_picture)) {
            //echo "The file has been deleted";
        }
        
        if (is_readable($thumb_picture) && unlink($thumb_picture)) {
            //echo "The file has been deleted";
        }
        
        $data['orginal_picture'] = '';
        $data['thumb_picture'] = '';
        
        $resp = $this->slider->save($data, $id);

        $this->handle_success('<div class="alert alert-success">The file has been deleted.</div>');
        
        $this->session->set_flashdata('success', $this->success);

        // Load the view
        redirect('admin/slider/add/'.$id);
        
    }
    
    public function manage() {
        
        $config = array();
        $config["base_url"] = base_url() . "admin/slider/manage";
        $config["total_rows"] = $this->slider->active_slide_count();
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
        $this->data["slides"] = $this->slider->get_active_slide($config["per_page"], $page);
        $this->data["links"] = $this->pagination->create_links();
        
        // Load the view
        $this->data['sub_view'] = 'panel/slider/manage';
        $this->load->view('panel/common/_layout_main', $this->data);
    }
    
    public function delete() {
        
        $id = $this->input->post('id');
        $data['status'] = $this->input->post('status');
        
        $result = $this->slider->get($id);
        
        if($result->status == 1){
            echo 'error';
        } else {
            $resp = $this->slider->save($data, $id);
            echo 'success';
        }
        
    }
    
    
    public function trash(){
        
        $config = array();
        $config["base_url"] = base_url() . "admin/slider/trash";
        $config["total_rows"] = $this->slider->trashed_slide_count();
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
        $this->data["slides"] = $this->slider->get_trashed_slide($config["per_page"], $page);
        $this->data["links"] = $this->pagination->create_links();
        
        //$this->data['users'] = $this->slider->get_by(['status' => 2]);
        
        // Load the view
        $this->data['sub_view'] = 'panel/slider/manage_trash';
        $this->load->view('panel/common/_layout_main', $this->data);
    }
    
    public function undo($id){
        $data['status'] = 0;       
        
        $resp = $this->slider->save($data, $id);

        $this->handle_success('<div class="alert alert-success">Undo Slide Successfully</div>');

        $this->session->set_flashdata('success', $this->success);
        
        // Load the view
        redirect('admin/slider/trash');
    }
    
    public function remove($id){
        $result = $this->slider->get($id);
        
        $orginal_picture = $result->orginal_picture;
        $thumb_picture = $result->thumb_picture;
        
        if (is_readable($orginal_picture) && unlink($orginal_picture)) {
            //echo "The file has been deleted";
        }
        
        if (is_readable($thumb_picture) && unlink($thumb_picture)) {
            //echo "The file has been deleted";
        }
        
        $resp = $this->slider->delete($id);

        $this->handle_success('<div class="alert alert-danger">The file has been deleted</div>');

        $this->session->set_flashdata('success', $this->success);

        // Load the view
        redirect('admin/slider/trash');
    }
    
    public function changestatus() {
        
        $id = $this->input->post('id');       
        $data['status'] = $this->input->post('status');       
        
        $resp = $this->slider->save($data, $id);
        
        if($data['status'] == 0){
            
            echo '<div class="alert alert-danger">Deactive Slide Successfully</div>';        
            
        } else {
        
            echo '<div class="alert alert-success">Active Slide Successfully</div>';
            
        }
        
        
    }
    public function change_set_banner(){
        $id = $this->input->post('id');       
        $data['set_banner'] = $this->input->post('set_banner');  
        $type = $this->input->post('type');  
       
        if($data['set_banner'] == 0){
            $resp = $this->slider->save($data, $id);  
            $message=array(  
                "data"=>'<div class="alert alert-danger">Deactive banner Successfully</div>',
                "status"=>1
            );
            
        }else{
           $count= $this->slider->get_by(['set_banner'=> 1, 'type' => $type]);
            if($count == null){
                 $resp = $this->slider->save($data, $id); 
                 $message=array(  
                "data"=>'<div class="alert alert-success">Active Banner Successfully</div>',
                "status"=>1
            );
            } else{
                  $message=array(  
                "data"=>'<div class="alert alert-danger">Already active a image as a banner.So first deactive this to make another as a banner .</div>',
                "status"=>0
            );
            }
        } 
        echo json_encode($message);
    }
}
