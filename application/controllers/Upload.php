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
				
				if($this->input->post('uplSubmit')){
					$this->form_validation->set_rules('title', 'Title', 'required');
				}



        $data = array();
        $fileData = array();
        $tagsData = array();

        if($this->input->post('regisSubmit')){

             $this->form_validation->set_rules('title', 'required');

                $fileData = array(
                        'title' => strip_tags($this->input->post('title')),
                        'description' => strip_tags($this->input->post('description')),
                        'tags' => strip_tags($this->input->post('tags'))
                        );

                if($this->form_validation->run() == true){
                        $insert = $this->upload_model->upload($fileData);
                        $insert = $this->upload_model->upload_tags($tagsData);

                }
            }
				
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