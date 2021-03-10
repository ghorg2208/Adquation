
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <link rel="icon" type="image/x-icon" href="images/logo_adequation.png" />    <title>Conseil</title>

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
                    <a class="nav-link" href="#">Présentation</a>
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
                    <h2>Le pôle conseil</h2>
                </div><!-- /.col-lg-4 -->

                <p>Vous accompagner dans la conception, le déploiement, la surveillance et l’amélioration de vos systèmes de management de la qualité, de la sécurité et de l’environnement,
                    c’est la mission des consultants d’Adéquation.
                    Ils concoivent ces interventions avec vous selon les objectifs que vous vous êtes fixés et les ressources que vous pouvez affecter à votre projet.</p>

            </div><!-- /.row -->


            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider2">

            <div class="row featurette">
                <div class="col-md-7">
                    <h3 class="groupTitle council">Notre approche client</h3>
                    <p class="">Afin d'élaborer une proposition de collaboration, nous définissons avec vous très précisément votre projet.
                        S'agit-il de construire une démarche de progrès, ex nihilo , d'optimiser un système de management existant,
                        de coacher vos équipes, d'obtenir une certification sur quels référentiels,
                        sous quels délais, ... ? Cette phase est également l'occasion d'un premier contact entre le consultant Adéquation en charge du dossier et vos équipes et permet
                        de vérifier la symbiose indispensable dans la gestion de ce type de projet.</p>
                </div>
                <div class="col-md-5">

                </div>
            </div>

            <hr class="featurette-divider2">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="groupTitle council" style="margin-top: 15px">Prendre en charge des fonctions<span class="text-muted"></span></h2>
                    <p class="">Sur votre demande, Adéquation peut mettre à votre disposition un consultant qui prendra en charge la fonction qualité, environnement,
                        ... avec une présence régulière dans votre entreprise.
                        Nous mettons en place ce type de dispositif sur une base permanente ou temporaire dans le respect des exigences normatives en la matière.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img class="trainingPicture" src="images/Showcase_council.jpg" alt="training">
                </div>
            </div>

            <hr class="featurette-divider2">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="groupTitle council" style="margin-top: 15px">Maintenir, animer un système de management</h2>
                    <p class="">Votre organisation évolue: rachats, lancement de nouvelles activités,
                        de nouveaux produits, élargissement du périmètre de certification, ... Adéquation peut vous aider à adapter votre ou vos systèmes de management
                        et à formaliser vos démarches d'amélioration continue.</p>
                </div>

            </div>

            <hr class="featurette-divider2">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="groupTitle council" style="margin-top: 15px">Bâtir un système de management</span></h2>
                    <p class="">Vous souhaiter aller à la certification ISO 9001, 14001, 45001, ou autre ?
                        Après une phase de diagnostic, votre consultant établit et met en oeuvre avec vous un plan de travail .
                        Nous prenons soin d'impliquer l'ensemble de vos équipes tout au long du projet pour s'assurer de l'appropriation du système.
                        Nous préconisons qu'un consultant différent de celui qui vous accompagne effectue l'audit interne,
                        l'occasion d'avoir un regard extérieur sur le travail accompli.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="250" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"</text></svg>
                </div>
            </div>

            <hr class="featurette-divider2">

            <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->


        <!-- FOOTER -->
        <footer class="container">
            <p class="float-right"><a href="#">Back to top</a></p>
            <p>SAS Adéquation RCS 440 682 904 - Tél : 09.53.78.63.88 - Fax : 09.58.78.63.88 - Retrouvez-nous sur: LinkedIn
                Cabinet Adequation - Conseil, formation et audit en management de la qualité, de la sécurité et de l’environnement - Formations E-Learning
                Référentiels ISO 9001, 14001, 13485, OHSAS 18001, ISO 45001, EN 9100, IATF 16949 - Formations SST, Incendie, Langues, Bureautiques, ...
                <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p></p>
        </footer>
</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script></body>
</html>
