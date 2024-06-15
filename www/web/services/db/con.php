<?php
define("HOST",'localhost'); // DataBase Ipv4
define("BD",'ClinicaSSO'); // Table name
define("USER_BD",'root'); // Database Username
define("PASS_BD",'');

function connection(){
    $con = new mysqli(HOST,USER_BD,PASS_BD,BD);
    if($con->connect_error){
        die("Fail connection: " . $con->connect_error);
    }else{
        return $con;
    }
}

?>