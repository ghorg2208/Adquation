
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <link rel="icon" type="image/x-icon" href="images/logo_adequation.png" />
    <title>portail collaboratif</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="navbar/navbar.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Adequation</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Accueil<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pr??sentation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Formation</a>
                    <ul class="submenu">
                        <li style="background-color: blue"><a href="#">formation1</a></li>
                        <li style="background-color: yellow"><a href="#">Formaation2</a></li>
                        <li><a href="#">formation3</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Conseil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Audit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            <form class="form-inline mt-2 mt-md-0">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">connexion</button>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="margin-left: 10px">enregister</button>
            </form>
        </div>
    </nav>
</header>

<main role="main">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">
            <hr class="featurette-divider2">

            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4">
                    <img class="bd-placeholder-img rounded-circle" src="images/Showcase_index_council.jpg" style="width: 25%">
                    <h2>Le portail collaboratif d'Ad??quation</h2>
                </div><!-- /.col-lg-4 -->

                <p>Un outil d??velopp?? par Ad??quation qui vous permet d'acc??l??rer la mise en place de vos syst??mes QSE au meilleur co??t et de faciliter leur gestion. Accessible sur abonnement, ce service est modulable allant du simple accompagnement ?? l'h??bergement complet de vos syst??mes de management.
                    D??couvrez les nombreux b??n??fices de cet outil.</p>

            </div><!-- /.row -->


            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider2">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="groupTitle council">Un outil souple ??volutif et personnalisable</h2>
                    <p class="">Que vous ayez un site unique ou que votre entreprise soit multisite, et quel que soit le nombre d'utilisateurs , il existe une formule d'abonnement pour coller au plus pr??s ?? vos besoins. De m??me le portail collaboratif vous offre la possibilit?? de planifier vos syst??mes de management comme vous l'entendez.</p>
                </div>
                <div class="col-md-5">
                    <img class="trainingPicture" src="images/Showcase_plateform_1.jpg" alt="training">
                </div>
            </div>

            <hr class="featurette-divider2">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="groupTitle council" style="margin-top: 15px">Boostez la mise en place de vos systemes de management<span class="text-muted"></span></h2>
                    <p class="">Parce qu'il est un outil structurant, qu'il comporte de nombreux documents pr??-r??dig??s, le portail collaboratif vous permet de booster la mise en place de vos syst??mes de management,
                        et de gagner du temps par rapport ?? une approche classique.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img class="trainingPicture" src="images/Showcase_plateform_2.jpg" alt="training">
                </div>
            </div>

            <hr class="featurette-divider2">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="groupTitle council" style="margin-top: 15px">Un outil simple en utilisation et en maintenance</h2>
                    <p class="">Le portail collaboratif d'Ad??quation est facile d'utilisation sans connaissance particuli??re. Le classement des documents est simple, unique, accessible ?? tous sans risque de confusion. En outre, comme toute application en mode SAS, l'outil ne n??cessite ni installation ni maintenance ni sauvegarde, ces deux derni??res ??tant assur??e par l'h??bergeur.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img class="trainingPicture" src="images/Showcase_plateform_4.jpg" alt="training">
                </div>
            </div>

            <hr class="featurette-divider2">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="groupTitle council" style="margin-top: 15px">Un rapport qualit??/prix exceptionnel</span></h2>
                    <p class="">Gr??ce ?? la baisse des couts de mise en place et ?? l'assistance modulable de consultants exp??riment??s, le temps pass?? pour la mise en place de vos syst??mes de management est bien moindre que dans une approche classique que ce soit pour vos ??quipes, que pour le consultant qui vous accompagne.
                        Si vous souhaitez qu'un de nos consultants vienne vous pr??senter notre portail collaboratif, cliquez ici.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img class="trainingPicture" src="images/Showcase_plateform_3.jpg" alt="training">
                </div>
            </div>
            <div class="quote">
                "Le portail collaboratif d'Adequation nous a aidon  ???? comprendre et a facilit???? la d????marche de mise en place du syst????me de management de la qualit???? du centre de formation continue."
                <p class="citationAuthor">C????line DUEZ-RIDEL Pilote Projet Qualit????<p>
                <p class="statusAuthor">Direction du d????veloppement des entreprises et de la formation continue  ???? la CCI de Versailles Val-d'Oise /Yvelines</p>
            </div>


            <hr class="featurette-divider2">

            <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->


        <!-- FOOTER -->
        <footer class="container">
            <p class="float-right"><a href="#">Back to top</a></p>
            <p>SAS Ad??quation RCS 440 682 904 - T??l : 09.53.78.63.88 - Fax : 09.58.78.63.88 - Retrouvez-nous sur: LinkedIn
                Cabinet Adequation - Conseil, formation et audit en management de la qualit??, de la s??curit?? et de l???environnement - Formations E-Learning
                R??f??rentiels ISO 9001, 14001, 13485, OHSAS 18001, ISO 45001, EN 9100, IATF 16949 - Formations SST, Incendie, Langues, Bureautiques, ...
                <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p></p>
        </footer>
</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script></body>
</html>
