<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class CreateController extends CI_Controller {

    public function index() {

        $this->load->database();

        $this->load->model('CreateModel');

        if ($this->input->post('submit')) {

           $title =  $this->input->post('title');
           $content = $this->input->post('content');
           $this->CreateModel->save_data($title, $content);

        }

        $this->load->view('create_view');
    }
}
?>