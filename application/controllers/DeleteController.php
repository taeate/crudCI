<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DeleteController extends CI_Controller {

    public function __construct() {

        parent::__construct();

        $this->load->model('DeleteModel');

        $this->load->helper('url');

        $this->load->database();

    }

    public function index($id) {


        // 글이 존재하는지 확인
        $article = $this->DeleteModel->get_article($id);



        ## 해당 글을 가져와서 삭제해서 view 로 보내기
        if ($article) {
            
            $this->DeleteModel->set_delete($id);

            echo "<script>
                    alert('삭제 되었습니다.');
                    window.location = '../list';
                </script>";
        }
        else {
            echo "글을 찾을 수 없습니다";
        }

        $this->load->view('delete_view');
    }
}

?>