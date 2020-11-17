<?php 
include('conn.php'); //Database Connection
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="css/jquery-ui.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
    .ui-slider-range.ui-corner-all.ui-widget-header {
    background: #646466;
      }
</style>

</head>

<body>

    <!-- Page Content -->
    <div class="container">

        <br/>
        <br/>
        <br/>
        <br/>

        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <h3>Price</h3>
                    <input type="hidden" id="min_price_hide" value="3000" />
                    <input type="hidden" id="max_price_hide" value="20000" />
                    <p id="price_show">$3000 - $20000</p>
                    <div id="price_range"></div>
                </div>

       

                <div class="list-group">
                    <h3>Brand</h3>
                         <?php

                    $query = "
                    SELECT DISTINCT(product_brand) FROM product WHERE stock_avail = '1' ORDER BY product_brand DESC
                    ";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                            <div class="list-group-item checkbox">
                                <label>
                                    <input type="checkbox" class="filter_all brand" value="<?php echo $row['product_brand']; ?>">
                                    <?php echo $row['product_brand']; ?>
                                </label>
                            </div>
                            <?php
                    }

                    ?>
                 </div>

                <div class="list-group">
                    <h3>Color</h3>
                    <?php

                    $query = "
                    SELECT DISTINCT(product_color) FROM product WHERE stock_avail = '1' ORDER BY product_color DESC
                    ";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                        <div class="list-group-item checkbox">
                            <label>
                                <input type="checkbox" class="filter_all color" value="<?php echo $row['product_color']; ?>">
                                <?php echo $row['product_color']; ?>
                            </label>
                        </div>
                        <?php    
                    }

                    ?>
                </div>

            </div>

            <div class="col-md-9">

                <div class="row filter_data">

                </div>

            </div>
        </div>

    </div>

    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="js/jquery-ui.js"></script>

    <script>
        $(document).ready(function() {

            filter_data();

            function filter_data() {
                $('.filter_data');
                var action = 'fetch_data';
                var minimum_price = $('#min_price_hide').val();
                var maximum_price = $('#max_price_hide').val();
                var brand = get_filter('brand');
                var color = get_filter('color');
               
                $.ajax({
                    url: "fetch.php",
                    method: "POST",
                    data: {
                        action: action,
                        minimum_price: minimum_price,
                        maximum_price: maximum_price,
                        brand: brand,
                        color: color,
                      
                    },
                    success: function(data) {
                        $('.filter_data').html(data);
                    }
                });
            }

            function get_filter(class_name) {
                var filter = [];
                $('.' + class_name + ':checked').each(function() {
                    filter.push($(this).val());
                });
                return filter;
            }

            $('.filter_all').click(function() {
                filter_data();
            });

            $('#price_range').slider({
                range: true,
                min: 3000,
                max: 20000,
                values: [3000, 20000],
                step: 10,
                stop: function(event, ui) {
                    $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
                    $('#min_price_hide').val(ui.values[0]);
                    $('#max_price_hide').val(ui.values[1]);
                    filter_data();
                }
            });

        });
    </script>

</body>

</html>