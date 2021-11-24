<?php
//connect with my db
$servername="localhost";
$username="root";
$password="";
$dbname="test1";
//create connection 
$conn=mysqli_connect($username-$servername-$password-$dbname);
//check connection 
if(!$conn)
{die ("connection falied:".mysqli_connect_error());}


?>