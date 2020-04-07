<?php
include "app/app.php";

if (!isset($_SESSION['user'])) {
    @session_write_close();
    header('location:index.php');
    die(1);
}

$users=\PdoOne_login\repo\UserRepo::select();

echo bladeOne()->run('start'
    ,['users'=>$users]);