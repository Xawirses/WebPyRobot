<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>WebPyRobot - Editeur</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <!-- Editeur Python CSS -->
    <link rel="stylesheet" href="./css/codemirror.css">
    <link rel="stylesheet" href="./theme/material.css">
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
              <div class="pad col s12 m3 l3 ">
                <div class="section collection">
                  <a href="#"  class="collection-item active">Fichier #1</a>
                  <a href="#"  class="collection-item">Fichier #2</a>
                  <a href="#"  class="collection-item">Fichier #3</a>
                  <a href="#"  class="collection-item">Fichier #4</a>
                  <a href="#"  class="collection-item">Fichier #5</a>
                </div>
              </div>
              <div class="pad row col s12 m9 l9 ">
                <div class="pad col s12 m12 l12 ">
                  <div id="modal1" class="modal">
                    <div class="modal-content">
                      <h5>Nouveau Fichier</h5>
                      <div class="input-field col s12">
                        <i class="material-icons prefix">fiber_new</i>
                        <input id="icon_name" type="text" class="validate">
                        <label for="icon_name">Nom du fichier</label>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn">Ok</a>
                    </div>
                  </div>
                  <nav>
                    <div class="nav-wrapper">
                      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                      <ul class="left hide-on-med-and-down">
                        <li><a class="modal-trigger" href="#modal1">Nouveau</a></li>
                        <li><a href="#">Sauvgarder</a></li>
                        <li><a href="#">Supprimer</a></li>
                        <li><a href="#">Tester</a></li>
                      </ul>
                      <ul class="side-nav" id="mobile-demo">
                        <li><a class="waves-effect modal-trigger" href="#modal1"><i class="material-icons left">fiber_new</i>Nouveau</a></li>
                        <li><a class="waves-effect" href="#"><i class="material-icons left">save</i>Sauvgarder</a></li>
                        <li><a class="waves-effect" href="#"><i class="material-icons left">delete_forever</i>Supprimer</a></li>
                        <li><a class="waves-effect" href="#"><i class="material-icons left">cached</i>Tester</a></li>
                      </ul>
                    </div>
                  </nav>
                </div>
                <div class="pad col s12 m12 l12 ">
                  <div id ="codeEditor">
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
    <!-- Editeur Python Script -->
    <script src="./js/codemirror.js"></script>
    <script src="./mode/python/python.js"></script>  
    <script>
      var editor = CodeMirror(document.getElementById("codeEditor"),{
          mode : "python",
          theme: "material",
          lineNumbers: true,
          firstLineNumber: 0,
      });
    </script>
    <!-- Utilisation editor : http://codemirror.net/doc/manual.html#commands -->

    </body>
</html>
