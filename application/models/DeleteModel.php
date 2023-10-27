<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class DeleteModel extends CI_Model {

    public function get_article($id) {

        $query = $this->db->get_where('crud', array('id' => $id));

        return $query->result();
    }

    public function set_delete($id) {

        $this->db->where('id', $id);
        $this->db->delete('crud');
    }
}


?>