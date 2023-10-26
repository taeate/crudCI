<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class DetailController extends CI_Controller {

    public function index($id) {


        if (!empty($id)) {
            // DetailModel에서 데이터를 가져오는데 성공했을 경우
            $this->load->model('DetailModel');
            $detail_info = $this->DetailModel->getDetailInfo($id);
            if ($detail_info) {
                $data['detail_info'] = $detail_info;
                $this->load->view('detail_view', $data);
            } else {
                // 데이터를 가져오지 못한 경우
                echo "상세 정보를 찾을 수 없습니다.";
            }
        } else {
            echo "상세 정보를 찾을 수 없습니다.";
        }
    }
}

?>