<?php 
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


	<title>Site</title>


	<link rel="stylesheet" href="css/bootstrap.min.css">


	<link rel="stylesheet" href="css/animate.min.css">

	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/ionicons.min.css">


	<link rel="stylesheet" href="css/style.css">


  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>
	
</head>
<body>

>
<div class="preloader">

	<div class="sk-spinner sk-spinner-pulse"></div>

</div>


<div class="nav-container">
   <nav class="nav-inner transparent">

      <div class="navbar">
         <div class="container">
            <div class="row">

              <div class="brand">
                <a href="index.html">Pic Photography</a>
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


<section id="header" class="header-one">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
          <div class="header-thumb">
              <h1 class="wow fadeIn" data-wow-delay="1.6s">You are Welcome</h1>
              <h3 class="wow fadeInUp" data-wow-delay="1.9s">ALL Projects are Here</h3>
          </div>
			</div>

		</div>
	</div>		
</section>


<section id="portfolio">
   <div class="container">
      <div class="row">

         <div class="col-md-12 col-sm-12">
            
               <div class="iso-section wow fadeInUp" data-wow-delay="2.6s">

                  <ul class="filter-wrapper clearfix">
                           <li><a href="#" data-filter="*" class="selected opc-main-bg">All</a></li>
                              <?php foreach($navBar as $nav): ?>
                           <li><a href="#" class="opc-main-bg" data-filter=".<?php echo $nav['brand'] ?>"><?php echo $nav['brand'] ?></a></li>
                     
                                 <?php endforeach; ?>
                        </ul>

                        <div class="iso-box-section wow fadeInUp" data-wow-delay="1s">
                           <div class="iso-box-wrapper col4-iso-box">
                              <?php foreach($allPhotos as $photo): ?>
                                 <input type="hidden" name="id" value="<?php echo $photo['id'] ?>">
                              <div class="iso-box <?php echo $photo['brand'] ?> col-md-4 col-sm-6">
                                 <div class="portfolio-thumb">
                                    <img src="images/<?php echo $photo['image'] ?>" class="img-responsive" alt="Portfolio">
                                       <div class="portfolio-overlay">
                                          <div class="portfolio-item">
                                                <a href="single-project.php?idPhoto=<?php echo $photo['id'] ?>"><i class="fa fa-link"></i></a>
                                                <h2>View project</h2>
                                             </div>
                                       </div>
                                 </div>
                              </div>
                              <?php endforeach; ?>
                            

                            </div>
                        </div>

               </div>

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
<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>