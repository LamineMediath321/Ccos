    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets\css\acceuil.css') ?>">

    <div class="clearfix"></div>
    <div class="banner" style="background-image:url(<?php echo base_url('assets/img/bg.jpg'); ?>)">
        <div class="container">
            <div class="banner-caption">
                <div class="col-md-12 col-sm-12 banner-text">
                    <h3 id="titre" data-aos="fade-in">La plateforme d'accompagnement des &eacute;tudiants de
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
                <div class="main-heading">
                    <h2>Parcourir les offres par <span>Domaine</span></h2>
                </div>
            </div>
            <div class="row">

                <?php foreach ($fieldOffersCount as $fieldOffers) : ?>
                    <div class="col-md-3 col-sm-6">
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
            <div class="row" data-aos="fade-up">
                <div class="main-heading">
                    <p><?= $offersCount ?> Offres</p>

                    <h2>Nouvelles <span>Offres</span></h2>
                </div>
            </div>
            <div class="row extra-mrg">
                <?php if ($offers) :
                    foreach ($offers as $offer) :
                ?>
                        <div class="col-md-4 col-sm-6">
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
                            <a href="#" class="timeline-content" data-aos="fade-left">
                                <span class="etape">Etape 1</span>
                                <div class="inner-content">
                                    <h3 class="title">Activer votre compte institutionnel</h3>
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ex odio,
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="timeline" data-aos="fade-right">
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
                            <a href="#" class="timeline-content" data-aos="fade-left">
                                <span class="etape">Etape 3</span>
                                <div class="inner-content">
                                    <h3 class="title">Remplir les informations suplementaires & creer votre cv</h3>
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ex odio, rhoncus sit amet tincidunt eu,
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="timeline" data-aos="fade-right">
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


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="<?php echo base_url('assets\js\typewriter.js') ?>"></script>