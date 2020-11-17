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

		          

		                <li class="active"> <a href="Store.php">Store</a> </li>

		                <li> <a href="about-us.php">About Us</a> </li>

		                <li><a href="contact.php">Contact Us</a></li>
            		</ul>
				</nav>

				<!-- Main -->
					<div id="main" class="alt">

						<!-- One -->
							<section id="one">
								<div class="inner">
									<header class="major">
										<h1>Store</h1>
									</header>
								</div>
							</section>
							<section class="tiles">

							<?php 
                         include 'conn.php';
                         $sql = "select* from product where qte>0;";
                         $result = $con->query($sql);
                         
                         if ($result->num_rows > 0) {
                              
                           // output data of each row
                           while($row = $result->fetch_assoc()) {
                           
                           ?>
                            
								<article>
									<span class="image">
										<img src="images/<?php echo $row["image"] ?>" alt="" />
									</span>
									<header class="major">
										<h3><?php echo $row["name"] ?></h3>

										<p><strong>$ <?php echo $row["price"] ?></strong></p>

										<p>This dressed-up banana pudding features bananas caramelized in brown sugar, butter, and cinnamon.</p>

										<div class="major-actions">
											<a href="#" class="button small next">Order Now</a>
										</div>
									</header>
								</article>

			
								<?php
}
} 
$con->close();
?>				


						

								


							</section>

					</div>

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