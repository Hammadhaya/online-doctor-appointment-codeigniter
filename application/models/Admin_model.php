<?php
class Admin_model extends CI_Model
{


   
    public function insertpatient($data)
    {
        // var_dump($data);die;
        $id=$data['pt_id'];
        // var_dump($id);die;
        if($id>0)
        {
            $this->db->where('pt_id',$id)
                     ->update('patient',$data);
                     return true;
        }
        else
       {
        $this->db->insert('patient', $data);
        return true;
       }
    }
    public function insertdoctor($data)
    {
        // var_dump($data);die;
        $id=$data['dr_id'];
        // var_dump($id);die;
        if($id>0)
        {
            $this->db->where('dr_id',$id)
                     ->update('doctor',$data);
                     return true;
        }
        else
       {
        $this->db->insert('doctor', $data);
        // var_dump('done');die;
        return true;
       }
    }
    public function insertservice($data)
    {
        // var_dump($data);die;
        $id=$data['sr_id'];
        // var_dump($id);die;
        if($id>0)
        {
            $this->db->where('sr_id',$id)
                     ->update('services',$data);
                     return true;
        }
        else
       {
        $this->db->insert('services', $data);
        // var_dump('done');die;
        return true;
       }
    }
    public function insertpage($data)
    {
        // var_dump($data);die;
        $id=$data['pg_id'];
        // var_dump($id);die;
        if($id>0)
        {
            $this->db->where('pg_id',$id)
                     ->update('pages',$data);
                     return true;
        }
        else
       {
        $this->db->insert('pages', $data);
        // var_dump('done');die;
        return true;
       }
    }
    public function insertcontent($data)
    {
        // var_dump($data);die;
        $id=$data['c_id'];
        // var_dump($id);die;
        if($id>0)
        {
            $this->db->where('c_id',$id)
                     ->update('content',$data);
                     return true;
        }
        else
       {
        // var_dump($data);die;

        $this->db->insert('content', $data);
        // var_dump('done');die;
        return true;
       }
    }
    public function insertinquiry($data)
    {
        // var_dump($data);die;

        $response=$this->db->insert('inquiry', $data);
        if($response=true)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function drlist()
    {
        $query = $this->db->select('*')
                          ->from('doctor')
                          ->get();
                        //   var_dump($query->result_array());die; 
                          if($query->num_rows()>0)
                          {
                              return $query->result_array();
                          }    
                          else
                          {
                              return false;
                          }                        
    }
    public function inquirylist()
    {
        $query = $this->db->select('*')
                          ->from('inquiry')
                          ->get();
                        //   var_dump($query->result_array());die; 
                          if($query->num_rows()>0)
                          {
                              return $query->result_array();
                          }    
                          else
                          {
                              return false;
                          }                        
    }
    public function srlist()
    {
        $query = $this->db->select('*')
                          ->from('services')
                          ->get();
                        //   var_dump($query->result_array());die; 
                          if($query->num_rows()>0)
                          {
                              return $query->result_array();
                          }    
                          else
                          {
                              return false;
                          }                        
    }
    public function appointlist()
    {
        $query = $this->db->select('appointment.*, doctor.*')
        ->from('appointment')
        ->join('doctor', 'appointment.dr_id = doctor.dr_id')
        ->get();

        if ($query->num_rows() > 0) {
        return $query->result_array();
        } else {
        return false;
        }
    }
    public function patientlist()
    {
        $query = $this->db->select('*')
        ->from('patient')
        ->get();

        if ($query->num_rows() > 0) {
        return $query->result_array();
        } else {
        return false;
        }
    }
    public function servicelist()
    {
        $query = $this->db->select('*')
        ->from('services')
        ->get();

        if ($query->num_rows() > 0) {
        return $query->result_array();
        } else {
        return false;
        }
    }
    public function pageslist()
    {
        $query = $this->db->select('*')
        ->from('pages')
        ->get();

        if ($query->num_rows() > 0) {
        return $query->result_array();
        } else {
        return false;
        }
    }
    public function contentlist()
    {
        $query = $this->db->select('*')
        ->from('content')
        ->get();

        if ($query->num_rows() > 0) {
        return $query->result_array();
        } else {
        return false;
        }
    }
    public function list()
    {
        $query = $this->db->select('*')
                          ->from('doctor')
                          ->get();
                        //   var_dump($query->result_array());die; 
                          if($query->num_rows()>0)
                          {
                              return $query->result_array();
                          }    
                          else
                          {
                              return false;
                          }                        
    }
    //     public function fetchdata($doctor)
    // {
    //     console.log($doctor);
    //     $query = $this->db->select('fees')
    //                       ->from('doctor')
    //                       ->where('dr_id',$doctor)
    //                       ->get();
    //     if($query->num_rows()>0)
    //     {
    //         return $query->row_array();
    //         // var_dump($query->row_array());die;
    //     }
    //     else
    //     {
    //         return false;
    //     }                  
    // }
    
    public function insert($data)
    {
        $this->db->insert('user', $data);
        // var_dump('done');die;
        return true;
    }
    public function insertadmin($data)
    {
        $data = array_merge($data, array('status' => 1));
        // var_dump($data);die;
        $this->db->insert('user', $data);
        // var_dump('done');die;
        return true;
    }
   
    public function identify($data)
    {

        //  var_dump($data);die;
        $email = $data['email']; 
        $password = $data['password'];
        $query = $this->db->from('user')
                 ->where('email',$email)
                 ->where('password',$password)
                 ->where('status',0)
                 ->get();
        if($query->num_rows()>0)
        {
            //  var_dump('done');die;
            return $query->row_array();
        }    
        else
        {
            //  var_dump('done');die;
            return false;
        }
    }
    public function identifyadmin($data)
    {

        //  var_dump($data);die;
        $email = $data['email']; 
        $password = $data['password'];
        $query = $this->db->from('user')
                 ->where('email',$email)
                 ->where('password',$password)
                 ->where('status',1)
                 ->get();
        if($query->num_rows()>0)
        {
            //  var_dump('done');die;
            return $query->row_array();
        }    
        else
        {
            //  var_dump('done');die;
            return false;
        }
    }
    public function selectdata($id)
    {
        
        $query = $this->db->select('*')
                              ->from('doctor')
                              ->where('dr_id',$id)
                              ->get();
        return $query->row_array();  
    }
    public function deleterecord($id)
    {

        $this->db->where("dr_id",$id)
                 ->delete("doctor");
        return true;
    }
    public function ptselectdata($id)
    {
        
        $query = $this->db->select('*')
                              ->from('patient')
                              ->where('pt_id',$id)
                              ->get();
        return $query->row_array();  
    }
    public function ptdeleterecord($id)
    {

        $this->db->where("pt_id",$id)
                 ->delete("patient");
        return true;
    }
    public function srselectdata($id)
    {
        
        $query = $this->db->select('*')
                              ->from('services')
                              ->where('sr_id',$id)
                              ->get();
        return $query->row_array();  
    }
    public function srdeleterecord($id)
    {

        $this->db->where("sr_id",$id)
                 ->delete("services");
        return true;
    }
    public function pgselectdata($id)
    {
        
        $query = $this->db->select('*')
                              ->from('pages')
                              ->where('pg_id',$id)
                              ->get();
        return $query->row_array();  
    }
    public function pgdeleterecord($id)
    {

        $this->db->where("pg_id",$id)
                 ->delete("pages");
        return true;
    }
    public function cselectdata($id)
    {
        
        $query = $this->db->select('*')
                              ->from('content')
                              ->where('c_id',$id)
                              ->get();
        return $query->row_array();  
    }
    public function cdeleterecord($id)
    {

        $this->db->where("c_id",$id)
                 ->delete("content");
        return true;
    }
    public function inquirydeleterecord($id)
    {

        $this->db->where("in_id",$id)
                 ->delete("inquiry");
        return true;
    }
    public function updateappointment($id)
    {
        $query = $this->db->select('*')
        ->from('appointment')
        ->where('ap_id',$id)
        ->get();
       $result = $query->row_array();
    //    var_dump($result);die;
        $data = array(
            // 'id' => $result['id'],
            // 'user_id' => $result['user_id'],
            // 'product_id' => $result['product_id'],
            'status' => 1
        );
    //    var_dump($data);die;
       $query = $this->db->where('ap_id',$id)
                         ->update('appointment',$data);
       return true;
    }

}

?>