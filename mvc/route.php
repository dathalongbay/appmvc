<?php
namespace MVC;

/**
 * Cách 2 Import Namespace Và sử dụng tên class bên trong class
 */
use MVC\Controllers\PostController;
use MVC\Controllers\ErrorController;
class Route {


    public function run() {

        /**
         * Cách 1 : Sử dụng tên class dài kèm namespace
         * $controller = new \MVC\Controller\PostController();
         */


        /**
         * url : index.php?controller=post&action=index
         * $controller = new PostController();
         * $controller->index();
         *
         * url : index.php?controller=post&action=edit
         * $controller = new PostController();
         * $controller->edit();
         *
         * url : index.php?controller=post&action=delete
         * $controller = new PostController();
         * $controller->delete();
         *
         * url : index.php?controller=post&action=create
         * $controller = new PostController();
         * $controller->create();
         */

        $controller = isset($_REQUEST["controller"]) ? trim($_REQUEST["controller"]) : "post";
        $controller = ucfirst($controller);
        $controllerName = "MVC\\Controllers\\".$controller."Controller";

        if (class_exists($controllerName)) {
            $controllerObject = new $controllerName();

            $action = isset($_REQUEST["action"]) ? trim($_REQUEST["action"]) : 'index';

            if (method_exists($controllerObject, $action)) {
                return $controllerObject->$action();
            } else {
                $controllerObject = new ErrorController();

                return $controllerObject->redirect404();
            }
        } else {
            $controllerObject = new ErrorController();

            return $controllerObject->redirect404();
        }

    }

}