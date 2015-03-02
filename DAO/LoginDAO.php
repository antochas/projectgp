<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoginDAO
 *
 * @author a
 */
class LoginDAO {
    
    public function FetchUser($namegiven){
        
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $db = 'gameportal';
        $conn = mysql_connect($dbhost, $dbuser, $dbpass);
        if(! $conn )
        {
          die('Could not connect: ' . mysql_error());
        }
        $sql = 'SELECT id, username, password FROM users WHERE username = \''.$namegiven.'\'';

        mysql_select_db($db);
        $retval = mysql_query( $sql, $conn );
        if(! $retval )
        {
          die('Could not get data: ' . mysql_error());
        }
        $row = mysql_fetch_array($retval, MYSQL_ASSOC);
        
        

        mysql_close($conn);
        
        return array($row['id'],$row['username'], $row['password']);

    }
}
