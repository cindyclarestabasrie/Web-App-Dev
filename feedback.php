<?php
$page="feedback";
include("include/header.php")
?>
    <body class="about_page">
		<!--================Home Banner Area =================-->
		<section class="banner_area">
			<div class="banner_inner d-flex align-items-center">
				<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<div class="page_link">
							<a href="index.php">Home</a>
							<a href="feedback.php">Feedbacks</a>
						</div>
						<h2>Please put your feedbacks here.</h2>
					</div>
				</div>
			</div>
		</section>
		<!--================End Home Banner Area =================-->
	
    <div class="feedback-page">
        <h4>Put your feedback here.</h4>
        <div class="container-feedback">
  <form action="action_page.php">
    <div class="row">
      <div class="col-25-feedback">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75-feedback">
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25-feedback">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75-feedback">
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
      </div>
    </div>
    <div class="row">
        <div class="col-25-feedback">
                <label for="email">Email</label>
        </div>
        <div class="col-75-feedback">
            <div class="col-75-feedback">
                <input type="text" id="email" name="email" placeholder="Your email.."> 
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-25-feedback">
        <label for="message">Message</label>
      </div>
      <div class="col-75-feedback">
        <textarea id="message" name="message" placeholder="Write your feedback.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
  <script src="js/main.js"></script>
</div>
</div>