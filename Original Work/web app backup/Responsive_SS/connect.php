<?php
// function OpenCon()
//  {
//  $dbhost = "localhost";
//  $dbuser = "root";
//  $dbpass = "User123";
//  $db = "practice";
//  $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
//
//  return $conn;
//  }
//
// function CloseCon($conn)
//  {
//  $conn -> close();
//  }

$user = 'root';
$password = 'User123';
$db = 'salussense';
$host = 'localhost';
//$port = 3306;

$conn = new mysqli($host, $user, $password, $db) or die("Connect failed: %s\n". $conn -> error);





// $link = mysqli_init();
// $success = mysqli_real_connect(
//    $link,
//    $host,
//    $user,
//    $password,
//    $db,
//    $port
// );

?>
