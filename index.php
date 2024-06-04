<?php
session_start();
$project_location = "/brainybuddies";
$me = $project_location;
$request = $_SERVER['REQUEST_URI'];
$link = explode("/",$request);

switch ($link[1].$link[2]) {
    case $link[1] . '':
        require "views/user/index.php";
        break;
    case $link[1] . 'about':
        require "views/user/about.php";
        break;
    case $link[1] . 'services':
        require "views/user/services.php";
        break;
    case $link[1] . 'courses':
        require "views/user/courses.php";
        break;
    case $link[1] . 'pricing':
        require "views/user/pricing.php";
        break;
    case $link[1] . 'contact':
        require "views/user/contact.php";
        break;
    case $link[1] . 'login':
        if (isset($_SESSION['email'])) {
            header('Location: home/..');
            break;
        }
        require "views/admin/login.php";
        break;
    case $link[1] . 'logout':
        if (isset($_SESSION['email'])) {
            require "views/admin/logout.php";
            break;
        }
    case $link[1] . 'course':
        require "views/user/course.php";
        break;
    case $link[1] . 'edit':
        if (isset($_SESSION['email'])) {
        require "views/user/edit.php";
        break;
        }
    case $link[1] . 'add':
        if (isset($_SESSION['email'])) {
        require "views/user/add.php";
        break;
        }
    case $link[1] . 'quiz':
        require "views/user/quiz.php";
        break;
    default:
        http_response_code(404);
        echo "404";
        break;
}
