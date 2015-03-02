<?php

require_once '../view/LoginView.php';
require_once '../model/CreateCookie.php';
require_once '../DAO/LoginDAO.php';

/* @var $username String */
$username = filter_input( \INPUT_POST, "usrnm");
$password = filter_input( \INPUT_POST, "psswrd");


$logindao = new LoginDAO;
list($dbid,$dbusername,$dbpassword) = $logindao->FetchUser($username);
$logindao = null;
$createcookie = new CreateCookie($dbid);
$createcookie->CreateLogonCookie();
$LogonView = new Logon;
    


