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
        <div class="col-md-8 col-lg-6">
          <div class="login-wrap p-0">
            <h3 class="mb-6 text-center">Inscription</h3>
            <form action="<?php echo base_url(); ?>/register" method="post" id="registerForm">
              <div class="row" data-aos="fade-down-right">
                <div class="form-group col-12 col-sm-6">
                  <input type="text" placeholder="Pr&eacute;nom(s)" class="form-control" name="firstname" id="firstname" value="<?= set_value('firstname') ?>">
                </div>
                <div class="form-group first col-12 col-sm-6">
                  <input required type="text" class="form-control" placeholder="NOM" name="lastname" id="lastname" value="<?= set_value('lastname') ?>">
                </div>
              </div>
              <div class="form-group last mb-3" data-aos="fade-right">
                <input type="email" class="form-control" placeholder="Email" name="email" id="email" value="<?= set_value('email') ?>">
              </div>
              <div class="row" data-aos="fade-left">
                <div class="form-group last mb-3 col-12 col-sm-7">
                  <select name="ufr" value="" class="form-control">
                    <option value="">UFR</option>
                    <?php if (isset($ufrs)) :
                      foreach ($ufrs as $ufr) :  ?>
                        <option value="<?= $ufr['idUfr']  ?>"><?= $ufr['intitule'] ?></option>
                    <?php endforeach;
                    endif;
                    ?>
                  </select>
                </div>
                <div class="col-12 col-sm-5">
                  <div class="form-group">
                    <select id="inputState" name="profil" class="form-control">
                      <option value="">Vous etes...</option>
                      <?php if (isset($roles)) :
                        foreach ($roles as $role) :  ?>
                          <option value="<?= $role['idRole']  ?>"><?= strtoupper($role['intitule']) ?></option>
                      <?php endforeach;
                      endif;
                      ?>
                    </select>
                  </div>
                </div>
              </div>

              <div class="form-group last mb-3" data-aos="fade-down">
                <input type="text" class="form-control" placeholder="Code &eacute;tudiant" name="code_etudiant" id="code_etudiant" value="<?= set_value('code_etudiant') ?>">
              </div>

              <div class="row" data-aos="fade-right">
                <div class="form-group col-12 col-sm-5">
                  <input type="password" placeholder="Mot de passe" class="form-control" name="password" id="password" value="">
                </div>
                <div class="form-group first col-12 col-sm-7">
                  <input type="password" placeholder="Confirmation mot de passe" class="form-control" name="password_confirm" id="password_confirm" value="">
                </div>
              </div>
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
              <div class="d-flex mb-5 align-items-center">
                <a href="<?php echo base_url(); ?>/connexion" style="text-decoration: none;">Vous avez d&eacute;j&agrave; un compte ?</a>
              </div>
              <input type="submit" value="S'inscrire" class="btn btn-block btn-primary">

            </form>
            <div class="social d-flex text-center">
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
      $("#registerForm").validate({
        rules: {
          firstname: {
            required: true,
            minlength: 3
          },
          lastname: {
            required: true,
            minlength: 2
          },
          email: {
            required: true,
            email: true,
          },
          password: {
            required: true,
            minlength: 8
          },
          password_confirm: {
            required: true,
            minlength: 8,
            equalTo: "#password"
          },
          ufr: "required",
          profil: "required"
        },
        messages: {
          firstname: {
            required: "Veuillez saisir votre prenom",
            minlength: "Votre prenom doit contenir au moins 3 caracteres"
          },
          lastname: {
            required: "Veuillez saisir votre nom de famille",
            minlength: "Votre nom doit contenir au moins 2 caracteres"
          },
          email: {
            required: "Veuillez entrer votre login",
            email: "Veuillez saisir une adresse email correcte"
          },
          password: {
            required: "Veuillez fournir un mot de passe",
            minlength: "Votre mot de passe doit contenir au moins 8 caracteres"
          },
          password_confirm: {
            required: "Veuillez fournir un mot de passe",
            minlength: "Votre mot de passe doit contenir au moins 8 caractères",
            equalTo: "Entrez le même mot de passe"
          },
          ufr: "Veuillez choisr votre ufr",
          profil: "Veuillez precisez votre profil"
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