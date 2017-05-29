<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class Home extends CI_Controller {

	function __construct() {
            parent::__construct();
        }

	public function index()
	{
        $this->load->view('templates/header');
		$this->load->view('home');
        $this->load->view('templates/footer');
	}

	public function autocomplete()
        {
            // load model
            $this->load->model('updocs_model');

            $search_data = $this->input->post('search_data');

            $result = $this->updocs_model->get_autocomplete($search_data);

            if (!empty($result))
            {
                foreach ($result as $row):
                    echo "<li><a href='#'>" . $row->name . "</a></li>";
                endforeach;
            }
            else
            {
                echo "<li> <em> Not found ... </em> </li>";
            }

        }

}
