<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UpdateModel extends CI_Model {

    public function getUpdatedData($id) {

        //  데이터베이스에서 수정된 데이터를 가져오는 역할
        return $this->db->get_where('crud', array('id' => $id))->row_array();
    }


    public function update_data($id, $title, $content){

        $data = array (

            'title'=> $title,

            'content'=> $content
        );

        $where = array (
            'id'=> $id
        );

        $this->db->update('crud', $data, $where);

    }
    
}
?>