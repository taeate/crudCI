<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

   public function index(){

	$data['message'] = 'Hello World';

	$this->load->view('welcome_message',$data);
	
   }

}
