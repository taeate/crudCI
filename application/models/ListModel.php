<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class ListModel extends CI_Model {

    public function get_list() {

        $query = $this->db->get('crud');

        return $query->result();
    }
}
?>