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
		$this->load->view('register');

		$data_form = $this->input->post(NULL,TRUE);
		if($data_form){
				$name = $data_form['name'];
				$email = $data_form['email'];
				$password = $data_form['password'];
				$datas = array(	
					'name' => $name,
					'email' => $email,
					'password' => $password
					);
				$this->register_model->register($datas);
		}
        /*$data['title']="Registration";*/
        $this->load->view('templates/footer');
	}  

}
