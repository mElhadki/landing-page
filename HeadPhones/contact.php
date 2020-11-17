<!DOCTYPE HTML>
<html>
	<head>
		<title>Headphones Store</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<header id="header" class="alt">
					<a href="index.html" class="logo"><strong>The Go</strong> <span>Beats</span></a>
					<nav>
						<a href="#menu">Menu</a>
					</nav>
				</header>

				<!-- Menu -->
				<nav id="menu">
					<ul class="links">
		                <li> <a href="index.php">Home </a> </li>

		            

		                <li> <a href="Store.php">Store</a> </li>

						<li> <a href="about-us.php">About Us</a> </li>
						

		                <li class="active"><a href="contact.php">Contact Us</a></li>
            		</ul>
				</nav>

				<!-- Main -->
					<div id="main" class="alt">

						<!-- One -->
							<section id="one">
								<div class="inner">
									<header class="major">
										<h1>Contact Us</h1>
									</header>
									<span class="image main"><img src="images/pexels-alex-andrews-821754.jpg" alt="" style="height: 550px;"/></span>
									<p>Contact our Support and Sales team
									  We’d love to hear from you
                                     Whether you have a question about features, pricing, or anything else, our team is ready to answer all your questions.
                                     Need to get in touch with the team? We’re all ears.</p>
								</div>
							</section>

					</div>

				<!-- Contact -->
					<section id="contact">
						<div class="inner">
							<section>
								<header class="major">
									<h2>Contact us</h2>
								</header>

								<form method="post" action="">
									<div class="fields">
										<div class="field half">
											<label for="name">Name</label>
											<input type="text" name="name" id="name" />
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" />
										</div>
										<div class="field">
											<label for="subject">Subject</label>
											<input type="text" name="subject" id="subject" />
										</div>
										<div class="field">
											<label for="message">Notes</label>
											<textarea name="message" id="message" rows="6"></textarea>
										</div>

										<div class="field half text-right">
											<ul class="actions">
												<li><input type="submit" name="contact" value="Send Message" class="primary" /></li>
											</ul>
										</div>
									</div>
								</form>
							</section>
							<?php 

if(isset($_POST['contact'])){

    if(!empty($_POST["name"] && $_POST['email'] && $_POST['subject'] && $_POST['message'])){


        $message="";
        $to = "elhadkimariem3@gmail.com"; // this is your Email address
        $from = "elhadkimariem3@gmail.com"; // this is the sender's Email address
        $name = $_POST['name'];
        $email= $_POST['email'];
        $message= $_POST['message'];

        $subject = "Contact";
        $message = "Client: " .$name . "\n\n Son Email : " . $email . "\n\n A Dit: " . $message. "\n\n";
        $headers = "From:" . $from;
        mail($to,$subject,$message,$headers);
           
    }

    else {

        $Error="Veuillez sélectionner au moins un produit et remplir tous les champs";
    }
}

?>

							
							<section class="split">
								<section>
									<div class="contact-method">
										<span class="icon alt fa-envelope"></span>
										<h3>Email</h3>
										<a href="#">xxxx@xxxx.com</a>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon alt fa-phone"></span>
										<h3>Phone</h3>
										<span>+X XXX XXXX XXXX</span>
										<br>
										<span>+X XXX XXXX XXXX</span>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon alt fa-home"></span>
										<h3>Address</h3>
										<span>212 Barrington Court <br> New York, ABC 10001 <br> United States of America</span>
									</div>
								</section>
							</section>
						</div>
					</section>


				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<ul class="icons">
								<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
							</ul>
							
							<ul class="copyright">
								<li>Copyright © 2020 Company Name</li>
							</ul>
						</div>
					</footer>


			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>