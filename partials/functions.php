<?php 
function generatePw(){
    $password = "";
    
    if (!isset($_GET['password_length'])) {
        echo "Please provide a password length";
    } else {
        $password_length = $_GET['password_length'];
        if(!ctype_digit($password_length)){
            echo "Please insert a number";
        }else{
            for($i = 0; $i < $password_length; $i++) {
                $password .= chr(rand(32, 126));
              }
              return $password;
        }
    }
}
?>