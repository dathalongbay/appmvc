<?php


define("DATABASE_SERVER", "localhost");
define("DATABASE_USER", "root");
define("DATABASE_PASSWORD", "");
define("DATABASE_NAME", "mvc1");

$connection = new mysqli(DATABASE_SERVER, DATABASE_USER, DATABASE_PASSWORD, DATABASE_NAME);

if ($connection->connect_error == true) {
    die("Không thể kết nối đến mySQL");
}
