<?php
if(!isset($_GET['idPhoto'])){
	header('location:index.php');
}
include('brand.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">


	<title>Pure Mix - Single Project</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">

	<link rel="stylesheet" href="css/animate.min.css">

	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/ionicons.min.css">


	<link rel="stylesheet" href="css/style.css">

  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>
	
</head>
<body>



<div class="preloader">

	<div class="sk-spinner sk-spinner-pulse"></div>

</div>



<div class="nav-container">
   <nav class="nav-inner transparent">

      <div class="navbar">
         <div class="container">
            <div class="row">

              <div class="brand">
                <a href="index.html">Pure Mix</a>
              </div>

              <div class="navicon">
                <div class="menu-container">

                  <div class="circle dark inline">
                    <i class="icon ion-navicon"></i>
                  </div>

                  <div class="list-menu">
                    <i class="icon ion-close-round close-iframe"></i>
                    <div class="intro-inner">
                     	<ul id="nav-menu">
                         <li><a href="index.html">Home</a></li>
                       	 <li><a href="about.html">About</a></li>
                       	 <li><a href="blog.html">Blog</a></li>
                       	 <li><a href="contact.html">Contact</a></li>
                      </ul>
                    </div>
                  </div>

                </div>
              </div>

            </div>
         </div>
      </div>

   </nav>
</div>



<section id="header" class="header-two">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
           		 <div class="header-thumb">
              		 <h1 class="wow fadeIn" data-wow-delay="1.6s">Project title</h1>
              		 <h3 class="wow fadeInUp" data-wow-delay="1.9s">Nulla scelerisque lectus urna</h3>
           		 </div>
			</div>

		</div>
	</div>		
</section>

<section id="single-project">
   <div class="container">
      <div class="row">

         <div class="wow fadeInUp col-md-offset-1 col-md-3 col-sm-offset-1 col-sm-4" data-wow-delay="2.3s">
		
			<div class="project-info">
				<h4>Date</h4>
				<hp><?php echo $date ?></p>
			</div>
			<div class="project-info">
				<h4>Category</h4>
				<p><?php echo $brand ?></p>
			</div>
		</div>

		<div class="wow fadeInUp col-md-7 col-sm-7" data-wow-delay="2.6s">
						<p>
									<?php echo $description ?>
						</p>
			<img src="images/<?php echo $image ?>" class="img-responsive" alt="Single Project">
		</div>

      </div>
   </div>
</section>

<footer>
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12">
			<p class="wow fadeInUp"  data-wow-delay="0.3s">Copyright © 2020</p>

			<ul class="social-icon wow fadeInUp"  data-wow-delay="0.6s">
					<li><a href="#" class="fa fa-facebook"></a></li>
					<li><a href="#" class="fa fa-twitter"></a></li>
					<li><a href="#" class="fa fa-dribbble"></a></li>
					<li><a href="#" class="fa fa-behance"></a></li>
					<li><a href="#" class="fa fa-google-plus"></a></li>
				</ul>
			</div>
			
		</div>
	</div>
</footer>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>