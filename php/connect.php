

<?php

$servername = "localhost";
$username = "root";
$password = "";
$db="OPTRS";

$conn = new mysqli($servername, $username, $password,$db);
if($conn->connect_error)
{
  echo("<script> window.alert('Connection failed');</script>");
}

?>