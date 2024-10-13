<?php
define("HOST",'159.223.192.127'); // DataBase Ipv4
define("BD",'clinicasso'); // Table name
define("USER_BD",'root'); // Database Username
define("PASS_BD",'Tetis200');

function connection(){
    $con = new mysqli(HOST,USER_BD,PASS_BD,BD);
    if($con->connect_error){
        die("Fail connection: " . $con->connect_error);
    }else{
        return $con;
    }
}

?>