<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/Acne -Acne-Scar-Revision.png" type="image/png">
	<title>Pimple Zip</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="vendors/animate-css/animate.css">
	<link rel="stylesheet" href="vendors/flaticon/flaticon.css">
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">

		<!--================Header Menu Area =================-->
		<header class="header_area">
			<div class="main_menu">
				<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="index.php"><img src="img/pimplezip-logo-face.png" style="width: 200px; height: 100px" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
						 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav justify-content-center">
								<li class="nav-item <?= $page=='home' ? 'active' : '' ?>"><a class="nav-link" href="index.php">Home</a></li>
								<li class="nav-item <?= $page=='about' ? 'active' : '' ?>"><a class="nav-link" href="about-us.php">About</a></li>
								<li class="nav-item <?= $page=='feedback' ? 'active' : '' ?>"><a class="nav-link" href="feedback.php">Feedbacks</a>
								<li class="nav-item <?= $page=='contact' ? 'active' : '' ?>"><a class="nav-link" href="contact.php">Contact</a></li>
								<li class="nav-item <?= $page=='tips' ? 'active' : '' ?>"><a class="nav-link" href="tips.php">Tips</a></li>
								<li class="nav-item <?= $page=='livechat' ? 'active' : '' ?>"><a class="nav-link" id="livechat">Live Chat</a></li>
								<li class="nav-item <?= $page=='profilepage' ? 'active' : '' ?>"><a class="nav-link" id="hellousername">Hello NameHere</a></li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li class="nav-item" id="login-btn"><a href="/signup/signup.php" class="primary_btn">Login/Register</a></li>
								<li class="nav-item" id="logout-btn"><a  class="primary_btn" onclick="logout()">Logout</a></li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</header>
		<!--================Header Menu Area =================-->	
</head>