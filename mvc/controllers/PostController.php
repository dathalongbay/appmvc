<?php
namespace MVC\Controllers;

// Import namespace khác vào namespace hiện tại
use MVC\Models\PostModel;

class PostController {


    public function index() {

        echo "<br>" . __METHOD__;

        $model = new PostModel();

        $result = $model->getAll();

        include_once "mvc/view/post/index.php";
    }


    public function create() {

        echo "<br>" . __METHOD__;

        $errors = array();

        if (isset($_POST) && !empty($_POST)) {
            $model = new PostModel();

            $status = $model->store($_POST);
            if ($status) {
                header("Location: index.php");
                exit;
            }
            $errors[] = "Lưu thất bại";
        }
        include_once "mvc/view/post/create.php";
    }


    public function edit() {

        $errors = array();
        echo "<br>" . __METHOD__;

        if (isset($_POST) && !empty($_POST)) {
            $model = new PostModel();

            $status = $model->update($_POST);
            if ($status) {
                header("Location: index.php");
                exit;
            }
            $errors[] = "Sửa thất bại";
        }

        if (isset($_GET["id"])) {
            $id = (int) $_GET["id"];

            $model = new PostModel();

            $employee = $model->getSingle($id);
        }

        include_once "mvc/view/post/edit.php";
    }


    public function delete() {

        echo "<br>" . __METHOD__;
        $errors = array();

        if (isset($_POST) && !empty($_POST)) {
            $model = new PostModel();

            $id = isset($_POST["id"]) ? (int)$_POST["id"] : 0;

            $status = $model->delete($id);
            if ($status) {
                header("Location: index.php");
                exit;
            }
            $errors[] = "Xóa thất bại";
        }

        if (isset($_GET["id"])) {
            $id = (int) $_GET["id"];

            $model = new PostModel();

            $employee = $model->getSingle($id);
        }

        include_once "mvc/view/post/delete.php";
    }

}