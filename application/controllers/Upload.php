<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

        function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('upload_model');
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('templates/header');
                $this->load->view('upload', array('error' => ' ' ));

        $session_data = $this->session->userdata('logged_in');
        $id = $session_data['id'];

        $data = array();
        $fileData = array();

        if($this->input->post('fileSubmit')){
            $this->form_validation->set_rules('title', 'title', 'required');
            $this->form_validation->set_rules('description', 'description', 'required');
        }

        $fileData = array(
            'title' => strip_tags($this->input->post('title')),
            'description' => strip_tags($this->input->post('description')),
            'iduser' => 1
            );

        if($this->form_validation->run() == true){

            $config['upload_path']          = './public/';
            $config['allowed_types']        = 'pdf|doc|docx';
            $config['max_size']             = 10000;

            $this->load->library('upload', $config);
            
            $error = array('error' => $this->upload->display_errors());

            if($this->upload->do_upload('userfile'))
            {
                $data = array('upload_data' => $this->upload->data());
                $insert = $this->upload_model->upload($fileData);
                redirect('myaccount');
            }
            else{
                $this->form_validation->set_message('upload_image', $this->upload->display_errors());
                echo "eroare";
            }

        }else
        {
        }

        $this->load->view('templates/footer');

        }

}
