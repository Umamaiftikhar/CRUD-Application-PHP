<?php
//server with default setting (user 'root' with no password)

$serverName= 'localhost';   // server 
$user= 'root';
$password= "";
$dbName='swapyourbook';   //Database Name  
  

// establishing connection
  $conn = mysqli_connect($serverName,$user,$password,$dbName);   

 // for displaying an error msg in case the connection is not established
  if (!$conn) {                                             
    die("Connection failed: " . mysqli_connect_error());     
  }
?>


