<?php  
class Home_model extends CI_Model  
{  
    // $image_path=$this->input->post('image_path');
    // $user_name=$this->input->post('user_name');
    // $user_age=$this->input->post('user_age');
    // $user_add=$this->input->post('user_add');
    // $contact_number=$this->input->post('contact_number');
    // $city=$this->input->post('city');
    // $gender=$this->input->post('gender');

    

	
	function saverecords($data)
	{
        return $this->db->insert('Usercrm',$data);
        // return true;
	}

    function all(){
        return $users=$this->db->get('Usercrm')->result_array();
        }
    // function ud($data)
    // {
    //     foreach ($data as $key => $value) {
    //         print_r($value);
    //         die;
    //     }
    // }
    function getuser($id){
        $this->db->where('id',$id);
        return $users=$this->db->get('Usercrm')->row_array();
    }

    function deleteuser($id)
    {
    $this->db->where('id', $id);
    $this->db->delete('Usercrm');
    }

    function edituser($id,$data){
        $this->db->where('id',$id);
        $this->db->update('Usercrm',$data);
    }

	
}



   
    //     print_r($sql);
    //     // die;
    //     $query= $conn->query($sql);
    //     if($query)
    //     {
    //         echo "Entry successful";
    //     }
    //     else
    //     {
    //         echo "Error Occured";
    //     }
    // }
                