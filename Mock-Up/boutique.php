<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>WebPyRobot - Boutique</title>

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

          <div class="col s12 m9 l10 pad">
            <div class="row z-depth-1 section padding-section">
              <div class="pad col s12 m8 l8 ">
                <div class="col s12">
                  <ul class="tabs">
                    <li class="tab col s4"><a href="#Canon" class="active">Canons</a></li>
                    <li class="tab col s4"><a href="#Blindage">Blindages</a></li>
                    <li class="tab col s4"><a href="#Chenille">Chenilles</a></li>
                    <li class="tab col s4"><a href="#info">Système</a></li>
                  </ul>
                </div>
                <div id="Canon" class="col s12 row">
                  
                  <div class="card-panel hoverable col s4 grey lighten-5 ">
                    <div class="row">
                      <div class="col s12 center-align"><img src="img/no_img.jpg" class="pad equipement-icon responsive-img"></div>
                      <div class="col s12 center-align"><span class="black-text">Canon #1</span></div>
                    </div>
                  </div>

                  <div class="card-panel hoverable col s4 grey lighten-5 ">
                    <div class="row">
                      <div class="col s12 center-align"><img src="img/no_img.jpg" class="pad equipement-icon responsive-img"></div>
                      <div class="col s12 center-align"><span class="black-text">Canon #2</span></div>
                    </div>
                  </div>

                  <div class="card-panel hoverable col s4 grey lighten-5 ">
                    <div class="row">
                      <div class="col s12 center-align"><img src="img/no_img.jpg" class="pad equipement-icon responsive-img"></div>
                      <div class="col s12 center-align"><span class="black-text">Canon #3</span></div>
                    </div>
                  </div>

                  <div class="card-panel hoverable col s4 grey lighten-5 ">
                    <div class="row">
                      <div class="col s12 center-align"><img src="img/no_img.jpg" class="pad equipement-icon responsive-img"></div>
                      <div class="col s12 center-align"><span class="black-text">Canon #4</span></div>
                    </div>
                  </div>

                  <div class="card-panel hoverable col s4 grey lighten-5 ">
                    <div class="row">
                      <div class="col s12 center-align"><img src="img/no_img.jpg" class="pad equipement-icon responsive-img"></div>
                      <div class="col s12 center-align"><span class="black-text">Canon #5</span></div>
                    </div>
                  </div>

                  <div class="card-panel hoverable col s4 grey lighten-5 ">
                    <div class="row">
                      <div class="col s12 center-align"><img src="img/no_img.jpg" class="pad equipement-icon responsive-img"></div>
                      <div class="col s12 center-align"><span class="black-text">Canon #6</span></div>
                    </div>
                  </div>

                </div>
                <div id="Blindage" class="col s12">
                  <div class="card-panel hoverable col s4 grey lighten-5 ">
                    <div class="row">
                      <div class="col s12 center-align"><img src="img/no_img.jpg" class="pad equipement-icon responsive-img"></div>
                      <div class="col s12 center-align"><span class="black-text">Blindage #1</span></div>
                    </div>
                  </div>

                  <div class="card-panel hoverable col s4 grey lighten-5 ">
                    <div class="row">
                      <div class="col s12 center-align"><img src="img/no_img.jpg" class="pad equipement-icon responsive-img"></div>
                      <div class="col s12 center-align"><span class="black-text">Blindage #2</span></div>
                    </div>
                  </div>

                  <div class="card-panel hoverable col s4 grey lighten-5 ">
                    <div class="row">
                      <div class="col s12 center-align"><img src="img/no_img.jpg" class="pad equipement-icon responsive-img"></div>
                      <div class="col s12 center-align"><span class="black-text">Blindage #3</span></div>
                    </div>
                  </div>

                  <div class="card-panel hoverable col s4 grey lighten-5 ">
                    <div class="row">
                      <div class="col s12 center-align"><img src="img/no_img.jpg" class="pad equipement-icon responsive-img"></div>
                      <div class="col s12 center-align"><span class="black-text">Blindage #4</span></div>
                    </div>
                  </div>

                  <div class="card-panel hoverable col s4 grey lighten-5 ">
                    <div class="row">
                      <div class="col s12 center-align"><img src="img/no_img.jpg" class="pad equipement-icon responsive-img"></div>
                      <div class="col s12 center-align"><span class="black-text">Blindage #5</span></div>
                    </div>
                  </div>

                  <div class="card-panel hoverable col s4 grey lighten-5 ">
                    <div class="row">
                      <div class="col s12 center-align"><img src="img/no_img.jpg" class="pad equipement-icon responsive-img"></div>
                      <div class="col s12 center-align"><span class="black-text">Blindage #6</span></div>
                    </div>
                  </div>

                </div>
                <div id="Chenille" class="col s12">

                  <div class="card-panel hoverable col s4 grey lighten-5">
                    <div class="row">
                      <div class="col s12 center-align"><img src="img/no_img.jpg" class="pad equipement-icon responsive-img"></div>
                      <div class="col s12 center-align"><span class="black-text">Chenille #1</span></div>
                    </div>
                  </div>

                  <div class="card-panel hoverable col s4 grey lighten-5">
                    <div class="row">
                      <div class="col s12 center-align"><img src="img/no_img.jpg" class="pad equipement-icon responsive-img"></div>
                      <div class="col s12 center-align"><span class="black-text">Chenille #2</span></div>
                    </div>
                  </div>

                </div>

                <div id="info" class="col s12">

                  <div class="card-panel hoverable col s4 grey lighten-5">
                    <div class="row">
                      <div class="col s12 center-align"><img src="img/no_img.jpg" class="pad equipement-icon responsive-img"></div>
                      <div class="col s12 center-align"><span class="black-text">info #1</span></div>
                    </div>
                  </div>

                  <div class="card-panel hoverable col s4 grey lighten-5">
                    <div class="row">
                      <div class="col s12 center-align"><img src="img/no_img.jpg" class="pad equipement-icon responsive-img"></div>
                      <div class="col s12 center-align"><span class="black-text">info #2</span></div>
                    </div>
                  </div>

                </div>
              </div>
              <div class="pad col s12 m4 l4 ">

                <div class="card">
                  <div class="card-image">
                    <img src="img/galaxy.jpg">
                    <span class="card-title">Canon #1</span>
                  </div>
                  <div class="card-content">
                    <h5>Statistiques</h5>
                    <p>Description Canon #1</p>
                    <span> Prix : 100$</span>
                  </div>
                  <div class="card-action">
                    <a class="waves-effect waves-light btn" href="#">Acheter</a>
                  </div>
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
