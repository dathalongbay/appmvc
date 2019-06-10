<?php
namespace App\Model;

class PostModel {


    public function getAll() {
        $data = array();
        $data[] = array("id" => 1, "name" => "productA");
        $data[] = array("id" => 2, "name" => "productB");
        $data[] = array("id" => 3, "name" => "productC");

        return $data;
    }


    public function getSingle() {
        $data = array("id" => 1, "name" => "productA");

        return $data;
    }
}