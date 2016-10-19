<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>WebPyRobot - Accueil</title>

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
    <div class="container">
      <div class="section">
        <div class="row">

          <?php include_once "static/sideNav.php"; ?>

          <div class="col s12 m9 l10 z-depth-2 pad">
            <div class="row z-depth-1 section padding-section">
              <div class="col s12 m6 l6 pad">
                <h5>Introduction</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam leo elit, tincidunt sit amet fermentum et, suscipit non quam. Praesent malesuada vitae odio a ultricies. Mauris eu pellentesque est. Curabitur efficitur scelerisque tempus.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam leo elit, tincidunt sit amet fermentum et, suscipit non quam. Praesent malesuada vitae odio a ultricies. Mauris eu pellentesque est. Curabitur efficitur scelerisque tempus.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam leo elit, tincidunt sit amet fermentum et, suscipit non quam. Praesent malesuada vitae odio a ultricies. Mauris eu pellentesque est. Curabitur efficitur scelerisque tempus.</p>
              </div>
              <div class="col s12 m6 l6 pad">
                <div class="row z-depth-1 section padding-section">
                  <div class="col s6 m6 l6 pad">
                    <a class="waves-effect waves-light btn-large">Battle</a>
                  </div>
                  <div class="col s6 m6 l6 pad">
                    <h6>Agression Mode</h6>
                    <div class="switch">
                      <label>
                        Off
                        <input type="checkbox">
                        <span class="lever"></span>
                        On
                      </label>
                    </div>
                  </div>
                </div>
                <div class="row z-depth-1 section padding-section">
                  <div class="col s12 m6 l6 pad">
                    <h5>Statistique</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam leo elit, tincidunt sit amet fermentum et, suscipit non quam. Praesent malesuada vitae odio a ultricies. Mauris eu pellentesque est. Curabitur efficitur scelerisque tempus.</p>
                  </div>
                  <div class="col s12 m6 l6 pad">
                    <h5>Caractéristiques</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam leo elit, tincidunt sit amet fermentum et, suscipit non quam. Praesent malesuada vitae odio a ultricies. Mauris eu pellentesque est. Curabitur efficitur scelerisque tempus.</p>
                  </div>
                </div>
                
              </div>
            </div>
            <div class="row z-depth-1 section padding-section">
              <div class="col s12 m8 l8 pad">
                <h5>Equipement</h5>
                <img class="responsive-img equipement-icon" src="img/no_img.jpg">
                <img class="responsive-img equipement-icon" src="img/no_img.jpg">
                <img class="responsive-img equipement-icon" src="img/no_img.jpg">
                <img class="responsive-img equipement-icon" src="img/no_img.jpg">
              </div>
              <div class="col s12 m4 l4 pad">
                <h5>Code IA</h5>
                <div class="valign-wrapper">
                  <i class="large material-icons">insert_drive_file</i>
                  <span>IA #1</span>
                </div>
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
