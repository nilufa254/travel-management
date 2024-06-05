<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Travel Management</title>

	<!-- favicon -->
	<link rel="shortcut icon" href="./image/favicon.png" type="image/x-icon">

	<!-- Bootstarp Link -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- Bootstarp Link -->

	<!-- Font awesome cdn -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
	<!-- Font awesome cdn -->


	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
	<!-- Google Fonts -->
</head>

<body>
<!-- Navbar start -->
<nav class="navbar navbar-expand-lg fixed-top" id="navbar">
	<div class="container">
		<a href="#">
			<i class="fa-solid fa-location-dot fa-bounce fa-2xl" style="color: #ffa500;"></i>
		</a> &nbsp; &nbsp;
		<a class="navbar-brand" href="<?php echo SITE_URL; ?>" id="logo"><span>T</span>ravel<span>F</span>ellow</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
			<span><i class="fa-solid fa-bars"></i></span>
		</button>
		<div class="collapse navbar-collapse" id="mynavbar">
			<ul class="navbar-nav me-auto">
				<li class="nav-item">
					<a class="nav-link " href="<?php echo SITE_URL; ?>">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo SITE_URL . 'about.php'; ?>">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo SITE_URL . 'gallery.php'; ?>">Gallery</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo SITE_URL . 'contact.php'; ?>">Contact</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo SITE_URL . 'book.php'; ?>">Booking</a>
				</li>
			</ul>
			<form class="d-flex">
				<input class="form-control me-2" type="text" placeholder="Search">
				<button class="btn btn-primary" type="button">Search</button>
			</form>
		</div>
	</div>
</nav>

<!-- Navbar end -->