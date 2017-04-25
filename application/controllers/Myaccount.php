<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LogIn extends CI_Controller {

	public function index()
	{
        $this->load->view('templates/header');
		echo "This is your account";
        $this->load->view('templates/footer');
	}
}
