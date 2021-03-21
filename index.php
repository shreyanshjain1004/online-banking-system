<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.min.css">
	<link rel="stylesheet" href="style.css">
    <title>Home Page</title>
  </head>
  <body>
    <!-- nav -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark custom-nav fixed-top">
	  <div class="container">
		<a class="navbar-brand" href="#">Home</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		  <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
			<li class="nav-item">
			  <a class="nav-link active" aria-current="page" href="view.php">Customers</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="transactionhistory.php">History</a>
			</li>
			<li class="nav-item dropdown">
			  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
				More
			  </a>
			  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
				<li><a class="dropdown-item" href="#">Contact us</a></li>
				<li><a class="dropdown-item" href="#">Leave a review</a></li>
				<li><hr class="dropdown-divider"></li>
				<li><a class="dropdown-item" href="#">Feedback</a></li>
			  </ul>
			</li>
		  </ul>
		  <div class="d-flex">
			<a href="#" data-toggle="modal" data-target="#register" class="btn btn-sm btn-success">Login/Register</a>
		  </div>
		</div>
	  </div>
	</nav>
	
	<!-- Banner -->
	<header class="main-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8">
					<div class="main-header-content">
						<h1>Citizen's Bank</h1>
						<p>Serving to Empower!!</p>
					</div>
				</div>
			</div>
			<div class="row d-none d-sm-block">
				<div class="col-lg-6 col-md-6">
					<form>
						<div class="input-group mb-3">
  <input type="text" class="form-control form-control-sm" placeholder="Search for.." aria-label="Recipient's username" aria-describedby="basic-addon2">
  <div class="input-group-append">
    <button class="btn btn-success" type="button"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
  <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
</svg></button>
  </div>
</div>
					</form>
				</div>
			</div>
			<div class="row d-sm-none d-md-none d-lg-none d-xl-none">
				<div class="col-lg-12 col-md-12">
					<div class="d-flex">
						<a href="#" data-toggle="modal" data-target="#register" class="btn btn-block btn-success">Register</a>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	
	
	
	
	
	<!-- Footer -->
	
	<footer class="main-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6">
					<aside class="footer-widget">
						<h5>Follow us</h5>
						<ul>
							<li><a href="https://www.facebook.com/profile.php?id=100008619061775">facebook</a></li>
							<li><a href="https://www.linkedin.com/in/shreyansh-jain-a4ab821aa/">LinkedIn</a></li>
							<li><a href="#">Twitter</a></li>
							<li><a href="#">YouTube</a></li>
							<li><a href="#">Tumblr</a></li>
						</ul>
					</aside>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6">
					<aside class="footer-widget">
						<h5>Site Map</h5>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="view.php">Customers</a></li>
							<li><a href="transactionhistory.php">Transaction History</a></li>
							<li><a href="mailto:shreyanshjainsj1004@gmail.com">Contact</a></li>
							<li><a href="#">Support</a></li>
						</ul>
					</aside>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6">
					<aside class="footer-widget">
						<h5>Recent Updates</h5>
						<ul>
							<li><a href="#">Update One</a></li>
							<li><a href="#">Update Two</a></li>
							<li><a href="#">Update Three</a></li>
							<li><a href="#">Update Four</a></li>
							<li><a href="#">Update Five</a></li>
						</ul>
					</aside>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6">
					<aside class="footer-widget">
						<address>
							<p><strong>Email: </strong> <a href="mailto:someone@something.com">someone@something.com</a></p>
							<p><strong>Phone: </strong> <a href="tel:+919413000006">+91 941 300 0006</a></p>
						</address>
					</aside>
				</div>
			</div>
		</div>
	</footer>
	
	<!-- Copyright -->
	<section class="copy">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p>Copyright &copy; 2021, All Rigths Reserved</p>
				</div>
			</div>
		</div>
	</section>
	
	
	<!-- Modal -->
	<div class="modal fade" id="register" tabindex="-1" aria-labelledby="register" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Register Online</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="custom-divider">
		  </div>
		  <div class="modal-body">
			<p>Register yourself to the most trustworthy bank.</p>
			<form>
				<div class="mb-3">
					<input type="text" class="form-control form-control-sm" placeholder="Your Name" required>
				</div>
				<div class="mb-3">
					<input type="email" class="form-control form-control-sm" placeholder="Your Email ID" required>
				</div>
				<div class="mb-3">
					<input type="tel" class="form-control form-control-sm" placeholder="Phone No." required>
				</div>
				<div class="mb-3">
					<input type="text" class="form-control form-control-sm" placeholder="Account Type" required>
				</div>
				<div class="mb-3">
					<button type="submit" class="btn btn-sm btn-success btn-block">Register Online Now</button>
				</div>
			</form>
		  </div>		 
		</div>
	  </div>
	</div>
	
    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js"></script>
	
  </body>
</html>