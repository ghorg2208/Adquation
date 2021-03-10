@extends('layouts.Master')

@section('content')
<main role="main">

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="container marketing">
            <hr class="featurette-divider2">

            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4">
                    <img class="bd-placeholder-img rounded-circle" src="../images/Showcase_index_audit.jpg" style="width: 25%">
                    <h2>Le pôle audit</h2>
                </div><!-- /.col-lg-4 -->

                <p>Examen indépendant, méthodique et documenté, l'audit est un outil de progrès indispensable dans votre démarche d'amélioration continue.
                    Nos consultants auditeurs effectuent tout type d'audit :</p>

            </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider2">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="groupTitle audit">Les diagnostics </h2>
                <p class="">Le diagnostic initial ou état des lieux vous permet de mesurer et planifier le chemin à parcourir pour atteindre l’objectif que vous vous êtes fixé dans la mise en place de votre système de management. Certifiés, IRCA,
                    les consultants d'Adéquation effectuent très régulièrement des audits de tierce partie pour le compte d'organismes certificateurs. Cette pratique vous garantit compétence,
                    réalisme et pragmatisme pour vos audits de première et seconde partie</p>
            </div>
                <div class="col-md-5">
                <img class="trainingPicture" src="images/Showcase_audit_1.jpg" alt="training">
                </div>
        </div>

        <hr class="featurette-divider2">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="groupTitle audit">Les pré-audits</span></h2>
                <p></p>
                <p class="">Répétition générale avant l’audit de certification ou l’audit d’un client important, le pré-audit de certification ou audit à blanc vous permet de peaufiner votre système et également de préparer et sensibiliser vos équipes. Adéquation vous propose également de former vos équipes à l'audit. Découvrez nos programmes de formation d'auditeurs en cliquant ici</p>
            </div>
            <div class="col-md-5 order-md-1">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="200" height="200" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title></svg>
            </div>
        </div>

        <hr class="featurette-divider2">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="groupTitle audit">Les audits fournisseur</h2>
                <p class="">Evaluer le respect de vos exigences, maitriser vos processus externalisés comme l’exige la nouvelle version de la norme ISO 9001, inciter vos fournisseurs à mettre en œuvre les bonnes pratiques, tels sont les objectifs d’un audit fournisseur dont nos consultants-auditeurs établiront avec vous le référentiel si nécessaire.</p>
            </div>
            <div class="col-md-5">
                <img class="trainingPicture" src="images/Showcase_audit_2.jpg" alt="training">
            </div>
        </div>

        <hr class="featurette-divider2">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="groupTitle audit">Les audits internes</h2>
                    <p></p>
                    <p class="">Indispensable dans votre démarche d’amélioration continue, I'audit interne vous permet de vérifier la conformité et l’efficacité de votre système; Il constitue une exigence de la plupart des normes de management (notamment ISO 9001, 14001, 13485, OHSAS 18001, ISO 45001, EN 9100, IATF 16949…).</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="200" height="200" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 200*200"><title>Placeholder</title></svg>
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
            <a href="#">mentions legals</a></p>
    </footer>
</main>

@endsection()