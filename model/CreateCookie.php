<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CreateCookie
 *
 * @author a
 */
class CreateCookie {
    
    private $username;
    
    public function __construct($username) {
        $this->username = $username;
    }


    public function CreateLogonCookie(){
        
        setcookie("username", $this->username, time()+14400, "/");
        
    }
}
