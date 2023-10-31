<?php
$servername="localhost";
$username="root";
$password="";
$databasename="career";

//creating connection
$conn=@new mysqli($servername,$username,$password,$databasename);

//check connection
if($conn->connect_error)
{

die ("connection has someproblem".$conn->connect_error);
}
//echo "successfull"."<br>";

?>