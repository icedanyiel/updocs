<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }

        public function index()
        {
        		$this->load->view('templates/header');
                $this->load->view('upload', array('error' => ' ' ));
       			$this->load->view('templates/footer');
        }

        public function do_upload()
        {
                $config['upload_path']          = './public/';
                $config['allowed_types']        = 'pdf|doc|docx';
                $config['max_size']             = 10000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

        				$this->load->view('templates/header');
                        $this->load->view('upload', $error);
       					$this->load->view('templates/footer');
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

        				$this->load->view('templates/header');
                        $this->load->view('upload_success', $data);
       					$this->load->view('templates/footer');
                }
        }
}
?>