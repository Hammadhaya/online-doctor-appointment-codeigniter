<?php
class Site_model extends CI_Model
{

    public function checkPage($slug = ''){
    //    var_dump($slug);die;
        $query = $this->db->select('*')
            ->from('pages')
            ->where('slug',$slug)
            ->get();
        if($query->num_rows()>0) {
            return $query->row_array(); 
        }
        else{
            return false;
        }                 
    }

    public function getContent($page_name = ''){
        $query = $this->db->select('*')
            ->from('content')
            ->where('pg_name',$page_name)
            ->get();
        if($query->num_rows()>0) {
            return $query->row_array(); 
        }
        else{
            return false;
        }                 
    }
    public function fetchdata($id=0)
    {

        $query = $this->db->select('fees')
                          ->from('doctor')
                          ->where('dr_id',$id)
                          ->get();
        if($query->num_rows()>0)
        {
            $result = $query->row(); // Fetch a single row
             return $result->fees;
        }
        else
        {
            return false;
        }                  
    }
    public function insertappointment($data)
    {
        // var_dump($data);die;
         $this->db->insert('appointment', $data);
        //  var_dump($data);die;
        
        //  var_dump('done');die;
        return true;
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
}
?>