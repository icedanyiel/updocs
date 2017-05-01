
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class LogIn extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
   $this->load->model('login_model');
 }
 
 function index()
 {
    $this->load->view('templates/header');
	
	//This method will have the credentials validation
	
	$this->load->library('form_validation');
 
   $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');
 
   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
     $this->load->view('login');
   }
   else
   {
     //Go to private area
     redirect('myaccount');
   }
    $this->load->view('templates/footer');
 
 }
 
 function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   $email = $this->input->post('email');
 
   //query the database
   $result = $this->login_model->login($email, $password);
 
   if($result)
   {

     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'id' => $row->id,
         'email' => $row->email
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid email or password');
     return false;
   }
   
 }
}
?>
