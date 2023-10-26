<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class ListController extends CI_Controller{

        
        public function index() {

            $this->load->database();


            $this->load->model('ListModel');

            $data['crud_data'] = $this->ListModel->get_crud_data();
            
            $this->load->view('list_view', $data);
            

        }
    }
?>