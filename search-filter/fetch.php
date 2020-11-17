<?php
include('conn.php'); //Database Connection

if (isset($_POST["action"])) {
    $query = "
  SELECT * FROM product WHERE stock_avail = '1'
 ";
    if (isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"])) {
        $query .= "
   AND product_price BETWEEN '" . $_POST["minimum_price"] . "' AND '" . $_POST["maximum_price"] . "'
  ";
    }
    if (isset($_POST["brand"])) {
        $brand_filter = implode("','", $_POST["brand"]);
        $query .= "
   AND product_brand IN('" . $brand_filter . "')
  ";
    }
    if (isset($_POST["color"])) {
        $color_filter = implode("','", $_POST["color"]);
        $query .= "
   AND product_color IN('" . $color_filter . "')
  ";
    }
 
    
    $statement = $connect->prepare($query);
    $statement->execute();
    $result    = $statement->fetchAll();
    $total_row = $statement->rowCount();
    $output    = '';
    if ($total_row > 0) {
        foreach ($result as $row) {
            $output .= '
   <div class="col-md-4 col-sm-6">
   <div class="product-grid">
       <div class="product-image4">
           <a href="#">
               <img class="pic-1" src="image/' . $row['product_image'] . '">
               <img class="pic-2" src="image/' . $row['product_image'] . '">
           </a>
           <ul class="social">
               <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
               <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
               <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
           </ul>
           <span class="product-new-label">New</span>
       </div>
       <div class="product-content">
           <h3 class="title"><a href="#">' . $row['product_name'] . '</a></h3>
           <div class="price">
              $' . $row['product_price'] . '
               <span>$' . $row['product_price'] . '</span>
           </div>
            Brand : ' . $row['product_brand'] . ' <br />
           Color: ' . $row['product_color'] . ' </p>
           <a class="add-to-cart" href="">ADD TO CART</a>
       </div>
   </div>
</div>';
        }
    } else {
        $output = '<h3>No Data Found</h3>';
    }
    echo $output;
}

?>