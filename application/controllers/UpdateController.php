<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UpdateController extends CI_Controller {

    public function __construct() {
        parent::__construct();
    
        $this->load->database();
        $this->load->helper('url'); // URL 헬퍼를 로드합니다
        $this->load->model('UpdateModel');
    }

    public function index($id) {

        $data['record'] = $this->UpdateModel->getUpdatedData($id);

        $title = ""; // Initialize title before the if block
        $content = ""; // Initialize content before the if block

        if ($this->input->post()) {

            $id = $this->input->post('id'); 

            $title = $this->input->post('title');

            $content = $this->input->post('content');
            
            // 데이터베이스를 업데이트합니다.
            $this->UpdateModel->update_data($id, $title, $content);

            // 수정 성공 메시지를 화면에 출력
            echo "수정이 완료되었습니다.";

            // 수정이 완료되면 목록 페이지로 리디렉션
            // redirect('list');

        } else {
            // POST 데이터가 없을 때, 뷰를 로드합니다.
            $this->load->view('update_view', $data);
        }

    }

  
        
}

?>