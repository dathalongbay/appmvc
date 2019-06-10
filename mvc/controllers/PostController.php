<?php
namespace App\Controller;

// Import namespace khác vào namespace hiện tại
use App\Model\PostModel;

class PostController {


    public function index() {

        echo __METHOD__;

        $model = new PostModel();
        $data = $model->getAll();

        include_once "mvc/view/index.php";
    }

}