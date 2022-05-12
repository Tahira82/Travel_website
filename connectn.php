<?php

/*
$servername = "localhost";
$username = "id6775590_mjaisstore";
$password = "store1234";
$dbname = "id6775590_store";
*/



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel";

$con = mysqli_connect($servername,$username,$password,$dbname);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();

}else{
   // echo "success";
}

?>