<?php

class Main extends CI_Controller{
    public function login(){
       
        $this->load->library('form_validation');

          // $this->form_validation->ser_rules('id','Id','required');
        $this->form_validation->set_rules('username','Username','required');
       
        $this->form_validation->set_rules('password','Password','required');
        
        if($this->form_validation->run() == false){

          // $this->load->helper('url');
          // if ($this->form_validation == TRUE) {
               $this->load->view('login');
          // }

        } else {
            $this->load->model('main_model');
            $formArray=array();
          //   $formArray['id']=$this->input->post('id');
            $formArray['username'] = $this->input->post('username');
           
            $formArray['password'] = md5($this->input->post('password'));
            $formArray['created_at'] = date('Y-m-d H:i:s');
            

           $response =  $this->main_model->create($formArray);
               if($response === true){
               $this->load->view("dashboard");                    
               }else{
                 redirect(base_url().'main/login');

               }
          //   $this->session->set_flashdata('msg','Your account has been created successfully.');
          //   redirect(base_url().'main/login');
        }

        
    
        
        //  $this->load->view('register');
    }
    public function view(){
         $this->load->view('view');
    }
    public function dashboard(){
      $this->load->view('dashboard');
 }
  public function charts(){
    $this->load->model('chartmodel');
    $chart_data = $this->chartmodel->chartshow();
    $temp = [];

    foreach($chart_data as $key => $val) {
      array_push($temp, [0=>$val['age'],1=> (int)$val['people_count']]);
    }

    echo "<pre>";
    // print_r($chartcntroller);
    // die;
    $data['chart_data'] = $temp;

    $this->load->view('index',$data);
  }
    
    
   
}