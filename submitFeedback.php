<?php
	include_once"connection.php";
	
	if(isset($_POST["submit"])){

		$Name=$_POST["name"];
		$Email=$_POST["email"];
		$Comment=$_POST["comment"];

		$sql= "INSERT INTO fb(`Name`, `Email`, `Comment`)VALUES('$Name','$Email','$Comment')";
		if($con->query($sql)){

			echo"<script>alert('Record Inserted Successfully!!')</script>";//this script not work because next line re-direct to location
			header("Location:feedback.php");
		}
		else{
			
			echo"error:" .$con->error;
		}
	}
	$con->close();
?>	