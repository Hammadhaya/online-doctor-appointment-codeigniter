<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {
    public function __construct()
    {
        parent :: __construct();
        $this->load->database();
        $this->load->model('Site_model');
        $this->load->model('Admin_model');
        $this->load->library('upload');
        $this->load->library('session');
    }

	public function index($slug = '')
	{
       $slug = uri_string();

       if($slug != ''){
    //    var_dump($slug);die;

            $page = $this->Site_model->checkPage($slug);
            if($page){
                $data['page'] = $page;
                $pg_name = $page['pg_name'];
                // var_dump($pg_name);die;

                $data['content'] = $this->Site_model->getContent($pg_name);
                // var_dump($slug);
                // var_dump($data);die;
                $data['doctor'] = $this->Admin_model->drlist();
                $data['services'] = $this->Admin_model->srlist();
                $this->load->view($slug,$data);
            }
       } else {
        $slug = 'home';
        //  var_dump($slug);
        $page = $this->Site_model->checkPage($slug);
        if($page){
            $data['page'] = $page;
            $pg_name = $page['pg_name'];
            $data['content'] = $this->Site_model->getContent($pg_name);
        }
        $data['doctor'] = $this->Admin_model->drlist();
        $data['services'] = $this->Admin_model->srlist();
        // var_dump($slug , $data);die; 
		$this->load->view($slug,$data);
       }
        // var_dump($slug);die;
        // if($this->session->userdata('user') != NULL)
        // {
            
        // $data['doctor'] = $this->Admin_model->drlist();
		// $this->load->view('index-three',$data);
        // $data['services'] = $this->Admin_model->srlist();
		// $this->load->view('index-three',$data);
        // }
        // else
        // {
        //   return redirect('admin-login');
        // return redirect ('login-page');
        // }


    
    }
    public function dashboard()
    {
        $this->load->view('doctor-dashboard');
    }
    public function doctorthree()
    {
        $data['services'] = $this->Admin_model->srlist();
        $data['doctor'] = $this->Admin_model->drlist();
        $this->load->view('doctor-team-three',$data);
    }
    public function profile()
    {
        $this->load->view('patient-profile');
    }
    public function appointment()
    {
        if($this->session->userdata('user')!==NULL)
        {
            $data['doctors'] = $this->Admin_model->list();
            $data['services'] = $this->Admin_model->srlist();
            // var_dump($data);die; 
            $this->load->view('booking-appointment',$data);

            // var_dump('in');die;
            // return redirect('booking-appointment');
            // $this->load->view('dashboard');
        }
        else
        {
          return redirect('login-page');
        }
    }
    public function getfees()
    {
        $id=$this->input->post('drid');
		$price = $this->Site_model->fetchdata($id);
		echo str_replace('$','',$price);
    }
    public function invoice()
    {
        $this->load->view('patient-invoice');
    }
    public function pharmacy()
    {
        $this->load->view('pharmacy');
    }
    public function shop()
    {
        $this->load->view('pharmacy-shop');
    }
    public function medical_detail()
    {
        $this->load->view('pharmacy-product-detail');
    }
    public function shop_cart()
    {
        $this->load->view('pharmacy-shop-cart');
    }
    public function checkout()
    {
        $this->load->view('pharmacy-checkout');
    }
    public function account()
    {
        $this->load->view('pharmacy-account');
    }
    public function aboutus()
    {
        $this->load->view('aboutus');
    }
    public function departments()
    {
        $data['services'] = $this->Admin_model->srlist();
        $this->load->view('departments',$data);
    }
    public function doctor_team()
    {
        $data['services'] = $this->Admin_model->srlist();
        $data['doctor'] = $this->Admin_model->drlist();
        $this->load->view('doctor-team-one',$data);
    }
    public function faqs()
    {
        $this->load->view('faqs');
    }
    public function terms()
    {
        $this->load->view('terms');
    }
    public function privacy()
    {
        $this->load->view('privacy');
    }
    public function error()
    {
        $this->load->view('error');
    }
    public function contact()
    {
        $this->load->view('contact');
    }
   
   
   
    public function index_dark()
    {
        // var_dump('in fun');die;
        $this->load->view('admin/index-dark');
    }
    public function rtl()
    {
        $this->load->view('admin/index-rtl');
    }
    public function rtl_dark()
    {
        $this->load->view('admin/index-rtl-dark');
    }
    public function sidebar_dark()
    {
        $this->load->view('admin/index-sidebar-dark');
    }
    public function sidebar_colored()
    {
        $this->load->view('admin/index-sidebar-colored');
    }
  
    public function addappointment()
    {
        // var_dump('in');die;
        if($this->input->post())
        {
            
            $data['ap_id'] = $this->input->post('ap_id');
            $data['name'] = $this->input->post('name');
            $data['age'] = $this->input->post('age');
            $data['gender'] = $this->input->post('gender');
            $data['department'] = $this->input->post('department');
            $data['dr_id'] = $this->input->post('dr_id');
            $data['fees'] = $this->input->post('fees');
            $data['address'] = $this->input->post('address');
            $data['cnic'] = $this->input->post('cnic');
            $data['phone'] = $this->input->post('phone');
            $data['date'] = $this->input->post('date');
            $data['time'] = $this->input->post('time');
            // $data['image'] = $this->input->post('image');
            // var_dump($data);die;
            $response = $this->Site_model->insertappointment($data);
            
            if($response==true)
            {
                $this->session->set_userdata('submit',$response);
                // var_dump($this->session->userdata('submit'));die;
              return redirect ('booking-appointment');
            }
            else
            {
                $this->load->view('addpatient');
            }
        }
    }
    public function site_appointment()
    {
        // var_dump('in');die;
        if($this->input->post())
        {
            
            $data['ap_id'] = $this->input->post('ap_id');
            $data['name'] = $this->input->post('name');
            $data['age'] = $this->input->post('age');
            $data['gender'] = $this->input->post('gender');
            $data['department'] = $this->input->post('department');
            $data['dr_id'] = $this->input->post('dr_id');
            $data['fees'] = $this->input->post('fees');
            $data['address'] = $this->input->post('address');
            $data['cnic'] = $this->input->post('cnic');
            $data['phone'] = $this->input->post('phone');
            $data['date'] = $this->input->post('date');
            $data['time'] = $this->input->post('time');
        
            // $data['image'] = $this->input->post('image');
            // var_dump($data);die;
            $response = $this->Site_model->insertappointment($data);
            
            if($response==true)
            {
                $this->session->set_userdata('submit',$response);
                // var_dump($this->session->userdata('submit'));die;
              return redirect ('index-three');
            }
            else
            {
                $this->load->view('addpatient');
            }
        }
    }
   
 
    
  
}
?>