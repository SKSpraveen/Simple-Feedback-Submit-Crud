<?php

$con= new mysqli("localhost","root","sasindu","feedbacks");

if($con->connect_error){
	die("Connection failed: " . $con->connect_error);
}
else{
	//echo"Connection sucessfully";
}

?>
	