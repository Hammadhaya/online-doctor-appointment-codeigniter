<?php
class Admin extends CI_Controller {
    public function __construct()
    {
        parent :: __construct();
        $this->load->database();
        $this->load->model('Admin_model');
        $this->load->library('upload');
        $this->load->library('session');
        $this->load->library('form_validation');
    }
    public function admin_index()
    {
        if($this->session->userdata('adminuser') != NULL)
        {
           
            $this->load->view('admin/index');
        }
        else
        {
        //   return redirect('admin-login');
        $this->load->view('admin-login');
        }
    }
    public function doctor_page()
    {
        if($this->session->userdata('adminuser') != NULL)
        {
            
            $data['services']=$this->Admin_model->servicelist();
            // $data['doctor']=$this->Admin_model->list();
            $this->load->view('admin/add-doctor',$data);
    
        }
        else
        {
        //   return redirect('admin-login');
        $this->load->view('admin-login');
        }
    }
    public function doctor()
	{
        $data['doctor']=$this->Admin_model->list();
		// var_dump($data);die;
		$this->load->view('booking-appointment',$data);
        // echo json_encode($data);
	}
    public function doctors()
    {
        if($this->session->userdata('adminuser') != NULL)
        {
            
            $data['doctor']=$this->Admin_model->drlist();
            $this->load->view('admin/doctors',$data);
    
        }
        else
        {
        //   return redirect('admin-login');
        $this->load->view('admin-login');
        }
    }
    public function services()
    {
        if($this->session->userdata('adminuser') != NULL)
        {
           
            $data['services']=$this->Admin_model->servicelist();
            $this->load->view('admin/showservices',$data);
    
        }
        else
        {
        //   return redirect('admin-login');
        $this->load->view('admin-login');
        }
    }
    public function dr_profile()
    {
        if($this->session->userdata('adminuser') != NULL)
        {
           
            $this->load->view('admin/dr-profile');
    
        }
        else
        {
        //   return redirect('admin-login');
        $this->load->view('admin-login');
        }
    
    }
    public function appoint()
    {
        if($this->session->userdata('adminuser')!=NULL)
        {
            $data['doctors'] = $this->Admin_model->list();
            // var_dump($data);die; 
            // $this->load->view('booking-appointment',$data);
            $this->load->view('admin/appointment',$data);

            // var_dump('in');die;
            // return redirect('booking-appointment');
            // $this->load->view('dashboard');
        }
        else
        {
          return redirect('login-page');
        }
    }
    public function appointment_page()
    {
        if($this->session->userdata('adminuser') != NULL)
        {
           
    
            // $data['doctor']=$this->Admin_model->drlist();
            $data['appointments']=$this->Admin_model->appointlist();
            // var_dump($appointment);die;
            $this->load->view('admin/appointment',$data);
        }
        else
        {
        //   return redirect('admin-login');
        $this->load->view('admin-login');
        }
    }
    public function admin_patients()
    {
        if($this->session->userdata('adminuser') != NULL)
        {
           
    
            $patient['patient']=$this->Admin_model->patientlist();
            $this->load->view('admin/patients',$patient);
        }
        else
        {
        //   return redirect('admin-login');
        $this->load->view('admin-login');
        }
    }
    public function patient_page()
    {
        if($this->session->userdata('adminuser') != NULL)
        {
           
            $data['services']=$this->Admin_model->servicelist();
            $this->load->view('admin/add-patient',$data);
    
        }
        else
        {
        //   return redirect('admin-login');
        $this->load->view('admin-login');
        }
    }
    public function patient_profile()
    {
        if($this->session->userdata('adminuser') != NULL)
        {
           
    
            $this->load->view('admin/patient-profile');
        }
        else
        {
        //   return redirect('admin-login');
        $this->load->view('admin-login');
        }
    }
    public function approve ($id=0)
    {
        $data = $this->Admin_model->updateappointment($id);
        if(true)
        {
            return redirect('appointment-page');
        }
    }
    public function login_page()
    {
        $this->load->view('login');
    }
    public function admin_login()
    {
        
        $this->load->view('admin-login');
    }
    public function admin_logout()
    {
        $this->session->unset_userdata('adminuser');
        $this->load->view('admin-login');
    }
    public function logout_page()
    {
        $this->session->unset_userdata('user');
        // return redirect('index-three');
        $this->load->view('login');
    }
    public function signup_page()
    {
        $this->load->view('signup');
    }
    public function adminsignup_page()
    {
        $this->load->view('admin-signup');
    }
    public function services_page()
    {
        if($this->session->userdata('adminuser') != NULL)
        {
           
            $this->load->view('admin/addservices');
    
        }
        else
        {
        //   return redirect('admin-login');
        $this->load->view('admin-login');
        }
    }
    public function show_services()
    {
        if($this->session->userdata('adminuser') != NULL)
        {
           
            $service['services']=$this->Admin_model->servicelist();
            $this->load->view('admin/showservices',$service);
    
        }
        else
        {
        //   return redirect('admin-login');
        $this->load->view('admin-login');
        }
    }
    public function insert_user()
    {
        $this->form_validation->set_rules
        (
            'fname',
            'First Name',
            'trim|required'
        );
        $this->form_validation->set_rules
        (
            'lname',
            'Last Name',
            'trim|required'
        );
        $this->form_validation->set_rules
        (
            'email',
            'Email',
            'trim|required|valid_email'
        );
        $this->form_validation->set_rules
        (
            'password',
            'Password',
            'trim|required|min_length[8]|max_length[15]',
            array
            (
                'min_length' => 'At least 8 digits of %s.',
                'max_length' => 'No more than 15 digits of %s.' 
            )
        );

        if($this->form_validation->run() == false){
            // var_dump(form_error('pg_name'));die;
            // $data['services']=$this->Admin_model->servicelist();
            $this->load->view('signup');
        }
        // var_dump('in');die;
        else
        {
            // var_dump($this->input->post());die;
            $data['fname']=$this->input->post('fname');
            $data['lname']=$this->input->post('lname');
            $data['email']=$this->input->post('email');
            $data['password']=$this->input->post('password');
            $response=$this->Admin_model->insert($data);
            if($response==true)
            {
                // var_dump('in');die;
              return redirect ('login-page');
            }
            else
            {
                $this->load->view('signup-page');
            }
        }
    }
    public function insert_admin()
    {
        $this->form_validation->set_rules
        (
            'fname',
            'First Name',
            'trim|required'
        );
        $this->form_validation->set_rules
        (
            'lname',
            'Last Name',
            'trim|required'
        );
        $this->form_validation->set_rules
        (
            'email',
            'Email',
            'trim|required|valid_email'
        );
        $this->form_validation->set_rules
        (
            'password',
            'Password',
            'trim|required|min_length[8]|max_length[15]',
            array
            (
                'min_length' => 'At least 8 digits of %s.',
                'max_length' => 'No more than 15 digits of %s.' 
            )
        );

        if($this->form_validation->run() == false){
            // var_dump(form_error('pg_name'));die;
            // $data['services']=$this->Admin_model->servicelist();
            $this->load->view('admin-signup');
        }
        // var_dump('in');die;
        else
        {
            // var_dump($this->input->post());die;
            $data['fname']=$this->input->post('fname');
            $data['lname']=$this->input->post('lname');
            $data['email']=$this->input->post('email');
            $data['password']=$this->input->post('password');
            $response=$this->Admin_model->insertadmin($data);
            if($response==true)
            {
                // var_dump('in');die;
              return redirect ('admin-login');
            }
            else
            {
                $this->load->view('admin-signup');
            }
        }
    }
    public function add_services()
    {
        $this->form_validation->set_rules
        (
            'department',
            'Department',
            'trim|required'
        );
        $this->form_validation->set_rules
        (
            'content',
            'Content',
            'trim|required'
        );
        if($this->form_validation->run() == false){
            // var_dump(form_error('pg_name'));die;
            $data['services']=$this->Admin_model->servicelist();
            $this->load->view('admin/addservices',$data);
        }
        // var_dump('in');die;
        else
        {
            // var_dump($this->input->post());die;
            $data=array();

            if($_FILES['image'] && $_FILES['image'] != '' && $_FILES['image']['name'] != '')
            {
                $config = array(
                    'upload_path' => 'uploads',
                    'allowed_types' => '*',
                    'encrypt_name' => True,
                );
                $this->upload->initialize($config);
                $img=$_FILES['image']['name'];
                if($this->upload->do_upload('image')){    
                    $imag = $this->upload->data();
                    $image = $imag['file_name'];
                    $data['image'] = $image;
                    // var_dump($immg);die;
                    // echo"<pre>";
                    // print_r($imge); 
                    // var_dump($img);die;
                }
                else{
                    echo $this->upload->display_error();
                }
            }
            $data['sr_id']=$this->input->post('sr_id');
            $data['department']=$this->input->post('department');
            $data['content']=$this->input->post('content');
            $response=$this->Admin_model->insertservice($data);
            if($response==true)
            {
                // var_dump('in');die;
              return redirect ('show-services');
            }
           
        }
    }
    public function identify_user()
    {
        if($this->input->post())
        {
            $data['email'] = $this->input->post('email');
            $data['password'] = $this->input->post('password');
            // var_dump($data); die;
            $response = $this->Admin_model->identify($data);
            if($response!=false)
            {
                // var_dump($response);die;
                $this->session->set_userdata('user',$response);
                // var_dump($this->session->userdata('user')['']);die;
                // var_dump($this->session->userdata('user')['user_id']);die;
                if($this->session->userdata('user')!==NULL)
                {
                    // var_dump('in');die;
                    $this->load->view('home');
                    // $this->load->view('dashboard');
                }
            }
            else
            {
                $data['email'] = $this->input->post('email');
                $data['password'] = $this->input->post('password');
                $this->session->set_userdata('tempuser',$data);
                // var_dump('out'); die;
                $this->load->view('login');
            }
        }
    }
    public function identify_admin()
    {
        if($this->input->post())
        {
            $data['email'] = $this->input->post('email');
            $data['password'] = $this->input->post('password');
            // var_dump($data); die;
            $response = $this->Admin_model->identifyadmin($data);
            if($response!=false)
            {
                // var_dump($response);die;
                $this->session->set_userdata('adminuser',$response);
                // var_dump($this->session->userdata('user')['']);die;
                // var_dump($this->session->userdata('user')['user_id']);die;
                if($this->session->userdata('adminuser')!==NULL)
                {
                    // var_dump('in');die;
                    return redirect('admin');
                    // $this->load->view('dashboard');
                }
            }
            else
            {
                $data['email'] = $this->input->post('email');
                $data['password'] = $this->input->post('password');
                $this->session->set_userdata('tempadmin',$data);
                // var_dump('out'); die;
                $this->load->view('admin-login');
                // var_dump('out'); die;
                
            }
        }
    }
    public function add_doctor()
    {
        $this->form_validation->set_rules
        (
            'fname',
            'First Name',
            'required|min_length[3]|max_length[15]',
            array
            (
             'min_length' => 'At least 3 characters of %s.',
             'max_length' => 'No more than 15 characters of %s.'
            )
        );
        $this->form_validation->set_rules
        (
            'lname',
            'Last Name',
            'required|min_length[3]|max_length[15]',
            array
            (
             'min_length' => 'At least 3 characters of %s.',
             'max_length' => 'No more than 15 characters of %s.'
            )
        );
            
        $this->form_validation->set_rules
        (
            'email',
            'Email',
            'trim|required|valid_email'
        );
        $this->form_validation->set_rules
        (
            'phone',
            'Phone',
            'trim|required|max_length[11]'
        );
        $this->form_validation->set_rules
        (
            'department',
            'Department',
            'trim|required|max_length[20]'
        );
        $this->form_validation->set_rules
        (
            'bio',
            'Bio',
            'trim|required|max_length[255]'
        );
        $this->form_validation->set_rules
        (
            'fees',
            'Fees',
            'trim|required'
        );
        $this->form_validation->set_rules
        (
            'address',
            'Address',
            'trim|required'
        );
        $this->form_validation->set_rules
        (
            'stime',
            'Start Time',
            'trim|required'
        );
        $this->form_validation->set_rules
        (
            'etime',
            'End Time',
            'trim|required'
        );
        $this->form_validation->set_rules
        (
            'day',
            'Day',
            'trim|required'
        );
        $this->form_validation->set_rules
        (
            'gender',
            'Gender',
            'trim|required'
        );
        // $this->form_validation->set_rules
        // (
        //     'email',
        //     'Email',
        //     'required|regex_match[/@/]|regex_match[/.com$/]',
        //     array
        //     (
        //      'required' => 'You must provide a %s.',
        //      'regex_match' => 'The %s field must contain "@".',
        //      'regex_match' => 'The %s field must end with ".com".'
        //     )
        // );

        if($this->form_validation->run() == false){
            // var_dump(form_error('pg_name'));die;
            $data['services']=$this->Admin_model->servicelist();
            $this->load->view('admin/add-doctor',$data);
        }
    
        else
        {

            $data=array();

            if($_FILES['image'] && $_FILES['image'] != '' && $_FILES['image']['name'] != '')
            {
                $config = array(
                    'upload_path' => 'uploads',
                    'allowed_types' => '*',
                    'encrypt_name' => True,
                );
                $this->upload->initialize($config);
                $img=$_FILES['image']['name'];
                if($this->upload->do_upload('image')){    
                    $imag = $this->upload->data();
                    $image = $imag['file_name'];
                    $data['image'] = $image;
                    // var_dump($immg);die;
                    // echo"<pre>";
                    // print_r($imge); 
                    // var_dump($img);die;
                }
                else{
                    echo $this->upload->display_error();
                }
            }
            $data['dr_id'] = $this->input->post('dr_id');
            $data['fname'] = $this->input->post('fname');
            $data['lname'] = $this->input->post('lname');
            $data['email'] = $this->input->post('email');
            $data['phone'] = $this->input->post('phone');
            $data['department'] = $this->input->post('department');
            $data['bio'] = $this->input->post('bio');
            $data['fees'] = $this->input->post('fees');
            $data['address'] = $this->input->post('address');
            $data['stime'] = $this->input->post('stime');
            $data['etime'] = $this->input->post('etime');
            $data['day'] = $this->input->post('day');
            $data['gender'] = $this->input->post('gender');
            // $data['image'] = $this->input->post('image');
            // var_dump($data);die;
            $response = $this->Admin_model->insertdoctor($data);
            
            if($response==true)
            {
                // var_dump('in');die;
              return redirect ('admin/doctors');
            }
            else
            {
                $this->load->view('admin/add-doctor');
            }
        }
    }
    public function add_patient()
    {
        $this->form_validation->set_rules
        (
            'pt_name',
            'Patient Name',
            'required|min_length[3]|max_length[15]',
            array
            (
             'min_length' => 'At least 3 characters of %s.',
             'max_length' => 'No more than 15 characters of %s.'
            )
        );
        $this->form_validation->set_rules
        (
            'pt_age',
            'Age',
            'trim|required'
        );
        $this->form_validation->set_rules
        (
            'pt_gender',
            'Gender',
            'trim|required'
        );
        $this->form_validation->set_rules
        (
            'pt_phone',
            'Phone',
            'trim|required'
        );
        $this->form_validation->set_rules
        (
            'pt_department',
            'Department',
            'trim|required'
        );
        $this->form_validation->set_rules
        (
            'pt_date',
            'Date',
            'trim|required'
        );
        $this->form_validation->set_rules
        (
            'pt_time',
            'Time',
            'trim|required'
        );
        $this->form_validation->set_rules
        (
            'pt_address',
            'Address',
            'trim|required'
        );
        if($this->form_validation->run() == false){
            // var_dump(form_error('pg_name'));die;
            // $data['services']=$this->Admin_model->servicelist();
            $this->load->view('admin/add-patient');
        }
        else
        {

            $data=array();

            if($_FILES['image'] && $_FILES['image'] != '' && $_FILES['image']['name'] != '')
            {
                $config = array(
                    'upload_path' => 'uploads',
                    'allowed_types' => '*',
                    'encrypt_name' => True,
                );
                $this->upload->initialize($config);
                $img=$_FILES['image']['name'];
                if($this->upload->do_upload('image')){    
                    $imag = $this->upload->data();
                    $image = $imag['file_name'];
                    $data['image'] = $image;
                    // var_dump($immg);die;
                    // echo"<pre>";
                    // print_r($imge); 
                    // var_dump($img);die;
                }
                else{
                    echo $this->upload->display_error();
                }
            }
            $data['pt_id'] = $this->input->post('pt_id');
            $data['pt_name'] = $this->input->post('pt_name');
            $data['pt_age'] = $this->input->post('pt_age');
            $data['pt_gender'] = $this->input->post('pt_gender');
            // $data['pt_email'] = $this->input->post('pt_email');
            $data['pt_phone'] = $this->input->post('pt_phone');
            $data['pt_department'] = $this->input->post('pt_department');
            // $data['comments'] = $this->input->post('comments');
            $data['pt_date'] = $this->input->post('pt_date');
            $data['pt_time'] = $this->input->post('pt_time');
            $data['pt_address'] = $this->input->post('pt_address');
            
            // $data['image'] = $this->input->post('image');
            // var_dump($data);die;
            $response = $this->Admin_model->insertpatient($data);
            
            if($response==true)
            {
                // var_dump('in');die;
                return redirect('admin-patients');
            }
            else
            {
                $this->load->view('add-patient');
            }
        } 
    }
    public function pages()
    {
        if($this->session->userdata('adminuser') != NULL)
        {
           
            $this->load->view('admin/pages');
    
        }
        else
        {
        //   return redirect('admin-login');
        $this->load->view('admin-login');
        }
    }
    public function content()
    {
        if($this->session->userdata('adminuser') != NULL)
        {
           
            // var_dump('in');die;
            $data['pages']=$this->Admin_model->pageslist();
          $this->load->view('admin/content',$data);
    
        }
        else
        {
        //   return redirect('admin-login');
        $this->load->view('admin-login');
        }
    }
    public function add_page()
    {
        $this->form_validation->set_rules('pg_name','Page Name','required');
        $this->form_validation->set_rules('slug','Slug','required');
        if($this->form_validation->run() == false){
            // var_dump(form_error('pg_name'));die;
            $this->load->view('admin/pages');
        }
        else{
            $data['pg_id'] = $this->input->post('pg_id');
            $data['pg_name'] = $this->input->post('pg_name');
            $data['slug'] = $this->input->post('slug');
            // $data['status'] = $this->input->post('status');
            $response = $this->Admin_model->insertpage($data);
                
            if($response==true)
            {
                // var_dump('in');die;
                return redirect('showpages');
            }
            else
            {
                $this->load->view('admin/pages');
            }
        }
    }
    public function add_content()
    {
        if($this->input->post())
        {

            $data=array();

            if($_FILES['image'] && $_FILES['image'] != '' && $_FILES['image']['name'] != '')
            {
                $config = array(
                    'upload_path' => 'uploads',
                    'allowed_types' => '*',
                    'encrypt_name' => True,
                );
                $this->upload->initialize($config);
                $img=$_FILES['image']['name'];
                if($this->upload->do_upload('image')){    
                    $imag = $this->upload->data();
                    $image = $imag['file_name'];
                    $data['image'] = $image;
                    // var_dump($immg);die;
                    // echo"<pre>";
                    // print_r($imge); 
                    // var_dump($img);die;
                }
                else{
                    echo $this->upload->display_error();
                }
            }

            $data['c_id'] = $this->input->post('c_id');
            $data['pg_name'] = $this->input->post('pg_name');
            $data['h1'] = $this->input->post('h1');
            $data['h2'] = $this->input->post('h2');
            $data['keyword'] = $this->input->post('keyword');
            $data['title'] = $this->input->post('title');
            $data['description'] = $this->input->post('description');
            // var_dump($data);die;
            $response = $this->Admin_model->insertcontent($data);
                    
                        
            if($response==true)
           {
                 // var_dump('in');die;
                 return redirect('showcontent');
           }
            else
           {
               $this->load->view('admin/content');
           }
        }
    }
    public function add_inquiry()
    {

        $this->form_validation->set_rules
        (
            'in_name',
            'Your Name',
            'required|min_length[3]|max_length[15]',
            array
            (
             'min_length' => 'At least 3 characters of %s.',
             'max_length' => 'No more than 15 characters of %s.'
            )
        );
        $this->form_validation->set_rules
        (
            'in_email',
            'Email',
            'trim|required|valid_email'
        );
        $this->form_validation->set_rules
        (
            'in_subject',
            'Subject',
            'required|min_length[3]|max_length[200]',
            array
            (
             'min_length' => 'At least 3 characters of %s.',
             'max_length' => 'No more than 200 characters of %s.'
            )
        );
        $this->form_validation->set_rules
        (
            'in_comments',
            'Comments',
            'required|min_length[3]|max_length[100]',
            array
            (
             'min_length' => 'At least 3 characters of %s.',
             'max_length' => 'No more than 100 characters of %s.'
            )
        );
        if($this->form_validation->run() == false){
            // var_dump(form_error('pg_name'));die;
            // $data['services']=$this->Admin_model->servicelist();
            $this->load->view('contact');
        }
        else
        {
            $data['in_name'] = $this->input->post('in_name');
            $data['in_email'] = $this->input->post('in_email');
            $data['in_subject'] = $this->input->post('in_subject');
            $data['in_comments'] = $this->input->post('in_comments');
            // var_dump($data);die;
            $response = $this->Admin_model->insertinquiry($data);
            if($response==true)
            {
                // var_dump('in');die;
                return redirect('pharmacy-contact');
            }
        }
    }
    public function show_pages()
    {
        if($this->session->userdata('adminuser') != NULL)
        {
           
    
            $data['pages']=$this->Admin_model->pageslist();
            // var_dump($data);die;
            $this->load->view('admin/showpages',$data);
        }
        else
        {
        //   return redirect('admin-login');
        $this->load->view('admin-login');
        }
    }
    public function show_inquiry()
    {
        if($this->session->userdata('adminuser') != NULL)
        {
           
    
            $data['inquiry']=$this->Admin_model->inquirylist();
            // var_dump($data);die;
            $this->load->view('admin/showinquiry',$data);
        }
       
    }
    public function show_content()
    {
        if($this->session->userdata('adminuser') != NULL)
        {
           
            $data['content']=$this->Admin_model->contentlist();
            // var_dump($data);die;
            $this->load->view('admin/showcontent',$data);
    
        }
        else
        {
        //   return redirect('admin-login');
        $this->load->view('admin-login');
        }
    }
    
    public function delete($id=0)
    {
        // var_dump($id);die;
       $response = $this->Admin_model->deleterecord($id);
       if($response==true)
       {
        return redirect('admin/doctors');
       }
    }

    public function edit($id=0)
    {
        if($this->session->userdata('adminuser') != NULL)
        {
           
            // var_dump($id);die;
            $data['doctor'] = $this->Admin_model->selectdata($id);
            $data['services']=$this->Admin_model->servicelist();
            // var_dump($data);die;
            $this->load->view('admin/add-doctor',$data); 
    
        }
        else
        {
        //   return redirect('admin-login');
        $this->load->view('admin-login');
        }
    }
    public function ptdelete($id=0)
    {
        if($this->session->userdata('adminuser') != NULL)
        {
           
            // var_dump($id);die;
           $response = $this->Admin_model->ptdeleterecord($id);
           if($response==true)
           {
            return redirect('admin-patients');
           }
    
        }
        else
        {
        //   return redirect('admin-login');
        $this->load->view('admin-login');
        }
    }

    public function ptedit($id=0)
    {
        if($this->session->userdata('adminuser') != NULL)
        {
           
            // var_dump($id);die;
            $data['patient'] = $this->Admin_model->ptselectdata($id);
            $data['services']=$this->Admin_model->servicelist();
            // $data['doctor']=$this->Admin_model->drlist();
    
            // var_dump($data);die;
            $this->load->view('admin/add-patient',$data); 
    
        }
        else
        {
        //   return redirect('admin-login');
        $this->load->view('admin-login');
        }
    }
    public function srdelete($id=0)
    {
        if($this->session->userdata('adminuser') != NULL)
        {
           
            // var_dump($id);die;
           $response = $this->Admin_model->srdeleterecord($id);
           if($response==true)
           {
            return redirect('show-services');
           }
    
        }
        else
        {
        //   return redirect('admin-login');
        $this->load->view('admin-login');
        }
    }

    public function sredit($id=0)
    {
        if($this->session->userdata('adminuser') != NULL)
        {
           
    
            // var_dump($id);die;
            $data['services'] = $this->Admin_model->srselectdata($id);
            // var_dump($data);die;
            $this->load->view('admin/addservices',$data); 
        }
        else
        {
        //   return redirect('admin-login');
        $this->load->view('admin-login');
        }
    }
    public function pgdelete($id=0)
    {
        if($this->session->userdata('adminuser') != NULL)
        {
           
            // var_dump($id);die;
           $response = $this->Admin_model->pgdeleterecord($id);
           if($response==true)
           {
            return redirect('showpages');
           }
    
        }
        else
        {
        //   return redirect('admin-login');
        $this->load->view('admin-login');
        }
    }

    public function pgedit($id=0)
    {
        if($this->session->userdata('adminuser') != NULL)
        {
           
    
            // var_dump($id);die;
            $data['pages'] = $this->Admin_model->pgselectdata($id);
            // var_dump($data);die;
            $this->load->view('admin/pages',$data); 
        }
        else
        {
        //   return redirect('admin-login');
        $this->load->view('admin-login');
        }
    }
    public function cdelete($id=0)
    {
        if($this->session->userdata('adminuser') != NULL)
        {
           
    
            // var_dump($id);die;
           $response = $this->Admin_model->cdeleterecord($id);
           if($response==true)
           {
            return redirect('showcontent');
           }
        }
        else
        {
        //   return redirect('admin-login');
        $this->load->view('admin-login');
        }
    }

    public function cedit($id=0)
    {
        if($this->session->userdata('adminuser') != NULL)
        {
           
    
            // var_dump($id);die;
            $data['pages']=$this->Admin_model->pageslist();
            // $data['content']=$this->Admin_model->contentlist();
            $data['content'] = $this->Admin_model->cselectdata($id);
            // var_dump($data);die;
            $this->load->view('admin/content',$data); 
        }
        else
        {
        //   return redirect('admin-login');
        $this->load->view('admin-login');
        }
    }
    
    public function inquirydelete($id=0)
    {
        if($this->session->userdata('adminuser') != NULL)
        {
           
    
            // var_dump($id);die;
           $response = $this->Admin_model->inquirydeleterecord($id);
           if($response==true)
           {
            return redirect('show-inquiry');
           }
        }
        else
        {
        //   return redirect('admin-login');
        $this->load->view('admin-login');
        }
    }


}
?>