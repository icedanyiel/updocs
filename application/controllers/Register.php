<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('register_model');
    }

	public function index()
	{
        $this->load->view('templates/header');

		$data = array();
        $userData = array();
        if($this->input->post('regisSubmit')){
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'password', 'required');
        }

		$userData = array(
                'name' => strip_tags($this->input->post('name')),
                'email' => strip_tags($this->input->post('email')),
                'password' => md5($this->input->post('password'))
                );

		if($this->form_validation->run() == true){
                $insert = $this->register_model->register($userData);
                if($insert){
                    $this->session->set_userdata('success_msg', 'Your registration was successfully. Please login to your account.');
                }else{
                    $data['error_msg'] = 'Some problems occured, please try again.';
                }
                redirect('login');
            }
        $this->load->view('register');

				//$this->register_model->register($datas);
        /*$data['title']="Registration";*/
        $this->load->view('templates/footer');
	}
}
