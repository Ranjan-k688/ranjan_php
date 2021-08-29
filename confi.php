<?php 
  $hostname="localhost";
  $username="root";
  $password="";
  $dbname="bus";

  $conn = mysqli_connect($hostname,$username,$password,$dbname);
  if(!$conn)
  {
  	echo "not connected";
  }
  else
  {
  	// echo "connected";
  }
?>