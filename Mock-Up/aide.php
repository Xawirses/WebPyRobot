<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>WebPyRobot - Aide</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  </head>
  <body>
    <div class="navbar-fixed">
      <nav class="light-blue lighten-1" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="accueil.php" class="brand-logo">Logo</a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#">Combat<span class="new badge">2</span></a></li>
            <li><a href="#"><i class="material-icons left">attach_money</i>300</a></li>
            <li><a href="#"><i class="material-icons left">account_box</i>John Doe</a></li>
            <li><a href="#"><i class="material-icons">settings</i></a></li>
            <li><a href="#"><i class="material-icons">power_settings_new</i></a></li>
          </ul>

          <ul id="nav-mobile" class="side-nav">
            <li>
              <div class="userView">
                <img class="background" src="img/galaxy.jpg">
                <a href="#!name"><span class="white-text name">John Doe</span></a>
                <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
              </div>
            </li>
            <li><a class="waves-effect" href="#">Combat<span class="new badge">2</span></a></li>
            <li><a class="waves-effect" href="#"><i class="material-icons left">attach_money</i>300</a></li>
            <li><a class="waves-effect" href="#"><i class="material-icons left">settings</i>Paramêtre</a></li>
            <li><a class="waves-effect" href="#"><i class="material-icons left">power_settings_new</i>Déconecter</a></li>
            <li><div class="divider"></div></li>
            <?php include_once "static/mobilNav_Link.php"; ?>

          </ul>
          <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
      </nav>
    </div>
    <div class="container" id="containerHelp">
      <div class="section">
        <div class="row">

          <?php include_once "static/sideNav.php"; ?>


          <div class="col s12 m9 l10 pad">
            <div class="row z-depth-1 section padding-section" >
              <div class="margTop col s12 m6 l6 center-align">
                <a class="waves-effect waves-light btn-large">Documentation</a>
              </div>
              <div class="margTop col s12 m6 l6 center-align ">
                <a class="waves-effect waves-light btn-large">Tutoriel</a>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include_once "static/footer.php"; ?>
    
    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>

    </body>
</html>
