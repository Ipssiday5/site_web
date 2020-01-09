<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Confer - Conference Event HTML Template</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

    <script type="text/javascript" src="js/jquery.min.js" ></script>
    <script type="text/javascript" src="js/reservation.js"></script>
</head>

<body>
    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" style="background-image: url(img/bg-img/27.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">Reservation</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">réservation</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Our Speakings Area Start -->
    <section class="our-speaker-area section-padding-100">
        <div class="container">
            <h4>Inscription à l'évènement</h4>
            <p>Obtenez votre billet d'entrée</p>
            <form id="test" class="align-form">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="form-group">
                            <input type="text" name="nom" id="nom" class="field-divided form-control" placeholder="Nom">
                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="form-group">
                            <input type="text" name="prenom" id="prenom" class="field-divided form-control"
                                   placeholder="Prénom">
                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="form-group">
                            <input type="email" name="mail" id="mail" class="field-long form-control"
                                   placeholder="Adresse mail">
                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="form-group">
                            <input type="tel" name="tel" id="tel" class="field-long form-control"
                                   placeholder="Numéro de téléphone">
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="more-speaker-btn text-center mt-20 wow fadeInUp" data-wow-delay="300ms">
                            <a id="btnReservation" class="btn confer-btn" href="#">Valider</a>
                        </div>
                    </div>
                    </li>
                </div>
            </form>
        </div>
    </section>
    <!-- Our Speakings Area End -->s

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="js/confer.bundle.js"></script>
    <!-- Active -->
    <script src="js/default-assets/active.js"></script>

</body>

</html>
