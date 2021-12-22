<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Photo Gallery | Presidential Detail</title>
	<meta name="description" content="See photos of cars before and after a cleaning at Presidential Detail.">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/desktop.css" media="screen and (min-width:769px)">
	<link rel="stylesheet" type="text/css" href="css/tablet.css" media="screen and (min-width:481px) and (max-width:768px)">
	<link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width:480px)">
	<style type="text/css">

  	</style>
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
				<li class="nav-item active">
					<a class="nav-link" href="photos.php">Photo Gallery<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="about.php">About Us</a>
				</li>
			</ul>
			<h6 class="display-4">Grand Rapids, MI | (616)443-1368</h6>
		<a href="contact us.php" type="button" class="btn btn-secondary">Contact Us</a>
		</div>
	</nav>
	<section class="textsection">
		<h1 class="display-1"><b>Photo Gallery</b></h1>
		<div>
			<p class="display-3">
			At Presidential Detail, we strive to provide high quality services. From the shampooing of carpets to the cleaning of your tires, we make sure we didn't miss a spot! Take a look at the difference a detail by us can make.</p>
		</div>
	</section>
	<section class="format">
		<div class="row">
			<figure class="col-sm">
				<figcaption>Before</figcaption>
		      	<img src="images/trunk1.JPG" onclick="openModal();currentSlide(1)" class="hover-shadow" title="Click to expand">
		    </figure>
		    <figure class="col-sm">
				<figcaption>After</figcaption>
		      	<img src="images/trunk2.JPG" onclick="openModal();currentSlide(2)" class="hover-shadow" title="Click to expand">
		    </figure>
		</div>
		<div class="row">
			<figure class="col-sm">
				<figcaption>Before</figcaption>
		      	<img src="images/tire1.JPG" onclick="openModal();currentSlide(3)" class="hover-shadow" title="Click to expand">
		    </figure>
		    <figure class="col-sm">
				<figcaption>After</figcaption>
		      	<img src="images/tire2.JPG" onclick="openModal();currentSlide(4)" class="hover-shadow" title="Click to expand">
		    </figure>
		</div>
		<div class="row">
			<figure class="col-sm">
				<figcaption>Before</figcaption>
		      	<img src="images/seat1.JPG" onclick="openModal();currentSlide(5)" class="hover-shadow" title="Click to expand">
		    </figure>
		    <figure class="col-sm">
				<figcaption>After</figcaption>
		      	<img src="images/seat2.JPG" onclick="openModal();currentSlide(6)" class="hover-shadow" title="Click to expand">
		    </figure>
		</div>
		<div class="row">
			<figure class="col-sm">
				<figcaption>Before</figcaption>
		      	<img src="images/carpet1.JPG" onclick="openModal();currentSlide(7)" class="hover-shadow" title="Click to expand">
		    </figure>
		    <figure class="col-sm">
				<figcaption>After</figcaption>
		      	<img src="images/carpet2.JPG" onclick="openModal();currentSlide(8)" class="hover-shadow" title="Click to expand">
		    </figure>
		</div>
	</section>
	<div id="myModal" class="modal">
		<span class="close" onclick="closeModal()">&times;</span>
		<div class="modal-content">
			<div class="mySlides">
				<div>1 / 8</div>
				<img src="images/trunk1.JPG">
			</div>
			<div class="mySlides">
				<div>2 / 8</div>
				<img src="images/trunk2.JPG">
			</div>
			<div class="mySlides">
				<div>3 / 8</div>
				<img src="images/tire1.JPG">
			</div>
			<div class="mySlides">
				<div>4 / 8</div>
				<img src="images/tire2.JPG">
			</div>
			<div class="mySlides">
				<div>5 / 8</div>
				<img src="images/seat1.JPG">
			</div>
			<div class="mySlides">
				<div>6 / 8</div>
				<img src="images/seat2.JPG">
			</div>
			<div class="mySlides">
				<div>7 / 8</div>
				<img src="images/carpet1.JPG">
			</div>
			<div class="mySlides">
				<div>8 / 8</div>
				<img src="images/carpet2.JPG">
			</div>
			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>
			<div class="caption-container">
				<p id="caption"></p>
			</div>
			<div class="sliderow">
				<div class="col-sm">
					<img class="demo" src="images/trunk1.JPG" onclick="currentSlide(1)" alt="Dirty Trunk">
				</div>
				<div class="col-sm">
					<img class="demo" src="images/trunk2.JPG" onclick="currentSlide(2)" alt="Clean Trunk">
				</div>
				<div class="col-sm">
					<img class="demo" src="images/tire1.JPG" onclick="currentSlide(3)" alt="Dirty Tire">
				</div>
				<div class="col-sm">
					<img class="demo" src="images/tire2.JPG" onclick="currentSlide(4)" alt="Clean Tire">
				</div>
				<div class="col-sm">
					<img class="demo" src="images/seat1.JPG" onclick="currentSlide(5)" alt="Dirty Seat">
				</div>
				<div class="col-sm">
					<img class="demo" src="images/seat2.JPG" onclick="currentSlide(6)" alt="Clean Seat">
				</div>
				<div class="col-sm">
					<img class="demo" src="images/carpet1.JPG" onclick="currentSlide(7)" alt="Dirty Carpet">
				</div>
				<div class="col-sm">
					<img class="demo" src="images/carpet2.JPG" onclick="currentSlide(8)" alt="Clean Carpet">
				</div>
			</div>
		</div>
	</div>
	</section>
	<footer>
		<h6 class="display-4">Presidential Detail  |  2921 Division Ave S, Grand Rapids, MI 49548  |  (616)443-1368</h6>
	</footer>
	<script type="text/javascript">
		function openModal() {
		document.getElementById("myModal").style.display = "block";
		}
		function closeModal() {
			document.getElementById("myModal").style.display = "none";
		}
		var slideIndex = 1;
		showSlides(slideIndex);
		function plusSlides(n) {
			showSlides(slideIndex += n);
		}
		function currentSlide(n) {
			showSlides(slideIndex = n);
		}
		function showSlides(n) {
			var i;
			var slides = document.getElementsByClassName("mySlides");
			var dots = document.getElementsByClassName("demo");
			var captionText = document.getElementById("caption");
			if (n > document.getElementsByClassName("mySlides").length) {
				slideIndex = 1
			}
			if (n < 1) {
				slideIndex = slides.length
			}
			for (i = 0; i < slides.length; i++) {
			  slides[i].style.display = "none";
			}
			for (i = 0; i < dots.length; i++) {
			  dots[i].className = dots[i].className.replace(" active", "");
			}
			slides[slideIndex-1].style.display = "block";
			dots[slideIndex-1].className += " active";
			captionText.innerHTML = dots[slideIndex-1].alt;
		}
	</script>
</body>
</html>