
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <link rel="icon" type="image/x-icon" href="images/logo_adequation.png" />
    <title>Formation</title>

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
        <a class="navbar-brand" href="#">Adquation</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('Acceuil.show')}}">Accueil<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pr??sentation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('Formation.show')}}">Formation</a>
                    <ul class="submenu">
                        <li style="background-color: blue"><a href="#">formation1</a></li>
                        <li style="background-color: yellow"><a href="#">Formaation2</a></li>
                        <li><a href="#">formation3</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('Conseil.show')}}">Conseil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('Audit.show')}}">Audit</a>
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
                <img class="bd-placeholder-img rounded-circle" src="images/Showcase_index_training.jpg" style="width: 25%">
                <h2>Le p??le formation</h2>
            </div><!-- /.col-lg-4 -->

            <p>Notre offre de formation est articul??e autour des th??matiques: Qualit??, S??curit??, Environnement, Management
                & Communication. Quels que soient nos publics (??tudiants, salari??s en activit?????.), nous nous attachons ?? dispenser des formations en phase
                avec les r??alit??s du terrain en inter comme en intra entreprise. Au-del?? des supports de cours diffus??s aux
                stagiaires nous privil??gions les m??thodes interactives et avons d??velopp?? des outils sp??cifiques ?? d??couvrir ci-dessous.</p>

        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->


        <hr class="featurette-divider2">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="groupTitle training">Les entreprises virtuelles</h2>
                <p class="">Ad??quation propose ?? ses stagiaires en parall??le et en compl??ment des enseignements th??oriques, de construire enti??rement ou partiellement un syst??me de management
                    pour une entreprise virtuelle et de l???amener ?? un niveau ?? certifiable ?? selon le r??f??rentiel retenu. Selon le profil des stagiaires,
                    l'entreprise ?? certifier sera soit une entreprise industrielle, soit une entreprise de services, soit une entreprise de n??goce.</p>
            </div>
            <div class="col-md-5">
                <img class="trainingPicture" src="images/Showcase_training_1.jpg" alt="training">
            </div>
        </div>

        <hr class="featurette-divider2">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="groupTitle training" style="margin-top: 15px">Les sites extranet d??di??s<span class="text-muted"></span></h2>
                <p class="">Pour certaines sessions de formation, Ad??quation met ?? disposition des stagaires pendant une p??riode d??termin??e,
                    un site extranet d??di?? sur lequel ils peuvent acc??der aux supports de cours, au corrig?? des exercices pratiques et des quizz,
                    ?? des documents types, et dialoguer entre eux et / ou avec leur formateur.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="200" height="200" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"</text></svg>
            </div>
        </div>

        <hr class="featurette-divider2">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="groupTitle training" style="margin-top: 15px">Les formateurs</span></h2>
                <p class="">Les formateurs d'Ad??quation exercent ??galement une fonction op??rationnelle,
                    de consultant et / ou d'auditeur. Ceci leur permet d'??tre toujours en prise avec les r??alit??s terrain et d'illustrer leurs cours de situations v??cues.</p>
            </div>
            <div class="col-md-5">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="200" height="200" focusable="false" role="img" src="images/logo_adequation.png"></svg>
            </div>
        </div>

        <hr class="featurette-divider2">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="groupTitle training" style="margin-top: 15px">La plateforme ARKADE-ELEARNING</span></h2>
                <p class="">En partenariat avec le r??seau ARKADE, Ad??quation propose ??galement des formations E-Learning: Bureautique, Langues, S??curit??, Incendie, Electricit??,
                    COVID-19, Cl??A, ... accessibles 7j/7 et 24h/24. Le portail ARKADE-ELEARNING permet aux stagiaires d'apprendre ?? leur rythme, en fonction de leurs disponibilit??s,
                    sans contraintes de lieu, ni de temps. Ad??quation propose des parcours p??dagogiques en compl??te autonomie, ou en combinaison avec des formations en pr??sentiel ou distanciel.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="trainingPicture" src="images/Arkade_logo.jpg" alt="training">
            </div>
        </div>

        <hr class="featurette-divider">

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
