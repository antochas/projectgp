<?php

require_once '../view/Logon.php';

$username = $_POST["usrnm"];
$password = $_POST["psswrd"];
if($username == "test" && $password == "test"){
    
    $LogonView = new Logon;
    
}
else {
    
}

