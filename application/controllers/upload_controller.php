<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Upload_Controller extends CI_Controller {
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('home_model');
    }

    public function custom_view()
    {
        $this->load->view('custom_view');
    }

    public function index()
    {
        $this->load->model('home_model');
        $users=$this->home_model->all();
        $data=array();
        $data['Usercrm']=$users;
        $this->load->view('view',$data);
    }
    public function index1()
    {
        $this->load->model('home_model');
        $users=$this->home_model->getuser($id);
        $data=array();
        $data['users']=$users;
        $this->load->view('view',$data);
    }
   

    public function uploads()
    {
        // $this->form_validation->set_rules('image_path','Profile pic','required');
        $this->form_validation->set_rules('user_name','Name','required');
        $this->form_validation->set_rules('user_age','Age','required');
        $this->form_validation->set_rules('user_add','Address','required');
        $this->form_validation->set_rules('contact_number','Contact_number','required');
        $this->form_validation->set_rules('gender','Gender','required');
        $this->form_validation->set_rules('city','City','required');

        if($this->form_validation->run())
        {
            $original_filename = $_FILES['image_path']['name'];
            $new_name = time()."".str_replace(' ','-',$original_filename);
            $config = [
                'upload_path'   =>  '/var/www/html/site/uploads/',
                'allowed_types' =>  'gif|jpg|png|jpeg|pdf',
                'overwrite'     =>  TRUE,
                'max_size'      =>  '2048000',
                'file_name'     =>  $new_name
            ];
            $this->load->library('upload',$config);

		    if ( ! $this->upload->do_upload('image_path'))
		    {
			    $imageError = array('imageError' => $this->upload->display_errors());
                $this->load->view('custom_view', $imageError);
		    }
		    else
		    {
                $data_filename = $this->upload->data('file_name');
                $data = [
                    'user_name' => $this->input->post('user_name'),
                    'user_age' => $this->input->post('user_age'),
                    'user_add' => $this->input->post('user_add'),
                    'contact_number' => $this->input->post('contact_number'),
                    'gender' => $this->input->post('gender'),
                    'city' => $this->input->post('city'),
                    // 'image_path' => $data_filename                    
                ];
                $homemodel = new home_model;
                $res = $homemodel->saverecords($data);
                $this->session->set_flashdata('status','Data inserted successfully');
                redirect(base_url().'upload_controller/index');
			   
		    }
        }
        else
        {
            $this->custom_view();
        }
    }
    function editdata($id){


        $this->load->model('home_model');
        $user=$this->home_model->getuser($id);
        // $formArray=array();
        $formArray['abc']=$user;
        print_r($formArray['abc']);die;


        $this->form_validation->set_rules('user_name','Name','required');
        $this->form_validation->set_rules('user_age','Age','required');
        $this->form_validation->set_rules('user_add','Address','required');
        $this->form_validation->set_rules('contact_number','Contact_number','required');
        $this->form_validation->set_rules('gender','Gender','required');
        $this->form_validation->set_rules('city','City','required');
        $this->form_validation->set_rules('image_path','Profile pic','required');

        
        if($this->form_validation->run())
        {
            
            $original_filename = $_FILES['image_path']['name'];
            $new_name = time()."".str_replace(' ','-',$original_filename);
            $config = [
                'upload_path'   =>  '/var/www/html/site/uploads/',
                'allowed_types' =>  'gif|jpg|png|jpeg|pdf',
                'overwrite'     =>  TRUE,
                'max_size'      =>  '2048000',
                'file_name'     =>  $new_name
            ];
            $this->load->library('upload',$config);

		    if ( ! $this->upload->do_upload('image_path'))
		    {
                
			    $imageError = array('imageError' => $this->upload->display_errors());
                $this->load->view('custom_view', $imageError);
		    }
		    else
		    {
                
                $data_filename = $this->upload->data('file_name');
                $data = [
                    'user_name' => $this->input->post('user_name'),
                    'user_age' => $this->input->post('user_age'),
                    'user_add' => $this->input->post('user_add'),
                    'contact_number' => $this->input->post('contact_number'),
                    'gender' => $this->input->post('gender'),
                    'city' => $this->input->post('city'),
                    'image_path' => $data_filename                    
                ];
                $homemodel = new home_model;
                $res = $homemodel->edituser($data);
                $this->session->set_flashdata('status','Data updated successfully');
                redirect(base_url().'upload_controller/index1');
			   
		    }
        }
        else
        {
            // echo "adh";die;
            $this->custom_view();
        }



        // $this->load->model('home_model');
        // $user=$this->home_model->getuser($id);
        // $data=array();
        // $data['user']=$user;
        // $this->form_validation->set_rules('image_path','Profile pic','required');
        // $this->form_validation->set_rules('user_name','Name','required');
        // $this->form_validation->set_rules('user_age','Age','required');
        // $this->form_validation->set_rules('user_add','Address','required');
        // $this->form_validation->set_rules('contact_number','Contact_number','required');
        // $this->form_validation->set_rules('gender','Gender','required');
        // $this->form_validation->set_rules('city','City','required');


        // if($this->form_validation->run()==false){
        //     $this->load->view('edit',$data);

        // }else{
        //     $formArray=array();
        //     $formArray['gender'] = $this->input->post('gender');
        //     $formArray['image_path'] = $this->input->post('image_path');
        //     $formArray['user_name'] = $this->input->post('user_name');
        //     $formArray['user_age'] = $this->input->post('user_age');
        //     $formArray['contact_number'] = $this->input->post('contact_number');
        //     $formArray['user_add'] = $this->input->post('user_add');
        //     $formArray['city'] = $this->input->post('city');

            
        //     $this->home_model->edituser($id,$formArray);
        //     $this->session->set_flashdata('success','Record updated successfully!');
        //     redirect(base_url().'upload_controller/index');

        // }
        
        
    }
    function deletedata($id){
        $this->load->model('home_model');
        $user=$this->home_model->getuser($id);
        if(empty($user)){
            $this->session->set_flashdata('failure','Record not found in database');
            redirect(base_url().'upload_controller/index');
        }
        else{
        $this->home_model->deleteuser($id);
        $this->session->set_flashdata('success','Record deleted successfully!');
            redirect(base_url().'upload_controller/index');
        }

       

    }
    // public function deletedata($id)
    // {
    //     $this->load->model('home_model');
    //     // $row=$this->home_model->all($id);
    //     // $response=$this->home_model->deleterecords($id);
    //     if(empty($this->home_model->all($id))){
    //     echo "Data deleted successfully !";
    // }
    // else    
    // {
    //     echo "Error !";
    // }
    // }















    // public function uploads(){
    //     $this->load->model('home_model');
    //         $this->form_validation->set_rules('image_path','Profile pic','required');
    //         $this->form_validation->set_rules('user_name','Name','required');
    //         $this->form_validation->set_rules('user_age','Age','required');
    //         $this->form_validation->set_rules('user_add','Address','required');
    //         $this->form_validation->set_rules('contact_number','Contact_number','required');
    //         $this->form_validation->set_rules('gender','Gender','required');
    //         $this->form_validation->set_rules('city','City','required');
            
    //         if($this->form_validation->run()==false){
                
    //             $this->load->view('custom_view');
    //         }else{
    //             $data=array();
    //             $data['image_path'] = $this->input->post('image_path');
    //             $data['user_name'] = $this->input->post('user_name');
    //             $data['user_age'] = $this->input->post('user_age');
    //             $data['gender'] = $this->input->post('gender');
    //             $data['city'] = $this->input->post('city');
    //             $data['contact_number'] = $this->input->post('contact_number');
    //             $data['user_add'] = $this->input->post('address');
    //             // $data['created_at'] = date('Y-m-d H:i:s');
                
    
    //             $this->main_model->saverecords($data);
    //             $this->session->set_flashdata('success','Record added successfully');
    //             redirect(base_url().'main/index');
    //         }
        

    // }

















    
    // function fileUpload($fileData){
    //     $config             =   array(
    //         'upload_path'   =>  "/var/www/html/site/uploads/",
    //         'allowed_types' =>  "gif|jpg|png|jpeg|pdf",
    //         'overwrite'     =>  TRUE,
    //         'max_size'      =>  "2048000",
    //     );
        
    //     $this->load->library('upload', $config);
    //     $upload_status = $this->upload->uploads('image_path');
        
    //     if(!$upload_status) {
    //         $data = array(
    //             'status'    =>  false, 
    //             'message'   =>  $this->upload->display_errors()
    //         );

    //         return $data;
    //     }
    //     else {
    //         $data           =   array(
    //             'status'    =>  true, 
    //             'message'   =>  "Successfuly upload ...",
    //             'path'      =>  $this->upload->data()
    //         );

    //         return $data;
    //     }
    // }



    }
?>