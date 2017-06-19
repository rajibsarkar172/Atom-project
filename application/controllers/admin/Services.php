<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Services
 *
 * @author USER
 */
class Services extends Admin_Controller{
    
    private $error;
    private $success;
    
    public function __construct() {
        parent::__construct();
        
        ob_start(); 
        
        $this->file_path = realpath(APPPATH . '../uploads/events/');
        $this->upload_path = 'uploads/events/';
        $this->banner_file_path = realpath(APPPATH . '../uploads/events/banner/');
        $this->banner_upload_path = 'uploads/events/banner/';
        
        $this->form_validation->set_error_delimiters('<dd class="error">', '</dd>');
        
        
                
        if($this->session->userdata('user_type') != 'Administrator'){
            redirect('index');
        }
        
        /* Get Settings */
        $this->data['setting'] = $this->setting->get(4);
                  
        $this->load->library('image_lib');
    }
    
    public function clear_field_data() {

        $this->_field_data = array();
        return $this;
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
        
        $this->data['events'] = $this->services->get_active_events();
        
        if($id){
            $this->data['event'] = $this->services->get($id);
            
            if($this->data['event']){
                $this->data['event'];
            } else {
                redirect('admin/services/create');
            }
            
        } else {
            $this->data['event'] = $this->services->get_new($id);
        }
        
        // Set up the form
        $rules = $this->services->rules;
        $this->form_validation->set_rules($rules);

        // Process the form
        if ($this->form_validation->run() == TRUE) {
            if(!$this->input->post('orginal_picture')){
                if ($_FILES['userfile']['size'] > 0) {
                    if ($_FILES['userfile']['size'] > 0) {

                        $config['upload_path'] = $this->file_path;
                        $config['allowed_types'] = 'gif|jpg|png';

                        $this->load->library('upload', $config);

                        if ( ! $this->upload->do_upload())
                        {
                            $error = array('error' => $this->upload->display_errors());
                        }
                        else
                        {
                            $image_data = $this->upload->data();

                            $config_res['source_image'] = $this->upload_path.$this->upload->file_name;

                            $config_res['maintain_ratio'] = FALSE;
                            $config_res['width'] = 696;
                            $config_res['height'] = 473;
                            $config_res['new_image'] = $this->file_path . '/thumbs';


                            $this->image_lib->initialize($config_res);

                            $this->image_lib->resize();

                            $this->image_lib->clear();
                        } 
                    } 
                } 
                
                $data['orginal_picture'] = $this->upload_path.$image_data["orig_name"];
                $data['thumb_picture'] = $this->upload_path.'thumbs/'.$image_data["orig_name"];
                
            } else {
                
                $data['orginal_picture'] = $this->input->post('orginal_picture');
                $data['thumb_picture'] = $this->input->post('thumb_picture');
                
            }
            
            if(!$this->input->post('banner_orginal_picture')){
                
                if ($_FILES['bannerfile']['name']) {
                    
                    $banner_config = array(
                        
                        'allowed_types' => 'jpg|jpeg|png',
                        'upload_path' => $this->upload_path,
                        'max_size' => 10000,
                    );
                    
                    $this->load->library('upload', $banner_config);
                    $this->upload->do_upload("bannerfile");
                    $banner_data = $this->upload->data();
                    
                    $config_banner_res['source_image'] = $this->upload_path.$banner_data['file_name'];
                    $config_banner_res['maintain_ratio'] = FALSE;
                    $config_banner_res['width'] = 1919;
                    $config_banner_res['height'] = 498;
                    $config_banner_res['new_image'] = $this->banner_file_path.'/croped';

                    $this->image_lib->initialize($config_banner_res);

                    $this->image_lib->resize();

                    $banner_config = array(
                        'source_image' => $this->upload_path.$banner_data['file_name'],
                        'new_image' => $this->banner_file_path . '/thumbs',
                        'maintain_ration' => FALSE,
                        'width' => 617,
                        'height' => 160
                    );

                    $this->image_lib->initialize($banner_config);

                    $this->image_lib->resize();

                    $this->image_lib->clear();

                    //$data['main_banner_image'] = $this->upload_path.$banner_data["file_name"];
                    $data['orginal_picture'] = $this->banner_upload_path.'croped/'.$banner_data["file_name"];
                    $data['orginal_picture'] = $this->banner_upload_path.'thumbs/'.$banner_data["file_name"];
                    $upload_file=TRUE;
                }
            }else{
                $data['orginal_picture'] = $this->input->post('banner_orginal_picture');
                $data['orginal_picture'] = $this->input->post('banner_thumb_picture');
            }
            
            $data['title'] = $this->input->post('title');
            $data['description'] = $this->input->post('description');            
            $data['link'] = $this->input->post('link');
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
            
            if($this->input->post('show_menu') != ''){
                $data['show_menu'] = $this->input->post('show_menu'); 
            } else {
                $data['show_menu'] = 0;                   
            }
            
            $resp = $this->services->save($data, $id);
            
            if ($resp === TRUE) {
                $this->handle_error('<div class="alert alert-danger">Error while saving file info to Database.</div>');
            } else {
                $this->handle_success('<div class="alert alert-success">Save Data Successfully.</div>');
            }
            
            $this->session->set_flashdata('n_error', $this->error);
            $this->session->set_flashdata('success', $this->success);
            
            if($id){
                
                redirect('admin/services/create/'.$id);            
            
            } else {
            
                redirect('admin/services/create');
                
            }
            
        }

        // Load the view
        $this->data['sub_view'] = 'panel/services/add';
        $this->load->view('panel/common/_layout_main', $this->data);
    }
    
    public function removeimage($id) {
        
        $result = $this->services->get($id);
        
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
        
        $resp = $this->services->save($data, $id);

        $this->handle_success('<div class="alert alert-success">The file has been deleted.</div>');
        
        $this->session->set_flashdata('success', $this->success);

        // Load the view
        redirect('admin/services/create/'.$id);
        
    }
    
    public function removebannerimage($id) {
        
        $result = $this->services->get($id);
        
        $main_banner_image = $result->main_banner_image;
        $banner_orginal_picture = $result->orginal_picture;
        $banner_thumb_picture = $result->orginal_picture;
        
        if (is_readable($main_banner_image) && unlink($main_banner_image)) {
            //echo "The file has been deleted";
        }
        
        if (is_readable($banner_orginal_picture) && unlink($banner_orginal_picture)) {
            //echo "The file has been deleted";
        }
        
        if (is_readable($banner_thumb_picture) && unlink($banner_thumb_picture)) {
            //echo "The file has been deleted";
        }
        
        $data['main_banner_image'] = '';
        $data['orginal_picture'] = '';
        $data['orginal_picture'] = '';
        
        $resp = $this->services->save($data, $id);

        $this->handle_success('<div class="alert alert-success">The file has been deleted.</div>');
        
        $this->session->set_flashdata('success', $this->success);

        // Load the view
        redirect('admin/services/create/'.$id);
        
    }
    
    public function manage() {
        
        $config = array();
        $config["base_url"] = base_url() . "admin/services/manage";
        $config["total_rows"] = $this->services->active_event_count();
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
        $this->data["events"] = $this->services->get_active_event($config["per_page"], $page);
        $this->data["links"] = $this->pagination->create_links();
        
        // Load the view
        $this->data['sub_view'] = 'panel/services/manage';
        $this->load->view('panel/common/_layout_main', $this->data);
    }
    
    public function delete() {
        
        $id = $this->input->post('id');
        $data['status'] = $this->input->post('status');
        
        $result = $this->services->get($id);
        
        if($result->status == 1 || $result->show_menu == 1){
            echo 'error';
        } else {
            $resp = $this->services->save($data, $id);
            echo 'success';
        }
        
    }    
    
    public function trash(){
        
        $config = array();
        $config["base_url"] = base_url() . "admin/services/trash";
        $config["total_rows"] = $this->services->trashed_event_count();
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
        $this->data["events"] = $this->services->get_trashed_event($config["per_page"], $page);
        $this->data["links"] = $this->pagination->create_links();
        
        //$this->data['users'] = $this->services->get_by(['status' => 2]);
        
        // Load the view
        $this->data['sub_view'] = 'panel/services/manage_trash';
        $this->load->view('panel/common/_layout_main', $this->data);
    }
    
    public function undo($id){
        $data['status'] = 0;       
        
        $resp = $this->services->save($data, $id);

        $this->handle_success('<div class="alert alert-success">Undo Event Successfully</div>');

        $this->session->set_flashdata('success', $this->success);
        
        // Load the view
        redirect('admin/services/trash');
    }
    
    public function remove($id){
        $result = $this->services->get($id);
        
        $orginal_picture = $result->orginal_picture;
        $thumb_picture = $result->thumb_picture;
        
        if (is_readable($orginal_picture) && unlink($orginal_picture)) {
            //echo "The file has been deleted";
        }
        
        if (is_readable($thumb_picture) && unlink($thumb_picture)) {
            //echo "The file has been deleted";
        }
        
        $resp = $this->services->delete($id);

        $this->handle_success('<div class="alert alert-danger">The file has been deleted</div>');

        $this->session->set_flashdata('success', $this->success);

        // Load the view
        redirect('admin/services/trash');
    }
    
    public function changestatus() {
        
        $id = $this->input->post('id');       
        $data['status'] = $this->input->post('status');       
        
        if($data['status'] != 0){
            $posts = $this->services->get_by(['status' => 1]);
            
            if(count($posts) >= 10){
                
                echo json_encode(array("message" => '<div class="alert alert-danger">already active '.count($posts).' Post</div>', "type" => "error"));
                
            } else {
                $resp = $this->services->save($data, $id);
                echo json_encode(array("message" => '<div class="alert alert-success">Activated Content Successfully</div>', "type" => "success"));
            }            
        } else {
            $resp = $this->services->save($data, $id);
            echo json_encode(array("message" => '<div class="alert alert-danger">Deactivated Content Successfully</div>', "type" => "success"));
        } 
        
        
    }
    
    public function show_menu() {
        
        $id = $this->input->post('id');       
        $data['show_menu'] = $this->input->post('show_menu');  
        
        if($data['show_menu'] == 1){
        
            $resp = $this->services->save($data, $id);
            echo json_encode(array("message" => '<div class="alert alert-success">Activated Event For Menu Successfully</div>', "type" => "success"));
        
                
        } else {
        
            $resp = $this->services->save($data, $id);
            echo json_encode(array("message" => '<div class="alert alert-danger">Deactivated Event For Menu Successfully</div>', "type" => "success"));
        
            
        } 
        
        
    }
    
}
