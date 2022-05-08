<?php
    // RANDOM PASSWORD GENERATOR
    function random_str(){
        $length = 12;   //RANDOM PASSWORD LENGTH
        $lower = "abcdefghijklmnopqrstuvwxyz";  //LOWERCASE LETTERS
        $upper = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";  //UPPERCASE LETTERS
        $symbol = "?!$*:;,./\-+%=()[]{}#_"; //SYMBOLS
        $number = "0123456789"; //NUMBERS
        $chars = $lower . $upper . $symbol . $number;   //CHARACTERS
       return substr(str_shuffle($chars),0,$length);    //RETURN RANDOM PASSWORD
    }
    echo "<input type='text' value='" . random_str() . "' name='password' id='password'>";
?>
    
