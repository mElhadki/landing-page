<?php 
ob_start();
?>
<!doctype html>
<html lang="en">

<head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- link local CSS -->
    <link rel="stylesheet" href="view/css/home.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <?php include 'controller/Commande.php'; ?>

    <!-- Form Commande -->
    <div class="container contact-form">
        <form action="" method="post">
            <h3>REMPLIR LE FORMULAIRE</h3>
            <div class="row">
            <div class="form-group">
                        <div class="bg">
                            <strong> CHOISIR VOS PRODUITS :</strong><br/>
                            <div>
                                <div class="chiller_cb">
                                    <input id="myCheckbox" type="checkbox" name="Produit[]" value="SIL-1L">
                                    <label for="myCheckbox">SIL 3 PRO / 1L-590 DH</label>
                                    <span></span>
                                </div>
                               
                                <div class="input-group mb-3 number-spinner">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-primary" data-dir="dwn" type="button"><i
                                                class="fas fa-minus"></i></button>
                                    </div>
                                
                                    <input type="text" class="form-control text-center" value="" id="valeur" name="Quantity[]">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" data-dir="up" type="button"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                                <div class="chiller_cb">
                                    <input id="myCheckbox2" type="checkbox" name="Produit[]" value="SIL-5L">
                                    <label for="myCheckbox2">SIL 3 PRO / 5L-2800 DH</label>
                                    <span></span>
                                </div>
                                <div class="input-group mb-3 number-spinner">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-primary" data-dir="dwn" type="button"><i
                                                class="fas fa-minus"></i></button>
                                    </div>
                                    <input type="text" class="form-control text-center" value="" id="valeur" name="Quantity[]">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" data-dir="up" type="button"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                                <div class="chiller_cb">
                                    <input id="myCheckbox3" type="checkbox" name="Produit[]" value="PULV-2L">
                                    <label for="myCheckbox3">PULV 2L / 210 DH</label>
                                    <span></span>
                                </div>
                                <div class="input-group mb-3 number-spinner">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-primary" data-dir="dwn" type="button"><i
                                                class="fas fa-minus"></i></button>
                                    </div>
                                    <input type="text" class="form-control text-center" value="" id="valeur" name="Quantity[]">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" data-dir="up" type="button"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
             
                   
                    <div class="form-group">
                        <input type="text" name="Nom" class="form-control" placeholder="Nom *" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="tel" class="form-control" placeholder="Tel *" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="Ville" class="form-control" placeholder="Ville *" />
                    </div>
                  
                <div class="btnconfirm">
                    <input type="submit" name="Commander" class="btnCommand" value="JE CONFIRME" />
                </div>

                <p class="text-danger" style="text-align: center; width:100%;">
                    <?php  
                     if(isset($Error))  
                     {  
                          echo $Error;  
                     }  
                     ?>
                </p>

            </div>
        </form>
    </div>


    <script>
      function add() {
            var plus = document.getElementById('valeur').value;
            var convert = Number(plus);
            if (plus === "") {
                convert = 0;
            }
            document.getElementById('valeur').value = convert;
        }


        $(document).on('click', '.number-spinner button', function () {
            add();
            var btn = $(this),
                oldValue = btn.closest('.number-spinner').find('input').val().trim(),
                newVal = 0;

            if (btn.attr('data-dir') == 'up') {
                newVal = parseInt(oldValue) + 1;
            } else {
                if (oldValue > 1) {
                    newVal = parseInt(oldValue) - 1;
                } else {
                    newVal = 1;
                }
            }
            btn.closest('.number-spinner').find('input').val(newVal);
        })
    </script>










    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
</body>

</html>