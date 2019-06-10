<?php
namespace App\Controllers;

// Import namespace khác vào namespace hiện tại
use App\Models\PostModel;

class PostController {


    public function index() {

        echo "<br>" . __METHOD__;

        $model = new PostModel();

        $data = $model->getAll();

        include_once "mvc/view/post/index.php";
    }


    public function create() {

        echo "<br>" . __METHOD__;

        $model = new PostModel();

        $data = $model->getAll();

        include_once "mvc/view/post/create.php";
    }


    public function edit() {

        echo "<br>" . __METHOD__;

        $model = new PostModel();

        $data = $model->getAll();

        include_once "mvc/view/post/edit.php";
    }


    public function delete() {

        echo "<br>" . __METHOD__;

        $model = new PostModel();

        $data = $model->getAll();

        include_once "mvc/view/post/delete.php";
    }

}