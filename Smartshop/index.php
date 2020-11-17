
<!DOCTYPE html>
<html>
  <head>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Shop</title>
     
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!-- font-awesome -->
      <link rel="stylesheet" href="src/css/font-awesome-4.6.3/css/font-awesome.min.css">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="src/css/materialize.min.css"  media="screen,projection"/>
      <!-- animate css -->
      <link rel="stylesheet" href="src/css/animate.css-master/animate.min.css">
      <!-- My own style -->
      <link rel="stylesheet" href="src/css/style.css">
      <!-- Progress bar -->
      <link rel='stylesheet' href='src/css/nprogress.css'/>
    </head>
  <body>

  <div class="navbar-fixed">
 <nav class="navblack">
   <div class="nav-wrapper nav-wrapper-2 container white">
   <ul class="left hide-on-med-and-down">
     <li><a href="index" class="dark-text">Shop</a></li>
   </ul>

   <ul class="center hide-on-large-only">
     <li><a href="index" class="dark-text">Shop</a></li>
   </ul>
   <ul  class="right hide-on-med-and-down">
       <li><a href="index" class="dark-text">Home</a></li>
       <li><a href="#categorie" class="dark-text">categorie</a></li>
       <li><a href="#about" class="dark-text">About</a></li>
     <li><a href="#" class="dark-text baskett"><i class="material-icons">shopping_cart</i>
   </ul>
 </div>
 </nav>
</div>


<div class="container-fluid home" id="top">
  <div class="container search">
    <nav class="animated slideInUp wow">
      <div class="nav-wrapper">
        <form method="GET" action="search.php">
          <div class="input-field">
            <input id="search" class="searching" type="search" name='searched' required>
            <label for="search"><i class="material-icons">search</i></label>
            <i class="material-icons">close</i>
          </div>

          <div class="center-align">
            <button type="submit" name="search" class="blue waves-light miaw waves-effect btn hide">Search</button>
          </div>
        </form>
      </div>
    </nav>
  </div>
</div>

<div class="container most">
  <div class="row">
    <?php

     include 'db.php';

    $queryfirst = "SELECT

   product.id as 'id',
   product.name as 'name',
   product.price as 'price',
   product.thumbnail as 'thumbnail',

    SUM(command.quantity) as 'total',
    command.statut,
    command.id_produit

    FROM product, command
    WHERE product.id = command.id_produit AND command.statut = 'paid'
    GROUP BY product.id
    ORDER BY SUM(command.quantity) DESC LIMIT 3";

    $resultfirst = $connection->query($queryfirst);
    if ($resultfirst->num_rows > 0) {
      // output data of each row
      while($rowfirst = $resultfirst->fetch_assoc()) {

            $id_best = $rowfirst['id'];
            $name_best = $rowfirst['name'];
            $price_best = $rowfirst['price'];
            $thumbnail_best = $rowfirst['thumbnail'];
            $totalsold = $rowfirst['total'];

            ?>

            <div class="col s12 m4">
              <div class="card hoverable animated slideInUp wow">
                <div class="card-image">
                  <a href="product.php?id=<?= $id_best;  ?>"><img src="products/<?= $thumbnail_best; ?>"></a>
                 
                  <a href="product.php?id=<?= $id_best; ?>" class="btn-floating red halfway-fab waves-effect waves-light right"><i class="material-icons">add</i></a>
                </div>
                  <div class="card-content">
                    <div class="container">
                      <div class="row">
                        <div class="col s6">
                          <p class="white-text"><i class="left fa fa-dollar"></i> <?= $price_best; ?></p>
                        </div>
                        <div class="col s6">
                          <p class="white-text"><i class="left fa fa-shopping-basket"></i> <?= $totalsold; ?></p>
                        </div>
                      </div>
                    </div>

                  </div>

                </div>
              </div>
              <?php }} ?>


            </div>
          </div>

          <div class="container-fluid center-align categories" id="categorie">
            <a href="#category" class="button-rounded btn-large waves-effect waves-light">Categories</a>
            <div class="container" id="category">
              <div class="row">
                <?php

                //get categories
                $querycategory = "SELECT id, name, icon  FROM category";
                $total = $connection->query($querycategory);
                if ($total->num_rows > 0) {
                  // output data of each row
                  while($rowcategory = $total->fetch_assoc()) {
                    $id_category = $rowcategory['id'];
                    $name_category = $rowcategory['name'];
                    $icon_category = $rowcategory['icon'];

                    ?>

                    <div class="col s12 m4">
                      <div class="card hoverable animated slideInUp wow">
                        <div class="card-image">
                          <a href="category.php?id=<?= $id_category; ?>"><img src="src/img/<?= $icon_category; ?>.png" alt=""></a>
                          <span class="card-title black-text" style="text-align: center;"><?= $name_category; ?></span>
                        </div>
                      </div>
                    </div>
                    <?php }} ?>
                  </div>
                </div>
              </div>


              <div class="container-fluid about" id="about">
                <div class="container">
                  <div class="row">
                    <div class="col s12 m6">
                      <div class="card animated slideInUp wow">
                        <div class="card-image">
                          <img src="src/img/about.jpg" alt="" style="height: 500px;">
                        </div>
                      </div>
                    </div>

                    <div class="col s12 m6" id="about">
                      <h3 class="animated slideInUp wow">About Us</h3>
                      <div class="divider animated slideInUp wow"></div>
                      <p class="animated slideInUp wow">we gives you a chance to quickly and easily find the products you want 
                        and have it delivered to your home in no time, regardless of your location.
                        We have been in the business for quite a while now, 
                        and it that time we have not only managed to make close relationships with numerous 
                        suppliers all over the world, but also to recognize what people need. 
                        This means that we are always able to offer all the latest phones, great prices, reliable service, 
                        fast delivery and premium customer support.
                      </p>
                      </div>

                    </div>
                  </div>
                </div>

                <div class="container contact" id="contact">
                  <div class="row">
                    <form method="post" action="" class="col s12 animated slideInUp wow">
                      <div class="row">
                        <div class="input-field col s12 m6">
                          <i class="material-icons prefix">account_circle</i>
                          <input id="icon_prefix" name="name" type="text" class="validate">
                          <label for="icon_prefix">Full Name</label>
                        </div>
                        <div class="input-field col s12 m6">
                          <i class="material-icons prefix">email</i>
                          <input name="email" id="email" type="email" class="validate">
                          <label for="email" data-error="wrong" data-success="right">Email</label>
                        </div>



                        <div class="input-field col s12 ">
                          <i class="material-icons prefix">message</i>
                          <textarea id="icon_prefix2" class="materialize-textarea" type="text" name="messageu" rows="8" style="resize: vertical;min-height: 16rem;" required></textarea>
                          <label for="icon_prefix2">Your message</label>
                        </div>

                        <div class="center-align">
                          <button type="submit" name="contact" class="button-rounded btn-large waves-effect waves-light">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <?php



if(isset($_POST['contact'])){

    if(!empty($_POST["name"] && $_POST['email'] && $_POST['messageu'])){


        $message="";
        $to = "elhadkimariem3@gmail.com"; // this is your Email address
        $from = "elhadkimariem3@gmail.com"; // this is the sender's Email address
        $name = $_POST['name'];
        $email= $_POST['email'];
        $messageu= $_POST['messageu'];
        $subject = "Contact";
        $message = "Internaut: " .$name . "\n\n His email : " . $email . "\n\n said:" . "\n\n" .$messageu. "\n\n" ;
        $headers = "From:" . $from;
        mail($to,$subject,$message,$headers);
    }
}

?>

                <?php
                require 'includes/secondfooter.php';
                require 'includes/footer.php'; ?>
