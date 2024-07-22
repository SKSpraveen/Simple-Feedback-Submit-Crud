<?php
    include_once"connection.php";
?>    

<html>
<head>
<link rel="stylesheet" type="text/css" href="styles/feedback.css">
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</head>
<body>
    <div class="navbar">
          
    <ul>
        <li><a href="homepage.html">Home</a></li>
        <li><a href="aboutus.html">About Us</a></li>
        <li><a href="contactus.html">Contact Us</a></li>
	    <li><a href="#xxxx">xxxxx</a></li>
        <li><a href="#xxxxx">Buy Now</a></li>
    </ul>
    </div><br><br><br>
	<script>alert('Do you really want to give feedback?')</script>
    
	<div class="f">
    <form action="submitFeedback.php"  method="POST">
	<center><h1>Feedback</h1></center>
	<input type="text" placeholder="Name" name="name"><br><br><br>
	<input type="text"  placeholder="E-mail" name="email" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" required><br><br><br>
	<textarea rows=8 cols=37 name="comment" placeholder="Your comment" required></textarea><br><br><br>
	<center>
	<input type="submit" style="background:white;font-size:15px;font-weight:bold;height:4%;width:20%" value="Submit" name="submit">
	</center>
	</div><br><br><br><br>

	<center>
	<h1 style="text-shadow: 1px 1px 3px black, 0 0 25px white, 0 0 5px red;">Customer comments</h1>
	<table border="2" width="80%">
	    <thead style="background-color:#020314b7;color:white;font-size:20px">
		<tr>
		   <th>Name</th>
		   <th>Email</th>
		   <th>Comment</th>
		</tr>
	    </thead>
	    <tbody>
        <?php 
			$query="SELECT * FROM fb ";
			$result=mysqli_query($con,$query);

			while($row=mysqli_fetch_assoc($result)){

				?>
				<tr style="background-color:#ffffff96;font-size:20px;text-align:center">
					<td><?php echo $row['Name'] ?></td>
					<td><?php echo $row['Email'] ?></td>
				    <td><?php echo $row['Comment'] ?></td>
				</tr>
				
				<?php
			}
		?>
        </tbody>
	</table>
	</center>
	<br><br><br><br>
	
	<footer>
	<ul class="footerIcons">
		<li><a href="https://www.facebook.com/"><ion-icon name="logo-facebook"></ion-icon></li></a>
		<li><a href="https://www.instagram.com/"><ion-icon name="logo-instagram"></ion-icon></li></a>
		<li><a href="https://twitter.com/"><ion-icon name="logo-twitter"></ion-icon></li></a>
    </ul>	

	<ul class="footerMenu">
		<li class="footerNav"><a href="contactus.html">Contact us</a></li>
		<li class="footerNav"><a href="terms & conditions">Terms & conditions</a></li>
		<li class="footerNav"><a href="feedback.php">Feedback</a></li>
	</ul>
	</footer>
</body>
</html>

