/* 
php script to establish connection to database 
*/

<?php

$host = "localhost";
$user_name = "root";
$user_password = "";
$db_name = "userdb";

$con = mysqli_connect($host,$user_name,$user_password,$db_name); 


?>