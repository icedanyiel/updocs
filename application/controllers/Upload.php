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

        $data['category_list'] = $this->upload_model->getCategoryNames();

        $detrimis = array_merge(array('error' => ' ' ), $data);
        $this->load->view('upload',$detrimis);

        $this->load->view('templates/footer');
    }


    public function do_upload()
    {

        $session_data = $this->session->userdata('logged_in');
        $id = $session_data['id'];

        $data = array();
        $fileData = array();
		$tagsData=array();

        if($this->input->post('fileSubmit')){
            $this->form_validation->set_rules('title', 'title', 'required');
            $this->form_validation->set_rules('description', 'description', 'required');
        }
		
        if($this->form_validation->run() == true){

            $config['upload_path']          = './public/';
            $config['allowed_types']        = 'pdf|doc|docx';
            $config['max_size']             = 10000;
			

            $this->load->library('upload', $config);

            if($this->upload->do_upload('userfile'))
            {
                $fileData = array(
                    'title' => strip_tags($this->input->post('title')),
                    'description' => strip_tags($this->input->post('description')),
                    'idcategory' => $this->input->post('categoryid'),
                    'iduser' => $id,
                    'filename' => $this->upload->data('file_name')
                );
                
                $data = array('upload_data' => $this->upload->data());
				
                //introduce fisierul cu datele de titlu si descriere si nume si returneaza id-ul ultimului fisier introdus
				$idfile = $this->upload_model->upload('file',$fileData);
				
				$tags = strip_tags($this->input->post('tags'));
				
				//introduce fiecare tag in tabela tags rand pe rand dupa explode 
				$tagsArray=explode(',',$tags);
				for($i=0; $i<count($tagsArray); $i++) {
					$tagsData[$i] = array(
						'file_id' => $idfile, 
						'name'=>$tagsArray[$i]
						);
				}
				$insert = $this->upload_model->upload2('tags',$tagsData);
	
                $this->load->view('templates/header');
                $this->load->view('upload_success', $data);
            }
            else{
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('templates/header');
                $this->load->view('upload', $error);
            }

        }else
        {
        }

        $this->load->view('templates/footer');

        }

}
