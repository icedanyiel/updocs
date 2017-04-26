<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyAccount extends CI_Controller {

	public function index()
	{
        $this->load->view('templates/header');
        $this->load->view('myaccount');
        $this->load->view('templates/footer');
	}
}
