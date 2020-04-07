<?php
/**
 * @copyright Jorge Castro C.
 * @see https://github.com/EFTEC/PdoOne_login           
 */

use PdoOne_login\repo\UserRepo;

include "app/app.php";

$buttonlogin=validationOne()->type('string')->def(false)->post('buttonlogin');
if($buttonlogin===false) {
    $login='';
    $password='';
} else {
    $login=validationOne()->type('string')
        ->condition('minlen','The login must have at least 3 characters',3)
        ->condition('maxlen','The login must have at most 10 characters',10)
        ->post('login');
    $password=validationOne()->type('string')
        ->condition('minlen','The password must have at least 3 characters',3)
        ->post('password');

    if(validationOne()->messageList->errorcount===0) {
        $userDB= UserRepo::get($login);
        if($userDB===null || $userDB===false || $userDB['password']!=$password) {
            validationOne()->messageList->addItem('general','User or password incorrect','error');
        } else {
            $_SESSION['user']=$userDB;
            session_write_close(); 
            header('location:start.php',true);
            die(1);
        }
    }
}


echo bladeOne()->run('login'
    ,['login'=>$login,
        'password'=>$password]);


