<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UpdateController extends CI_Controller {

    public function __construct() {

        parent::__construct();

        $this->load->database(); // 데이터베이스 라이브러리 로드

        $this->load->model('UpdateModel');
    }

    public function index($id) {

        $data['record'] = $this->UpdateModel->getUpdatedData($id);


        if ($this->input->post()) {

            $id = $this->input->post('id'); 

            $title = $this->input->post('title');

            $content = $this->input->post('content');
            
            // 데이터베이스를 업데이트합니다.
            $this->UpdateModel->update_data($id, $title, $content);

            // 수정 성공 메시지를 화면에 출력
            echo "수정이 완료되었습니다.";

            // 수정이 완료되면 목록 페이지로 리디렉션
            redirect('list');

            $this->load->view('update_view', $data);
            }

            var_dump($id);
            var_dump($title);
            var_dump($content);

    }

  
        
}

?>