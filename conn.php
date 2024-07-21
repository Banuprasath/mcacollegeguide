<?php

// $con = new mysqli("localhost", "root", "", "TANCET");

// if ($con->connect_error) {
//     echo $con->connect_error;
//     die("Database connection failed");
// } else {
//     // echo "DB Connected";
//     //echo "Db connected Succesfully";

//     //SELECT * FROM `college_code` WHERE `c-code` = "1D"
// }






?>

<?php
$host = "b38hsttfk0gaa4umhjlb-mysql.services.clever-cloud.com";
$user = "ubqah3lptflejikm";
$pass = "2UaGu2gSjKwbBE9QG7oX";
$dbname = "b38hsttfk0gaa4umhjlb";
$con = new mysqli($host, $user, $pass, $dbname);

if ($con->connect_error) {
  echo $con->connect_error;
  die("Database connection failed");
} else {
  //echo "DB Connected";
  // echo "Db connected Succesfully";

  //SELECT * FROM `college_code` WHERE `c-code` = "1D"


}
/*
[
  {
    "name": "MYSQL_ADDON_DB",
    "value": "b38hsttfk0gaa4umhjlb"
  },
  {
    "name": "MYSQL_ADDON_HOST",
    "value": "b38hsttfk0gaa4umhjlb-mysql.services.clever-cloud.com"
  },
  {
    "name": "MYSQL_ADDON_PASSWORD",
    "value": "2UaGu2gSjKwbBE9QG7oX"
  },
  {
    "name": "MYSQL_ADDON_PORT",
    "value": "3306"
  },
  {
    "name": "MYSQL_ADDON_URI",
    "value": "mysql://ubqah3lptflejikm:2UaGu2gSjKwbBE9QG7oX@b38hsttfk0gaa4umhjlb-mysql.services.clever-cloud.com:3306/b38hsttfk0gaa4umhjlb"
  },
  {
    "name": "MYSQL_ADDON_USER",
    "value": "ubqah3lptflejikm"
  },
  {
    "name": "MYSQL_ADDON_VERSION",
    "value": "8.0"
  }
]
*/
?>