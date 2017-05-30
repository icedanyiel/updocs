<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MyAccount extends CI_Controller {

function __construct()
 {
   parent::__construct();
   $this->load->library('session');
    
 }
 
public function index()
{
    if($this->session->userdata('logged_in'))
    {
    //trebe instalat plugin pe Chrome de LocalLinks sa deschida fisierele locale https://chrome.google.com/webstore/detail/locallinks/jllpkdkcdjndhggodimiphkghogcpida
      $this->load->model("myaccount_model");

      $session_data = $this->session->userdata('logged_in');
      $id = $session_data['id'];
      $data["fetch_data"] = $this->myaccount_model->fetch_data($id);

      $session_data = $this->session->userdata('logged_in');
      $data['email'] = $session_data['email'];
      $data['name'] = $session_data['name'];
	 
	 
      $this->load->view('templates/header');
      $this->load->view('myaccount',$data);
      $this->load->view('templates/footer');
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
  }
}
  
 public function delete_data($idfile){
          $this->load->model("myaccount_model");  
          $this->myaccount_model->delete_data($idfile);
		      redirect("MyAccount");  		   
      }  
   

 function logout()
 {
   $this->session->unset_userdata('logged_in');
   $this->session->sess_destroy();
   redirect('home', 'refresh');
 }
 
}
