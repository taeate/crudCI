<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CreateModel extends CI_Model {

    public function save_data($title, $content){

        $data = array(

            'title' => $title,
            'content'=> $content

        );

        $this->db->insert('crud', $data);
    }
}
?>