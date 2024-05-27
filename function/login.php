<?php

function login($email, $password)
{
    include 'function/crud.php';
    include 'function/func.php';
    if (mysqli_num_rows(readWhere2("admin", "email", $email, "password", md5($password))) == 1) {
        $temp = readWhere("admin", "email", $email);
        $data = mysqli_fetch_array($temp);
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['email'] = $data['email'];
        $_SESSION['username'] = $data['username'];
        redirect("home/..");
    }
}

function logout()
{
    include 'function/func.php';
    $_SESSION['nama'] = "";
    $_SESSION['email'] = "";
    $_SESSION['username'] = "";
    session_unset();
    session_destroy();
    redirect("home/..");
}
