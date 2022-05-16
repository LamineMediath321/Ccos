<div class="clearfix"></div>
<div class="banner" style="background-image:url(<?php echo base_url('assets/img/bg.jpg'); ?>)">
    <div class="container">
        <div class="banner-caption">
            <div class="col-md-12 col-sm-12 banner-text">
                <h2>La plateforme d'accompagnement des &eacute;tudiants de
                    l'Universit&eacute; Gaston Berger dans leur insertion professionnelle</h2>

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
            <div class="main-heading">
                <h2>Parcourir les offres par <span>Domaine</span></h2>
            </div>
        </div>
        <div class="row">

            <?php foreach ($fieldOffersCount as $fieldOffers) : ?>
                <div class="col-md-3 col-sm-6">
                    <a href="<?php echo base_url(); ?>/domaine_offres/<?= $fieldOffers['idDomaine'] ?>">
                        <div class="category-box" data-aos="fade-up">
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

<section class="testimonial" id="testimonial">

    <div class="container">
        <div class="row">
            <div class="main-heading">
                <p>Temoignages des alumni</p>

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
                                        <img class="img-circle" src="<?php echo base_url('assets/images/camp.jpg'); ?>" style="width: 100px;height:100px;">
                                    </div>
                                    <div class="col-sm-9">
                                        <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit!</p>
                                        <small>Ndeye Khady </small>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!-- Quote 2 -->
                        <div class="item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-3 text-center">
                                        <img class="img-circle" src="<?php echo base_url('assets/images/1610063964_fe827aef569babbce435.jpg'); ?>" style="width: 100px;height:100px;">
                                    </div>
                                    <div class="col-sm-9">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor nec lacus ut tempor. Mauris.</p>
                                        <small>David Diop</small>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!-- Quote 3 -->
                        <div class="item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-3 text-center">
                                        <img class="img-circle" src="<?php echo base_url('assets/images/1610066541_84780f7119c969561de5.jpg'); ?>" style="width: 100px;height:100px;">
                                    </div>
                                    <div class="col-sm-9">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in arcu blandit, eget pretium nisl accumsan. Sed ultricies commodo tortor, eu pretium mauris.</p>
                                        <small>Someone famous</small>
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

<!-- <section class="testimonial" id="testimonial">
    <div class="container">
        <div class="row">
            <div class="main-heading">
                <p>Temoignages des alumni</p>

                <h2>Parcours <span>inspirants</span></h2>
            </div>
        </div>
        <div class="row">
            <div id="client-testimonial-slider" class="owl-carousel">
                <div class="client-testimonial">
                    <div class="pic"><img src="<?php echo base_url('assets/images/avatar.png'); ?>" alt=""></div>
                    <p class="client-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor et dolore magna aliqua.</p>

                    <h3 class="client-testimonial-title">Amadou DIOP</h3>

                </div>
                <div class="client-testimonial">
                    <div class="pic"><img src="<?php echo base_url('assets/images/avatar.png'); ?>" alt=""></div>
                    <p class="client-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor et dolore magna aliqua.</p>

                    <h3 class="client-testimonial-title">Fatou SARR</h3>

                </div>
                <div class="client-testimonial">
                    <div class="pic"><img src="<?php echo base_url('assets/images/avatar.png'); ?>" alt=""></div>
                    <p class="client-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor et dolore magna aliqua.</p>

                    <h3 class="client-testimonial-title">Aicha FALL</h3>

                </div>
                <div class="client-testimonial">
                    <div class="pic"><img src="<?php echo base_url('assets/images/avatar.png'); ?>" alt=""></div>
                    <p class="client-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor et dolore magna aliqua.</p>

                    <h3 class="client-testimonial-title">David NGOM</h3>

                </div>
            </div>
        </div>
    </div>
</section> -->

<header>
    <div class="container text-center">

        <!-- Logo -->
        <div class="logo">
            <p><?= $offersCount ?> Offres</p>
            <h1><b>Nouvelles <span>Offres</span></b></h1>
        </div>

        <h1>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h1>

    </div>
</header>

<div class="container">
    <div class="row">
        <?php if ($offers_) {
            foreach ($offers_ as $offer) {
        ?>
                <div class="col-md-4">
                    <h4 class="text-center"><strong><?= $offer['nomEntreprise'] ?></strong></h4>
                    <hr>
                    <div class="profile-card-4 text-center"><img src="http://envato.jayasankarkr.in/code/profile/assets/img/profile-4.jpg" class="img img-responsive">
                        <div class="profile-content">
                            <div class="profile-name">
                                <a href="<?php echo base_url(); ?>/offre/<?= $offer['idOpportunite'] ?>">
                                    <?= $offer['title'] ?>
                                </a>
                                <div class="brows-job-type"><span class="freelanc"><?= $offer['contractType'] ?></span></div>
                            </div>
                            <div class="profile-description">
                                <p><span><?= $offer['nomEntreprise'] ?></span></p>
                            </div>
                            <div class="row">
                                <div class="col-xs-4 h-auto">
                                    <div class="profile-overview">
                                        <h4><strong>LIEU</strong></h4>
                                        <h5>
                                            <i class="fa fa-map-marker h"></i><?= $offer['nom'] ?>
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-xs-4">

                                </div>
                                <div class="col-xs-4">
                                    <div class="profile-overview">
                                        <h4><strong>LIEU</strong></h4>
                                        <p><span class="brows-job-sallery"><i class="fa fa-hourglass-half"></i>
                                                <?php
                                                setlocale(LC_TIME, 'fr_FR.utf8', 'french', 'French_France.1252', 'fr_FR.ISO8859-1', 'fra');
                                                echo strftime("%d %b %G", strtotime($offer['dateCloture']));
                                                ?>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php }
        } ?>
    </div>

</div>

<section>
    <div class="container">
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
                    <div class="col-md-3 col-sm-6">
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
                <div class="text-center"><a href="<?php echo base_url(); ?>/offres" class="btn btn-primary">Voir plus</a></div>
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>



<style>
    /* carousel */
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
        margin-top: 30px;
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
    - Header -
*****************/
    header {
        position: relative;
        left: 0;
        top: 0;
        width: 100%;
        min-height: 120px;
        padding: 50px 0;
        color: #fff;
        background: #383838 url(https://www.athenadesignstudio.com/plugins/switch/images/bg.jpg) no-repeat center center;
        margin-bottom: 30px
    }

    /* Logo */
    header .logo {
        clear: both;
        display: block;
        text-align: center;
        padding-bottom: 10px;
    }

    /* Title */
    header h1 {
        font-weight: 300;
        font-size: 24px;
        color: #eee;
        letter-spacing: 2px;
        text-align: center;
        text-transform: uppercase;
        margin: 0 !important;
        padding-bottom: 25px;
    }

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

    body {
        background-color: #F1F2F3;
    }

    .container-fluid,
    .container {
        max-width: 1200px;
    }

    .card-container {
        padding: 100px 0px;
        -webkit-perspective: 1000;
        perspective: 1000;
    }

    .profile-card-1 {
        background-color: #FFF;
        border-radius: 10px;
        box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
        background-image: url(../img/profile-bg-1.jpg);
        background-position: center;
        padding-top: 100px;
        overflow: hidden;
        position: relative;
        margin: 10px auto;
        cursor: pointer;
        max-width: 300px;
    }

    .profile-card-1 .profile-content {
        position: relative;
        background-color: #FFF;
        padding: 70px 20px 20px 20px;
        text-align: center;
    }

    .profile-card-1 .profile-img {
        position: absolute;
        height: 100px;
        left: 0px;
        right: 0px;
        z-index: 10;
        top: -50px;
        transition: all 0.25s linear;
        transform-style: preserve-3d;
    }

    .profile-card-1 .profile-img img {
        height: 100px;
        margin: auto;
        border-radius: 50%;
        border: 5px solid #FFF;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    }

    .profile-card-1 .profile-name {
        font-size: 18px;
        font-weight: bold;
        color: #021830;
    }

    .profile-card-1 .profile-address {
        color: #777;
        font-size: 12px;
        margin: 0px 0px 15px 0px;
    }

    .profile-card-1 .profile-description {
        font-size: 13px;
        padding: 5px 10px;
        color: #777;
    }

    .profile-card-1 .profile-icons .fa {
        margin: 5px;
        color: #777;
    }

    .profile-card-1:hover {
        box-shadow: 0px 0px 50px rgba(0, 0, 0, 0.1);
    }

    .profile-card-1:hover .profile-img {
        transform: rotateY(180deg);
    }

    .profile-card-2 {
        max-width: 300px;
        background-color: #FFF;
        box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
        background-position: center;
        overflow: hidden;
        position: relative;
        margin: 10px auto;
        cursor: pointer;
        border-radius: 10px;
    }

    .profile-card-2 img {
        transition: all linear 0.25s;
    }

    .profile-card-2 .profile-name {
        position: absolute;
        left: 30px;
        bottom: 70px;
        font-size: 30px;
        color: #FFF;
        text-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
        font-weight: bold;
        transition: all linear 0.25s;
    }

    .profile-card-2 .profile-icons {
        position: absolute;
        bottom: 30px;
        right: 30px;
        color: #FFF;
        transition: all linear 0.25s;
    }

    .profile-card-2 .profile-username {
        position: absolute;
        bottom: 50px;
        left: 30px;
        color: #FFF;
        font-size: 13px;
        transition: all linear 0.25s;
    }

    .profile-card-2 .profile-icons .fa {
        margin: 5px;
    }

    .profile-card-2:hover img {
        filter: grayscale(100%);
    }

    .profile-card-2:hover .profile-name {
        bottom: 80px;
    }

    .profile-card-2:hover .profile-username {
        bottom: 60px;
    }

    .profile-card-2:hover .profile-icons {
        right: 40px;
    }

    .profile-card-3 {
        background-color: #FFF;
        border-radius: 5px;
        box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        position: relative;
        margin: 10px auto;
        cursor: pointer;
        padding: 25px 15px;
    }

    .profile-card-3 .profile-name {
        font-weight: bold;
        color: #21304e;
    }

    .profile-card-3 .profile-location {
        color: #999;
        font-size: 13px;
        font-weight: 600;
    }

    .profile-card-3 img {
        height: 100px;
        width: 100px;
        object-fit: cover;
        margin: 10px auto;
        border-radius: 50%;
        transition: all linear 0.25s;
    }

    .profile-card-3 .profile-description {
        font-size: 13px;
        color: #777;
        padding: 10px;
    }

    .profile-card-3 .profile-icons {
        margin: 15px 0px;
    }

    .profile-card-3 .profile-icons .fa {
        color: #fe455a;
        margin: 0px 5px;
    }

    .profile-card-3:hover img {
        height: 110px;
        width: 110px;
        margin: 5px auto;
    }

    .profile-card-4 {
        max-width: 300px;
        background-color: #FFF;
        border-radius: 5px;
        box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        position: relative;
        margin: 10px auto;
        cursor: pointer;
    }

    .profile-card-4 img {
        transition: all 0.25s linear;
    }

    .profile-card-4 .profile-content {
        position: relative;
        padding: 15px;
        background-color: #FFF;
    }

    .profile-card-4 .profile-name {
        font-weight: bold;
        position: absolute;
        left: 0px;
        right: 0px;
        top: -70px;
        color: #FFF;
        font-size: 17px;
    }

    .profile-card-4 .profile-name p {
        font-weight: 600;
        font-size: 13px;
        letter-spacing: 1.5px;
    }

    .profile-card-4 .profile-description {
        color: #777;
        font-size: 12px;
        padding: 10px;
    }

    .profile-card-4 .profile-overview {
        padding: 15px 0px;
    }

    .profile-card-4 .profile-overview p {
        font-size: 10px;
        font-weight: 600;
        color: #777;
    }

    .profile-card-4 .profile-overview h4 {
        color: #273751;
        font-weight: bold;
    }

    .profile-card-4 .profile-content::before {
        content: "";
        position: absolute;
        height: 20px;
        top: -10px;
        left: 0px;
        right: 0px;
        background-color: #FFF;
        z-index: 0;
        transform: skewY(3deg);
    }

    .profile-card-4:hover img {
        transform: rotate(5deg) scale(1.1, 1.1);
        filter: brightness(110%);
    }

    .profile-card-5 {
        max-width: 300px;
        background-color: #FFF;
        border-radius: 5px;
        box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        position: relative;
        margin: 10px auto;
        cursor: pointer;
        padding: 50px 15px 25px 15px;
    }

    .profile-card-5 img {
        height: 100px;
        width: 100px;
        object-fit: cover;
        margin: 10px auto;
        border-radius: 50%;
        transition: all linear 0.25s;
        position: relative;
    }

    .profile-card-5::before {
        content: "";
        position: absolute;
        top: -60px;
        right: 0px;
        left: 0px;
        height: 170px;
        background-color: #4fb96e;
        transform: skewY(-20deg);
    }

    .profile-card-5 .profile-name {
        padding-top: 15px;
        font-weight: bold;
        color: #333;
    }

    .profile-card-5 .profile-designation {
        font-size: 13px;
        color: #777;
    }

    .profile-card-3 .profile-location {
        color: #999;
        font-size: 13px;
        font-weight: 600;
    }

    .profile-card-5 .profile-description {
        font-size: 13px;
        color: #777;
        padding: 10px;
    }

    .profile-card-5 .profile-overview {
        padding: 15px 0px;
    }

    .profile-card-5 .profile-overview p {
        color: #777;
        font-size: 13px;
    }

    .profile-card-5 .profile-overview h2 {
        font-weight: bold;
        color: #1e2832;
    }

    .profile-card-5 .profile-icons .fa {
        margin: 7px;
        color: #4fb96e;
    }

    .profile-card-5:hover img {
        transform: rotate(-5deg);
    }

    .profile-card-6 {
        max-width: 300px;
        background-color: #FFF;
        border-radius: 5px;
        box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        position: relative;
        margin: 10px auto;
        cursor: pointer;
    }

    .profile-card-6 img {
        transition: all 0.15s linear;
    }

    .profile-card-6 .profile-name {
        position: absolute;
        top: 10px;
        left: 10px;
        font-size: 25px;
        font-weight: bold;
        color: #FFF;
        padding: 15px 20px;
        background: linear-gradient(140deg, rgba(0, 0, 0, 0.4) 50%, rgba(255, 255, 0, 0) 50%);
        transition: all 0.15s linear;
    }

    .profile-card-6 .profile-position {
        position: absolute;
        color: rgba(255, 255, 255, 0.4);
        left: 30px;
        top: 100px;
        transition: all 0.15s linear;
    }

    .profile-card-6 .profile-overview {
        position: absolute;
        bottom: 0px;
        left: 0px;
        right: 0px;
        background: linear-gradient(0deg, rgba(0, 0, 0, 0.4) 50%, rgba(255, 255, 0, 0));
        color: #FFF;
        padding: 50px 0px 20px 0px;
        transition: all 0.15s linear;
    }

    .profile-card-6 .profile-overview h3 {
        font-weight: bold;
    }

    .profile-card-6 .profile-overview p {
        color: rgba(255, 255, 255, 0.7);
    }

    .profile-card-6:hover img {
        filter: brightness(80%);
    }

    .profile-card-6:hover .profile-name {
        padding-left: 25px;
        padding-top: 20px;
    }

    .profile-card-6:hover .profile-position {
        left: 40px;
    }

    .profile-card-6:hover .profile-overview {
        padding-bottom: 25px;
    }

    .profile-card-7 {
        background-color: #FFF;
        border-radius: 5px;
        box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        position: relative;
        margin: 10px auto;
        cursor: pointer;
    }

    .profile-card-7 .profile-content {
        padding: 60px 30px 30px 30px;
        background-color: #FFF;
        position: relative;
    }

    .profile-card-7 .profile-content img {
        position: absolute;
        height: 80px;
        width: 80px;
        border-radius: 50%;
        top: -40px;
        border: 5px solid #FFF;
    }

    .profile-card-7 .profile-content .profile-name {
        position: absolute;
        font-size: 17px;
        font-weight: bold;
        top: -35px;
        left: 125px;
        color: #FFF;
    }

    .profile-card-7 .profile-overview {
        padding: 5px 0px;
    }

    .profile-card-7 .profile-overview p {
        color: #777;
        font-size: 11px;
        font-weight: 600;
    }

    .profile-card-7 .profile-overview h5 {
        color: #142437;
        font-weight: bold;
    }

    .profile-card-8 {
        background: linear-gradient(#09121c, #36445a);
        border-radius: 5px;
        box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        position: relative;
        margin: 10px auto;
        cursor: pointer;
        transition: all 0.25s linear;
    }

    .profile-card-8 .profile-name {
        position: absolute;
        left: 0px;
        right: 0px;
        top: 25px;
        color: #58d683;
        font-size: 17px;
        font-weight: bold;
    }

    .profile-card-8 .profile-designation {
        position: absolute;
        left: 0px;
        right: 0px;
        top: 50px;
        color: #FFF;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: 1px;
    }

    .profile-card-8 .profile-icons {
        position: absolute;
        left: 0px;
        right: 0px;
        top: 80px;
        color: rgba(255, 255, 255, 0.7);
    }

    .profile-card-8 .profile-icons .fa {
        margin: 5px;
    }

    .profile-card-8:hover {
        transform: scale(1.05, 1.05);
    }

    .profile-card-9 {
        border-radius: 10px;
        box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        position: relative;
        margin: 10px auto;
        cursor: pointer;
        padding: 30px 15px;
        background-color: #FFF;
        transition: all 0.25s linear;
    }

    .profile-card-9 img {
        height: 120px;
        width: 120px;
        border-radius: 50%;
        margin: 10px auto;
    }

    .profile-card-9 .profile-name {
        font-size: 15px;
        color: #3249b9;
        font-weight: 600;
    }

    .profile-card-9 .profile-designation {
        font-size: 13px;
        color: #777;
    }

    .profile-card-9 .profile-description {
        padding: 10px;
        font-size: 13px;
        color: #777;
        margin: 15px 0px;
        background-color: #F1F2F3;
        border-radius: 5px;
    }

    .profile-card-9 a {
        padding: 10px 15px;
        background-color: #3249b9;
        color: #FFF;
        font-size: 11px;
        border-radius: 25px;
    }

    .profile-card-9:hover {
        transform: scale(1.05, 1.05);
    }

    .profile-card-10 {
        border-radius: 5px;
        box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        position: relative;
        margin: 10px auto;
        cursor: pointer;
        padding: 30px 15px;
        background-color: #1f2124;
        color: #EEE;
    }

    .profile-card-10 img {
        margin: 10px auto;
        width: 100px;
        height: 100px;
        border-radius: 50%;
        border: 10px solid transparent;
        box-shadow: 0px 0px 0px 2px #64c17b;
        transition: all 0.25s linear;
    }

    .profile-card-10 .profile-name {
        color: #FFF;
        font-weight: bold;
        font-size: 17px;
    }

    .profile-card-10 .profile-location {
        font-size: 13px;
        opacity: 0.7;
    }

    .profile-card-10 .profile-description {
        padding: 10px;
        font-size: 13px;
    }

    .profile-card-10 .profile-icons .fa {
        color: #ffc75e;
        margin: 10px;
    }

    .profile-card-10:hover img {
        transform: scale(1.1);
    }
</style>