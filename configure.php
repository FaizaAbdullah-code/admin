<?php 
// $con = mysqli_connect("localhost", "root", "");
// $db = mysqli_select_db($con, "hospital");
$con = mysqli_connect("remotemysql.com", "Em0CiQR5nW", "cLT8PZAjLP");
$db = mysqli_select_db($con, "Em0CiQR5nW");

if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}

?>
