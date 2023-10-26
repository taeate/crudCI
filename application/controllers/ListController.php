<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class ListController extends CI_Controller {

    public function index() {

        $this->load->database();

        $this->load->model('ListModel');

        $list['get_list'] = $this->ListModel->get_list();

        $this->load->view('list_view', $list);

    }
}
?>