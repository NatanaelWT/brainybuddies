<?php
session_start();
$project_location = "/brainybuddies";
$me = $project_location;
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case $me . '/':
        require "views/user/main.php";
        break;
    default:
        http_response_code(404);
        echo "404";
        break;
}
