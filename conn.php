<?php

$con = new mysqli("localhost","root","","TANCET");

if($con->connect_error){
    echo $con->connect_error;
    die("Database connection failed");
}
else{
   // echo "DB Connected";
    //echo "Db connected Succesfully";
    
    //SELECT * FROM `college_code` WHERE `c-code` = "1D"
}






?>