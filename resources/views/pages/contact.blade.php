<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contact Us</title>
	<link rel="stylesheet"  href="css/bootstrap.css">
	<link rel="stylesheet"  href="css/bootstrap-grid.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
	<a class="navbar-brand" href="/"><img src="/img/logo.jpg" width="200px"></a>

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#subzy" aria-controls="subzy" aria-expanded="false" aria-label="toggler navigation"><span class="navbar-toggler-icon"></span></button>
	<div class="collapse navbar-collapse justify-content-center" id="#salon">
		<ul class="navbar-nav">
			<li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
			<li class="nav-item"><a href="/aboutus" class="nav-link"> About Us</a></li>
			<li class="nav-item"><a href="/films" class="nav-link">Films</a></li>
			<li class="nav-item"><a href="/tv" class="nav-link">TV</a></li>
			<li class="nav-item"><a href="/cartoon" class="nav-link">Cartoon</a></li>
			<li class="nav-item"><a href="/cole" class="nav-link">Collection</a></li>
			<li class="nav-item"><a href="/contact" class="nav-link">Contact Us</a></li>
		</ul>


		<form class="form-inline">
			<input class="form-control mr-sm-2" type="search" placeholder="search" aria-label="search">
			<button class="btn btn-light my-sm-0" type="submit">search</button>

		</form>

	</div>
</nav>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<div class="container">
	<div class="row">
		<div class="col-6 ">
<h3>Contact Us</h3>
</div>
</div>
</div>
<div class="bg-dark">
<div class="container mt-3">
	<h1 class="text-center text-white"> Contact Us</h1>

</div>
<br><br>
	<div class="bg-dark">
		<div class="container mt-6">
		<div class="card bg-primary text-white">
			<div class="row">
				<div class="col-md-4">
					<h3>Contact Us!</h3>
					<br>
					<p>No 16/1, Aluthwela gama ,Badulla</p>
					<p>+94 710418122</p>
					<p>E-Mail:ahirusha11@gmail.com</p>

				</div>
				</form><form method="post"  action="/saveTask" >
					{{csrf_field()}}
					<div class="form-group">

						<label name="text"><b>Name</b></label>
						<input id="name" name="name" class="form-control" placeholder="Enter Your Name">

						<label name="text"><b>E-mail</b></label>
						<input id="email" name="email" class="form-control" placeholder="Enter Your E-mail">

						<label name="text"><b>Subject</b></label>
						<input id="subject" name="subject" class="form-control" placeholder="Subject">

						<label name="text"><b>Message</b></label>
						<input id="message" name="message" class="form-control" placeholder="Enter Your Message">

					</div>
					<input type="submit" value="Send Message" class="btn btn-success">
				</form>
</div>
</div>
</div>
</div>
		



<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</div>
</body>
</html>