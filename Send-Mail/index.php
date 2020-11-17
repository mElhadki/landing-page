<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Premium Bootstrap 4.3.1 Landing Page Template" />
        <meta name="keywords" content="bootstrap 4, premium, marketing, multipurpose" />
        <meta name="author" content="Script Eden" />
        <!-- Site Title -->
        <title> Contact</title>

        <!--====== Stylesheets ======-->
        <link rel="stylesheet" href="bootstrap-4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/pe-icon-7-stroke.css">
        <link rel="stylesheet" href="assets/css/custom.css">
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700" rel="stylesheet">
    </head>
    <body>

    <?php include 'controller/Commande.php'; ?>
          
            <!--=== Contact ===-->
            <section id="contact" class="contact">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-header mb-5 text-center">
                                <h6 class="section-tag mb-2">Contact</h6>
                                <h4 class="section-title mx-auto mb-3">Stay In Touch</h4>
                                <div class="section-title-border mb-4"></div>
                                <p class="text-muted">Contactez-nous pour toutes questions relatives à notre société ou nos services.
Nous ferons notre possible pour revenir vers vous au plus vite.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 d-flex align-items-end">
                            <div class="row">
                                <div class="col-md-12 mb-5">
                                    <img src="assets/images/svg/undraw_map_light.svg" alt="" class="img-fluid contact-img mx-auto d-block">
                                </div>
                                <div class="col-md-6 col-sm-6 text-center mt-3">
                                    <div>
                                        <i class="pe-7s-call pe-2x main-color"></i>
                                    </div>
                                    <div class="mt-2">
                                        <p class="mb-0 font-weight-bold">Appelez-nous au</p>
                                        <p class="text-muted">+0 808 547 698</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 text-center mt-3">
                                    <div>
                                        <i class="pe-7s-mail pe-2x main-color"></i>
                                    </div>
                                    <div class="mt-2">
                                        <p class="mb-0 font-weight-bold">Envoyez-nous un courriel à</p>
                                        <p class="text-muted">disfastgroup@gmail.com</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 text-center mt-3">
                                    <div>
                                        <i class="pe-7s-map pe-2x main-color"></i>
                                    </div>
                                    <div class="mt-2">
                                        <p class="mb-0 font-weight-bold">Visiter le bureau</p>
                                        <p class="text-muted">N° 101, IMM SINWAN, HAUT FOUNTY AGADIR.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 text-center mt-3">
                                    <div>
                                        <i class="pe-7s-timer pe-2x main-color "></i>
                                    </div>
                                    <div class="mt-2">
                                        <p class="mb-0 font-weight-bold">Heures d'ouverture</p>
                                        <p class="text-muted">8:30AM To 17:30PM</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mt-4 pt-4">
                                <form method="post" name="contact-form" class="contact-form">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group mt-2">
                                                <input name="name" id="name" type="text" class="form-control form-control-lg" placeholder="Your name*">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mt-2">
                                                <input name="email" id="email" type="email" class="form-control form-control-lg" placeholder="Your email*">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mt-2">
                                                <input type="text" class="form-control form-control-lg" name="subject" id="subject" placeholder="Your Subject..">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mt-2">
                                                <textarea name="comments" id="comments" rows="4" class="form-control form-control-lg" placeholder="Your message..."></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 text-right">
                                            <input type="submit" id="submit" name="send" class="btn-success btn btn-block" value="Send Message">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--=== Footer ===-->
            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="text-center mx-auto pb-5">
                                <h3 class="mb-3 text-white"></h3>
                                <p class="copyright mb-4">2020 ©</p>
                                <form class="form subscribe mx-auto mb-5">
                                    <input placeholder="Email" class="form-control form-control-lg" required="">
                                    <a href="#" class="submit"><i class="pe-7s-mail"></i></a>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3">
                            <p class="text-white mb-4">Our Pages</p>
                            <ul class="list-unstyled footer-list-menu">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Client</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-md-2 col-sm-3">
                            <p class="text-white mb-4">Company</p>
                            <ul class="list-unstyled footer-list-menu">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Media &amp; Press</a></li>
                                <li><a href="#">Career</a></li>
                                <li><a href="#">Blog</a></li>
                            </ul>
                        </div>
                        <div class="col-md-2 col-sm-3">
                            <p class="text-white mb-4">Resources</p>
                            <ul class="list-unstyled footer-list-menu">
                                <li><a href="#">Help &amp; Support</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                            </ul>
                        </div>
                        <div class="col-md-2 col-sm-3">
                            <p class="text-white mb-4">More Info</p>
                            <ul class="list-unstyled footer-list-menu">
                                <li><a href="#">Pricing</a></li>
                                <li><a href="#">For Marketing</a></li>
                                <li><a href="#">For CEOs </a></li>
                                <li><a href="#">For Agencies</a></li>
                                <li><a href="#">Our Apps</a></li>
                            </ul>
                        </div>
                        <div class="col-md-2 col-sm-3">
                            <p class="text-white mb-4">Help center</p>
                            <ul class="list-unstyled footer-list-menu">
                                <li><a href="#">Accounting </a></li>
                                <li><a href="#">Billing</a></li>
                                <li><a href="#">General Question</a></li>
                            </ul>
                        </div>
                        <div class="col-md-2 col-sm-3">
                            <p class="text-white mb-4">Follow Us</p>
                            <ul class="list-unstyled footer-list-menu">
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Instagram</a></li>
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">Linkdin</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
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


        <!--====== Javascript ======-->
        <script src="assets/js/jquery-3.3.1.min.js"></script>
        <script src="bootstrap-4.3.1/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/custom.js"></script>
    </body>
</html>