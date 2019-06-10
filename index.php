<?php

include_once "config.php";
include_once "mvc/controllers/controller.php";
include_once "mvc/models/model.php";


// $controller = new \App\Controller\PostController();
use App\Controller\PostController;
$controller = new PostController();
$data = $controller->index();

