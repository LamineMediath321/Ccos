    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <div class="clearfix"></div>
    <div class="banner" style="background-image:url(<?php echo base_url('assets/img/bg.jpg'); ?>)">
        <div class="container">
            <div class="banner-caption">
                <div class="col-md-12 col-sm-12 banner-text">
                    <h3 data-aos="fade-in">La plateforme d'accompagnement des &eacute;tudiants de
                        l'Universit&eacute; Gaston Berger dans leur insertion professionnelle</h3>

                    <form id="formSearchOffer" class="form-horizontal" method="post" action="<?php echo base_url() ?>/Offre/recherche" enctype="multipart/form-data">
                        <div class="col-md-offset-1 col-md-3 col-sm-3 col-xs-12 no-padd">
                            <div class="input-group">
                                <select id="choose-contrat" name="tc" class="form-control">
                                    <option value="">Choisissez un type de contrat</option>
                                    <?Php foreach ($GLOBALS['typeContrats'] as $value) :  ?>
                                        <option><?php echo $value['intitule']  ?></option>
                                    <?php endforeach;  ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12 no-padd">
                            <div class="input-group">
                                <select id="choose-profile" name="profil" class="form-control">
                                    <option value="">Choisissez un profil</option>
                                    <?Php foreach ($GLOBALS['profiles'] as $value) :  ?>
                                        <option><?php echo $value['intitule']  ?></option>
                                    <?php endforeach;  ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12 no-padd">
                            <div class="input-group">
                                <select id="choose-city" name="city" class="form-control">
                                    <option value="">Choisissez une ville</option>
                                    <?Php foreach ($GLOBALS['cities'] as $value) :  ?>
                                        <option><?php echo $value['nom']  ?></option>
                                    <?php endforeach;  ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 no-padd">
                            <div class="input-group">
                                <button type="submit" class="btn btn-primary" id="searchCriteria">Chercher</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <section>
        <div class="container">
            <div class="row">
                <div class="main-heading" data-aos="fade-up">
                    <h2 data-aos="fade-in">Parcourir les offres par <span>Domaine</span></h2>
                </div>
            </div>
            <div class="row">

                <?php foreach ($fieldOffersCount as $fieldOffers) : ?>
                    <div class="col-md-3 col-sm-6" data-aos="fade-left">
                        <a href="<?php echo base_url(); ?>/domaine_offres/<?= $fieldOffers['idDomaine'] ?>">
                            <div class="category-box">
                                <div class="category-desc">
                                    <div class="category-icon"><i class="<?= $fieldOffers['icon'] ?>" aria-hidden="true"></i><i class="<?= $fieldOffers['icon'] ?> abs-icon" aria-hidden="true"></i></div>
                                    <div class="category-detail category-desc-text">
                                        <h4><?= $fieldOffers['intitule'] ?>
                                        </h4>
                                        <p><?= $fieldOffers['total'] ?> Offres</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>

    <section>
        <div class="container center-block">
            <div class="row">
                <div class="main-heading">
                    <p><?= $offersCount ?> Offres</p>

                    <h2>Nouvelles <span>Offres</span></h2>
                </div>
            </div>
            <div class="row extra-mrg">
                <?php if ($offers) :
                    foreach ($offers as $offer) :
                ?>
                        <div class="col-md-4 col-sm-6" data-aos="fade-right">
                            <div class="grid-view brows-job-list">
                                <div class="brows-job-company-img">
                                    <img src="<?php echo base_url('assets/images/' . $offer['logo']); ?>" class="img-responsive" alt="" />
                                </div>
                                <div class="brows-job-position">
                                    <h3>
                                        <a href="<?php echo base_url(); ?>/offre/<?= $offer['idOpportunite'] ?>">
                                            <?= $offer['title'] ?>
                                        </a>
                                    </h3>

                                    <p><span><?= $offer['nomEntreprise'] ?></span></p>
                                </div>
                                <div class="brows-job-type"><span class="freelanc"><?= $offer['contractType'] ?></span></div>
                                <ul class="grid-view-caption">
                                    <li>
                                        <div class="brows-job-location">
                                            <p><i class="fa fa-map-marker"></i><?= $offer['nom'] ?></p>
                                        </div>
                                    </li>
                                    <li>
                                        <p><span class="brows-job-sallery"><i class="fa fa-hourglass-half"></i>
                                                <?php
                                                setlocale(LC_TIME, 'fr_FR.utf8', 'french', 'French_France.1252', 'fr_FR.ISO8859-1', 'fra');
                                                echo strftime("%d %b %G", strtotime($offer['dateCloture']));
                                                ?>
                                            </span>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                <?php endforeach;
                endif;
                ?>

            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="text-center"><a href="<?php echo base_url(); ?>/offres" class="btn btn-secondary">Voir plus</a></div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>



    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <main class="col-6">

        <div class="container">
            <h3 class="card-title text-center alert alert-info">Les étapes pour candidater à une offre</h3>

            <div class="row">
                <div class="col-md-12">
                    <div class="main-timeline2">
                        <div class="timeline">
                            <a href="#" class="timeline-content">
                                <span class="etape">Etape 1</span>
                                <div class="inner-content">
                                    <h3 class="title">Activer votre compte institutionnel</h3>
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ex odio,
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="timeline">
                            <a href="<?php echo base_url(); ?>/connexion" class="timeline-content">
                                <span class="etape">Etape 2</span>
                                <div class="inner-content">
                                    <h3 class="title">Se connecter sur la plateforme</h3>
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ex odio, rhoncus sit amet tincidunt eu,
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="timeline">
                            <a href="#" class="timeline-content">
                                <span class="etape">Etape 3</span>
                                <div class="inner-content">
                                    <h3 class="title">Remplir les informations suplementaires & creer votre cv</h3>
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ex odio, rhoncus sit amet tincidunt eu,
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="timeline">
                            <a href="#" class="timeline-content">
                                <span class="etape">Etape 4</span>
                                <div class="inner-content">
                                    <h3 class="title">Postuler & suiver une opportinuté</h3>
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ex odio, rhoncus sit amet tincidunt eu, suscipit a orci.
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <section class="testimonial col-6" id="testimonial">

        <div class="container">
            <div class="row">
                <div class="main-heading">
                    <p style="color: black;">Temoignages des alumni</p>

                    <h2>Parcours <span>inspirants</span></h2>
                </div>
            </div>
            <div class='row'>
                <div class='col-md-offset-2 col-md-8'>
                    <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                        <!-- Bottom Carousel Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#quote-carousel" data-slide-to="1"></li>
                            <li data-target="#quote-carousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Carousel Slides / Quotes -->
                        <div class="carousel-inner">

                            <!-- Quote 1 -->
                            <div class="item active">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-3 text-center">
                                            <img class="img-circle" src="<?php echo base_url('assets/images/Inspiring-Senegal-Author-profile-396x558.jpg'); ?>" style="width: 100px;height:100px;">
                                        </div>
                                        <div class="col-sm-9">
                                            <p style="color: black;">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit!</p>
                                            <small style="color: black;">Ndeye Khady </small>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- Quote 2 -->
                            <div class="item">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-3 text-center">
                                            <img class="img-circle" src="<?php echo base_url('assets/images/gettyimages-164929009-612x612.jpg'); ?>" style="width: 100px;height:100px;">
                                        </div>
                                        <div class="col-sm-9">
                                            <p style="color: black;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor nec lacus ut tempor. Mauris.</p>
                                            <small style="color: black;">David Diop</small>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- Quote 3 -->
                            <div class="item">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-3 text-center">
                                            <img class="img-circle" src="<?php echo base_url('assets/images/1567170171387.jfif'); ?>" style="width: 100px;height:100px;">
                                        </div>
                                        <div class="col-sm-9">
                                            <p style="color: black;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in arcu blandit, eget pretium nisl accumsan. Sed ultricies commodo tortor, eu pretium mauris.</p>
                                            <small style="color: black;">Aby wade</small>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                        </div>

                        <!-- Carousel Buttons Next/Prev -->
                        <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                        <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <style>
        /**About us */
        .rounded-circle {
            border-radius: 50% !important;
        }

        img {
            max-width: 100%;
            height: auto;
            vertical-align: top;
        }

        .sub-info {
            font-weight: 600;
            font-family: 'Poppins', sans-serif;
            color: #004975;
        }

        .display-30 {
            font-size: 0.9rem;
        }

        /**End of about us */

        /*Begin etape */

        /*timeline*/

        a {
            text-decoration: none
        }

        /*timeline4*/


        /*timeline2*/


        /******************* Timeline Demo - 4 *****************/

        .main-timeline2 {
            overflow: hidden;
            position: relative
        }

        .main-timeline2:before {
            content: "";
            width: 5px;
            height: 70%;
            background: #333;
            position: absolute;
            top: 70px;
            left: 50%;
            transform: translateX(-50%)
        }

        .main-timeline2 .timeline-content:before,
        .main-timeline2 .timeline:before {
            top: 50%;
            transform: translateY(-50%);
            content: ""
        }

        .main-timeline2 .timeline {
            width: 50%;
            padding-left: 100px;
            float: right;
            position: relative
        }

        .main-timeline2 .timeline:before {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #fff;
            border: 5px solid #333;
            position: absolute;
            left: -10px
        }

        .main-timeline2 .timeline-content {
            display: block;
            padding-left: 150px;
            position: relative
        }

        .main-timeline2 .timeline-content:before {
            width: 90px;
            height: 10px;
            border-top: 7px dotted #333;
            position: absolute;
            left: -92px
        }

        .main-timeline2 .etape {
            display: inline-block;
            width: 130px;
            height: 120px;
            line-height: 100px;
            border-radius: 50%;
            border: 10px solid #f54957;
            font-size: 30px;
            color: #f54957;
            text-align: center;
            box-shadow: inset 0 0 10px rgba(0, 0, 0, .4);
            position: absolute;
            top: 0;
            left: 0
        }

        .main-timeline2 .etape:before {
            content: "";
            border-left: 20px solid #f54957;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
            position: absolute;
            bottom: -13px;
            right: 0;
            transform: rotate(45deg)
        }

        .main-timeline2 .inner-content {
            padding: 20px 0
        }

        .main-timeline2 .title {
            font-size: 20px;
            color: #f54957;
            text-transform: uppercase;
            margin: 0 0 5px
        }

        .main-timeline2 .description {
            font-size: 14px;
            color: #6f6f6f;
            margin: 0 0 5px
        }

        .main-timeline2 .timeline:nth-child(2n) {
            padding: 0 100px 0 0
        }

        .main-timeline2 .timeline:nth-child(2n) .timeline-content:before,
        .main-timeline2 .timeline:nth-child(2n) .etape,
        .main-timeline2 .timeline:nth-child(2n):before {
            left: auto;
            right: -10px
        }

        .main-timeline2 .timeline:nth-child(2n) .timeline-content {
            padding: 0 150px 0 0
        }

        .main-timeline2 .timeline:nth-child(2n) .timeline-content:before {
            right: -92px
        }

        .main-timeline2 .timeline:nth-child(2n) .etape {
            right: 0
        }

        .main-timeline2 .timeline:nth-child(2n) .etape:before {
            right: auto;
            left: 0;
            border-left: none;
            border-right: 20px solid #f54957;
            transform: rotate(-45deg)
        }

        .main-timeline2 .timeline:nth-child(2) {
            margin-top: 110px
        }

        .main-timeline2 .timeline:nth-child(odd) {
            margin: -110px 0 0
        }

        .main-timeline2 .timeline:nth-child(even) {
            margin-bottom: 80px
        }

        .main-timeline2 .timeline:first-child,
        .main-timeline2 .timeline:last-child:nth-child(even) {
            margin: 0
        }

        .main-timeline2 .timeline:nth-child(2n) .etape {
            border-color: #1ebad0;
            color: #1ebad0
        }

        .main-timeline2 .timeline:nth-child(2) .etape:before {
            border-right-color: #1ebad0
        }

        .main-timeline2 .timeline:nth-child(2n) .title {
            color: #1ebad0
        }

        .main-timeline2 .timeline:nth-child(3n) .etape {
            border-color: #7cba01;
            color: #7cba01
        }

        .main-timeline2 .timeline:nth-child(3) .etape:before {
            border-left-color: #7cba01
        }

        .main-timeline2 .timeline:nth-child(3n) .title {
            color: #7cba01
        }

        .main-timeline2 .timeline:nth-child(4n) .etape {
            border-color: #f8781f;
            color: #f8781f
        }

        .main-timeline2 .timeline:nth-child(4) .etape:before {
            border-right-color: #f8781f
        }

        .main-timeline2 .timeline:nth-child(4n) .title {
            color: #f8781f
        }

        @media only screen and (max-width:1200px) {
            .main-timeline2 .etape {
                top: 50%;
                transform: translateY(-50%)
            }
        }

        @media only screen and (max-width:990px) {
            .main-timeline2 .timeline {
                padding-left: 75px
            }

            .main-timeline2 .timeline:nth-child(2n) {
                padding: 0 75px 0 0
            }

            .main-timeline2 .timeline-content {
                padding-left: 130px
            }

            .main-timeline2 .timeline:nth-child(2n) .timeline-content {
                padding: 0 130px 0 0
            }

            .main-timeline2 .timeline-content:before {
                width: 68px;
                left: -68px
            }

            .main-timeline2 .timeline:nth-child(2n) .timeline-content:before {
                right: -68px
            }
        }

        @media only screen and (max-width:767px) {
            .main-timeline2 {
                overflow: visible
            }

            .main-timeline2:before {
                height: 100%;
                top: 0;
                left: 0;
                transform: translateX(0)
            }

            .main-timeline2 .timeline:before,
            .main-timeline2 .timeline:nth-child(2n):before {
                top: 60px;
                left: -9px;
                transform: translateX(0)
            }

            .main-timeline2 .timeline,
            .main-timeline2 .timeline:nth-child(even),
            .main-timeline2 .timeline:nth-child(odd) {
                width: 100%;
                float: none;
                text-align: center;
                padding: 0;
                margin: 0 0 10px
            }

            .main-timeline2 .timeline-content,
            .main-timeline2 .timeline:nth-child(2n) .timeline-content {
                padding: 0
            }

            .main-timeline2 .timeline-content:before,
            .main-timeline2 .timeline:nth-child(2n) .timeline-content:before {
                display: none
            }

            .main-timeline2 .timeline:nth-child(2n) .etape,
            .main-timeline2 .etape {
                position: relative;
                transform: translateY(0)
            }

            .main-timeline2 .timeline:nth-child(2n) .etape:before,
            .main-timeline2 .etape:before {
                border: none;
                border-right: 20px solid #f54957;
                border-top: 10px solid transparent;
                border-bottom: 10px solid transparent;
                top: 50%;
                left: -23px;
                bottom: auto;
                right: auto;
                transform: rotate(0)
            }

            .main-timeline2 .timeline:nth-child(2n) .etape:before {
                border-right-color: #1ebad0
            }

            .main-timeline2 .timeline:nth-child(3n) .etape:before {
                border-right-color: #7cba01
            }

            .main-timeline2 .timeline:nth-child(4n) .etape:before {
                border-right-color: #f8781f
            }

            .main-timeline2 .inner-content {
                padding: 10px
            }
        }




        /*end timeline*/
        /*end timeline*/

        /**End etape */

        /* carousel */

        #testimonial {
            /* margin-top: 50px; */
            /* margin-bottom: 50px; */
            background-color: none;

        }

        #quote-carousel {
            padding: 0 10px 30px 10px;
            margin-top: 30px 0px 0px;
        }

        /* Control buttons  */
        #quote-carousel .carousel-control {
            background: none;
            color: #222;
            font-size: 2.3em;
            text-shadow: none;
        }

        /* Previous button  */
        #quote-carousel .carousel-control.left {
            left: -12px;
        }

        /* Next button  */
        #quote-carousel .carousel-control.right {
            right: -12px !important;
        }

        /* Changes the position of the indicators */
        #quote-carousel .carousel-indicators {
            right: 50%;
            top: auto;
            bottom: 0px;
            margin-right: -19px;
        }

        /* Changes the color of the indicators */
        #quote-carousel .carousel-indicators li {
            background: #c0c0c0;
        }

        #quote-carousel .carousel-indicators .active {
            background: #333333;
        }

        #quote-carousel img {
            width: 250px;
            height: 100px
        }

        /* End carousel */

        .item blockquote {
            border-left: none;
            margin: 0;
        }

        .item blockquote img {
            margin-bottom: 10px;
        }

        .item blockquote p:before {
            content: "\f10d";
            font-family: 'Fontawesome';
            float: left;
            margin-right: 10px;
        }



        /**
  MEDIA QUERIES
*/

        /* Small devices (tablets, 768px and up) */
        @media (min-width: 768px) {
            #quote-carousel {
                margin-bottom: 0;
                padding: 0 40px 30px 40px;
                margin-top: 30px;
            }

        }

        /* Small devices (tablets, up to 768px) */
        @media (max-width: 768px) {

            /* Make the indicators larger for easier clicking with fingers/thumb on mobile */

            #quote-carousel .carousel-indicators {
                bottom: -20px !important;
            }

            #quote-carousel .carousel-indicators li {
                display: inline-block;
                margin: 0px 5px;
                width: 15px;
                height: 15px;
            }

            #quote-carousel .carousel-indicators li.active {
                margin: 0px 5px;
                width: 20px;
                height: 20px;
            }
        }

        /*****************



    /* Title */


        @charset "utf-8";
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900|Open Sans:400,600,800');

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        div,
        input,
        p,
        a {
            font-family: "Open Sans";
            margin: 0px;
        }

        a,
        a:hover,
        a:focus {
            color: inherit;
        }


        /*Les derniere cards */

        /**End  */
    </style>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>