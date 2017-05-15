<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MyAccount extends CI_Controller {

function __construct()
 {
   parent::__construct();
 }
 
public function index()
	{
    if($this->session->userdata('logged_in'))
	{
     $session_data = $this->session->userdata('logged_in');
     $data['email'] = $session_data['email'];
	 $data['name'] = $session_data['name'];
     $this->load->view('templates/header',$data);
     $this->load->view('myaccount',$data);
     $this->load->view('templates/footer',$data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
  }
  }
  
 function logout()
 {
   $this->session->unset_userdata('logged_in');
   $this->session->sess_destroy();
   redirect('home', 'refresh');
 }
 
}
