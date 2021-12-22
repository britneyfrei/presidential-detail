
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact Us | Presidential Detail</title>
	<meta name="description" content="Schedule an appointment, call, or find us located in Grand Rapids">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" language="javascript" src="js/contact us.js"></script>
	<link rel="stylesheet" type="text/css" href="css/desktop.css" media="screen and (min-width:769px)">
	<link rel="stylesheet" type="text/css" href="css/tablet.css" media="screen and (min-width:481px) and (max-width:768px)">
	<link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width:480px)">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="Presidential Detail" style="width:100px;"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarColor01">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="catalog.php">Services</a>
      			</li>
				<li class="nav-item">
					<a class="nav-link" href="photos.php">Photo Gallery</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="about.php">About Us</a>
				</li>
			</ul>
			<h6 class="display-4">Grand Rapids, MI | (616)443-1368</h6>
			<a href="contact us.php" type="button" class="btn btn-secondary">Contact Us</a>
		</div>
	</nav>
	<section class="format">
		<div class="row">
			<div class="col-lg">
				<form method="get" id="contactform">
					<h1 class="display-1"><b>Contact Us</b></h1>
					<p>Fill in this form if you have any questions or comments and we'll get back to you.</p>
					<div class="form-group">
						<label class="col-form-label" for="name">Name:</label>
						<input type="text" class="form-control" placeholder="Ex. John Smith" id="name" name="name">
					</div>
					<div class="form-group">
						<label for="email">Email Address:</label>
						<input type="text" class="form-control" id="email" aria-describedby="emailHelp" 
						placeholder="Ex. johnsmith@gmail.com" name="email">
					</div>
					<div class="form-group">
						<label class="col-form-label" for="number">Phone Number:</label>
						<input type="text" class="form-control" placeholder="Ex. XXXXXXXXXX" id="phone number" name="phone">
					</div>
					<div class="form-group">
						<label for="comments">Questions or Comments:</label>
						<textarea class="form-control" id="comments" name="comment" rows="3"></textarea>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
				<div id="emptyerror" class="hidden"></div>
				<div id="emailerror" class="hidden"></div>
				<div id="phoneerror" class="hidden"></div>
				<?php
					$conn = mysqli_connect("localhost", "id17622328_contactuser", "Victorious190#", "id17622328_contact");
					if($conn === false){
					   die("ERROR: Could not connect. " . mysqli_connect_error());
					}
					if (isset($_REQUEST['name'])) {
						$name =  $_REQUEST['name'];
						$email = $_REQUEST['email'];
						$phone =  $_REQUEST['phone'];
						$comment = $_REQUEST['comment'];
						$sql = "INSERT INTO users VALUES ('$name', '$email','$phone','$comment')";
						if(mysqli_query($conn, $sql)){
							echo "<div>Success!.</div>"; 
						} else {
							echo "<div>Error.</div>";
						}
						mysqli_close($conn);
				}
				?>
			</div>

			<div class="col-lg">
				<h1 class="display-1"><b>Find Us</b></h1>
				<div class="row">
					<div class="col-md">
						<h5>Address:</h5>
						<p><b>2921 Division Ave S<br> 
						Grand Rapids, MI 49548</b><br>
						Located near Ophoff Motor Sales</p>
					</div>
					<div class="col-md">
						<h5>Business Hours:</h5>
						<p><b>Monday-Friday:</b> 10am to 6pm<br>
						<b>Saturday:</b> 10am to 4pm<br>
						<b>Sunday:</b> Closed</p>
					</div>
				</div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d365.2757129771275!2d-85.66665748548247!3d42.91070249869709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8819b238546c91e9%3A0xc9309f0055c1c37e!2s2921%20Division%20Ave%20S%2C%20Grand%20Rapids%2C%20MI%2049548!5e0!3m2!1sen!2sus!4v1601612445474!5m2!1sen!2sus" 
				width="100%" height="350" frameborder="1" style="border: 0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
		</div>
	</section>
	<footer>
		<h6 class="display-4">Presidential Detail  |  2921 Division Ave S, Grand Rapids, MI 49548  |  (616)443-1368</h6>
	</footer>
</body>
</html>