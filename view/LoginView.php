<?php
 
class Logon {
    
    public function __construct() {
      
        
        $test2 = filter_input( \INPUT_COOKIE, "username");
        echo 'You have logon sir,'.$test2;
        
    }
    
    
    
}

