<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends Frontend_Controller {

    public function __construct() {
        parent::__construct();

        /* Get Settings */
        $this->data['setting'] = $this->setting->get(4);

        /* Get Event Menu */
        $this->data['menu_professional'] = $this->services->get_by(['show_menu' => 1, 'status' => 1, 'type'=> 'PROFF_SERVICE']);
        $this->data['menu_cloud_solution'] = $this->services->get_by(['show_menu' => 1, 'status' => 1, 'type'=> 'CLOUD_SOLUTION']);
        $this->data['menu_cloud_service'] = $this->services->get_by(['show_menu' => 1, 'status' => 1, 'type'=> 'CLOUD_SERVICE']);
        
    }
     
    public function index()
    {
        if($this->input->post('contact_submit'))
        {
            $this->_contact();
        }
        $this->data['slides'] = $this->slider->get_by(['status' => 1, 'type' => 'Home']);
        $this->data['professional_service'] = $this->services->get_by(['show_menu' => 1, 'status' => 1, 'type'=> 'PROFF_SERVICE']);
        $this->data['cloud_solution'] = $this->services->get_by(['show_menu' => 1, 'status' => 1, 'type'=> 'CLOUD_SOLUTION']);
        $this->data['cloud_service'] = $this->services->get_by(['show_menu' => 1, 'status' => 1, 'type'=> 'CLOUD_SERVICE']);
        $this->data['features'] = $this->features->get_active_features();
        $this->data['active'] = "home";
        
        $this->data['subview'] = 'home';
        
        
        $this->load->view('layout_main', $this->data);
        
        

    }
    
   


    public function services($id) {
                
        $this->data['event'] = $this->services->get($id);
        
        
        $this->data['active'] = "";
        $this->data['slides'] = "";
        /* Load View */
        $this->data['subview'] = 'service';
        
        
        $this->load->view('layout_main', $this->data);
    }
    
    public function features($id) {
                
        $this->data['event'] = $this->features->get($id);
        
        
        $this->data['active'] = "";
        $this->data['slides'] = "";
        /* Load View */
        $this->data['subview'] = 'feature';
        
        
        $this->load->view('layout_main', $this->data);
    }
     public function about() {

        $this->data['slides'] = $this->slider->get_by(['status' => 1, 'type' => 'About']);
        $this->data['aboutnote'] = $this->aboutcontent->get_by(['status' => 1]);
        $this->data['active'] = "";
        $this->data['subview'] = 'public/pages/about';
        $this->load->view('layout_main', $this->data);
    }
    
    function contact() {
        $this->data['active'] = "contact";
        $this->data['slides'] = $this->slider->get_by(['status' => 1, 'type' => 'Contact']);        
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('message', 'Message', 'required');
        if ($this->form_validation->run() == true) {
            $contactSetting = $this->contact_setting->getsetting();
            $name = $this->input->post('name');
            $company = $this->input->post('company');
            $email = $this->input->post('email');
            $message = $this->input->post('message');
            $mail = [];
            $mail['protocol'] = $contactSetting->type;
            
            if($contactSetting->type === 'smtp'){
                $mail['smtp_host'] = $contactSetting->smtp_host;            
                $mail['smtp_port'] = $contactSetting->smtp_port;
                $mail['smtp_pass'] = $contactSetting->password;
            }   
            $mail['smtp_user'] = $contactSetting->email;
            $mail['subject'] = "Contact Message From " . $this->input->post('email');
            $mail['name'] = $this->input->post('name');
            $mail['company'] = $this->input->post('company');
            $mail['email'] = $this->input->post('email');
            $mail['message'] = $this->input->post('message');
            $this->load->model('Mailer_Model', 'mail');
            $this->mail->sendContactEmail($mail, 'contactMessage');   
            $this->session->set_flashdata('success', '<div class="alert alert-success">Email Sent</div>');   
        }
    }
    
    public function send_message() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('message', 'Message', 'required');
        if ($this->form_validation->run() == true) {
            $contactSetting = $this->contact_setting->getsetting();
            $name = $this->input->post('name');
            $company = $this->input->post('company');
            $email = $this->input->post('email');
            $message = $this->input->post('message');
            $mail = [];
            $mail['smtp_host'] = $contactSetting->smtp_host;
            $mail['protocol'] = "smtp";
            $mail['smtp_port'] = $contactSetting->smtp_port;
            $mail['smtp_user'] = $contactSetting->email;
            $mail['smtp_pass'] = $contactSetting->password;

            $mail['subject'] = "Contact Message From " . $this->input->post('email');
            $mail['name'] = $this->input->post('name');
            $mail['company'] = $this->input->post('company');
            $mail['email'] = $this->input->post('email');
            $mail['message'] = $this->input->post('message');
            $this->load->model('Mailer_Model', 'mail');
            $this->mail->sendContactEmail($mail, 'contactMessage');
            $message = array(
                "data" => "Message Send Successfully..!",
                "class" => "alert-success",
                "status" => 1
            );
        } else {
            $message = array(
                "data" => validation_errors(),
                "class" => "alert-warning",
                "status" => 0
            );
            $this->session->set_flashdata('message',array('data'=>validation_errors(),'class'=>'alert-warning'));
        }
        echo json_encode($message);
    }
    function terms_of_use(){
        
       $this->data['title'] = "Terms of Use";
       $this->data['active'] = "";
       $this->data['subview'] = 'public/pages/terms_of_use';  
       $this->load->view('layout_main', $this->data);
       
   }
   function privacy_policy(){
       
       $this->data['title'] = "Privacy Policy";
       $this->data['active'] = "";
       $this->data['subview'] = 'public/pages/privacy_policy';  
       $this->load->view('layout_main', $this->data);
       
   }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
