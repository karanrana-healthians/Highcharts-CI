<?php  
 class Main_model extends CI_Model  
 {  
     public function create($formArray)  
      {  
          // $this->db->insert('users',$formArray);
         
          //     $id = $this->input->post('id');
              $username=$this->input->post('username');
              $password=$this->input->post('password');
              $this->db->select("username,password");
              $this->db->from("users");
              $this->db->where("username",$username);
              $query=$this->db->get();
              $data = $query->row();
          //     print_r($data);
              if($data)
              {
              if($data->password == $password)
              {
                   return true;
              }
              }
              return false;          

          // $this->db->query() ; 
//            //SELECT * FROM login WHERE username = '$username' AND password = '$password'  
//            if($query->num_rows() >0)  
//            {  
//                 return true;  
//            }  
//            else  
//            {  
//                 return false;       
//            }  
      }  
 }  