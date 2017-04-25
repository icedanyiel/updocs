<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

	public function index()
	{
        $this->load->view('templates/header');
		$this->load->view('upload');
        $this->load->view('templates/footer');
	}
}
