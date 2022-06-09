<!doctype html>
<html lang="en">

<head>
    <title>Plateforme Opportunit&eacute;s|login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="shortcut icon" type="image/png" href="<?php echo base_url('assets/img/icon.png'); ?>" />

    <link rel="stylesheet" href="<?php echo base_url('css/login-form/style.css') ?>">

</head>

<body class="img js-fullheight" style="background-image: url(<?php echo base_url('assets/images/ugb-register.jpg'); ?>);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 data-aos="fade-up" class="heading-section">La plateforme d'opportunité</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">Connexion</h3>
                        <form action="<?php echo base_url(); ?>/user/login" class="signin-form" method="post" id="loginForm">
                            <div class="form-group" data-aos="fade-up-right">
                                <input type="email" class="form-control" placeholder="login@example.com" name="email">
                            </div>
                            <div class="form-group" data-aos="fade-up-left">
                                <input id="password-field" type="password" class="form-control" placeholder="Password" name="password">
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group" data-aos="fade-down">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Se connecter</button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">Remember Me
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="#" style="color: #fff">Mot de passe oublié ?</a>
                                </div>
                            </div>
                        </form>

                        <!--Les erreurs-->
                        <?php if (isset($validation)) : ?>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="alert alert-danger" role="alert">
                                        <?= $validation->listErrors() ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <!--end-->

                        <p class="w-100 text-center">&mdash; Ou &mdash;</p>
                        <div class="social d-flex text-center">
                            <a href="<?php echo base_url(); ?>/register" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Créer un compte</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="<?php echo base_url('js/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?php echo base_url('js/jquery.validate.js') ?>"></script>
    <script src="<?php echo base_url('js/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('js/main.js') ?>"></script>
    <script>
        $().ready(function() {
            $("#loginForm").validate({
                rules: {
                    email: {
                        required: true,
                        email: true,
                    },
                    password: {
                        required: true,
                        minlength: 8
                    }
                },
                messages: {
                    email: {
                        required: "Veillez entrer votre login",
                        email: "Veillez saisir une adresse email correcte"
                    },
                    password: {
                        required: "Veillez entrer un mot de passe",
                        minlength: "Votre mot de passe doit contenir au moins 8 caracteres"
                    }
                }

            });
        });
    </script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>