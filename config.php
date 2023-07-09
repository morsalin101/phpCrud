<?php
$host       = "localhost";
$dbuser     = "root";
$dbpassword = "";
$dbname     = "crud";

$connect = mysqli_connect($host,$dbuser,$dbpassword,$dbname);
if(!$connect) echo "failed";

 
?>