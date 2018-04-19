<?php
require('function.php');
?>
<!Doctype HTML>
<html lang="ro">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="css/bootstrap-material-design.min.css" />
    <link rel="stylesheet" href="css/fa-svg-with-js.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="js/jquery.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?onload=Chap&render=explicit" defer></script>
    <title> NFS World - SOAPBOX </title>
  </head>
  <body class="bg-dark bg-green-ish">
    <nav class="navbar navbar-expand-lg navbar-dark bg-navbar">
      <li class="navbar-brand">
        <i class="fas fa-car green-color"></i>
      </li>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pexplained.php">Parts - Explained</a>
          </li>
        </ul>
      </div>
      <ul class="navbar-nav">
        <li><i class="fas fa-car green-color" data-toggle="modal" data-target="#Authentification"></i></li>
      </ul>
    </nav>
<!-- Modal -->
<div class="modal fade" id="Authentification" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <form method="POST" action="controller.php">
        <div class="header-modal modal-header green-color text-center">
          <h5 class="modal-title green-color" >Authentification?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body body-modal green-color">
          <div class="form-group">
            <label class="bmd-label-floating green-color">Your Username</label>
            <input type="text" class="form-control" name="user" style="color: whitesmoke;">
            <span class="bmd-help">Please provide your username.</span>
          </div>
          <div class="form-group">
            <label class="bmd-label-floating green-color">Your Password</label>
            <input type="password" class="form-control" name="pass" style="color: whitesmoke;">
            <span class="bmd-help">Please provide your password.</span>
          </div>
          <div class="text-center">
            <div id="capca1"></div>
          </div>
        </div>
        <div class="modal-footer footer-modal">
          <button type="submit" name="action" value="login" class="btn btn-raised btn-primary">Login</button>
        </div>
      </form>
    </div>
  </div>
</div>
<script>
  var recaptcha1;
  var recaptcha2;
  var Chap = function() {
    if ( $( '#capca1' ).length ) {
      recaptcha1 = grecaptcha.render('capca1', {
        'sitekey' : '6LeEXlMUAAAAAD6OJTLSQze3tcfMFTDG5RDQzau2',
        'theme' : 'light'
      });
   }
    if ( $( '#capca2' ).length ) {
      recaptcha2 = grecaptcha.render('capca2', {
        'sitekey' : '6LeEXlMUAAAAAD6OJTLSQze3tcfMFTDG5RDQzau2',
        'theme' : 'light'
      });
    }
  };
</script>
<script>
  PleaseRotateOptions = {
    startOnPageLoad: true,
    zIndex: 99999,
    onlyMobile: true,
    allowClickBypass: false,
    message: "Vă rog rotiți telefonul în modul Landscape",
    subMessage: "Din păcate nu vă pot lasa să conținuați până nu rotiți device-ul."
  };
</script>