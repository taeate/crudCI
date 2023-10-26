<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database(); // 생성자에서 데이터베이스를 로드합니다.
    }

    public function getDetailInfo($id) {

        $query = $this->db->get_where('crud', array('id' => $id));

        return $query->row();
      
    }
}
?>