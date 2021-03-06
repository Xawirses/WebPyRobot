<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Bienvenue sue WebPyRobot</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  </head>
  <body>
    <nav class="light-blue lighten-1" role="navigation">
      <div class="nav-wrapper container"><a id="logo-container" href="index.php" class="brand-logo">Logo</a>
        <ul class="right hide-on-med-and-down">
          <li><a class="modal-trigger" href="#modalConnexion">Connexion</a></li>
          <li><a class="modal-trigger" href="#modalInscription">Inscription</a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
          <li><a class="modal-trigger" href="#modalConnexion">Connexion</a></li>
          <li><a class="modal-trigger" href="#modalInscription">Inscription</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
      </div>
    </nav>

      <!-- MODAL  -->
      <div id="modalConnexion" class="modal">
        <div class="modal-content">
          <h4>Connexion</h4>
          <div class="row">
            <form>
              <div class="input-field col s12">
                <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                <label for="first_name">Pseudo</label>
              </div>
              <div class="input-field col s12">
                <input id="password" type="password" class="validate">
                <label for="password">Password</label>
              </div>
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <a href="#!" class=" modal-action modal-close waves-effect waves-green btn">Agree</a>
        </div>
      </div>

      <div id="modalInscription" class="modal modal-fixed-footer">
        <div class="modal-content">
          <h4>Inscription</h4>
          <div class="row">
            <form >
              <div class="input-field col s12">
                <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                <label for="first_name">Pseudo</label>
              </div>
              <div class="input-field col s12">
                <input id="email" type="email" class="validate">
                <label for="email">Email</label>
              </div>
              <div class="input-field col s12">
                <input id="password" type="password" class="validate">
                <label for="password">Password</label>
              </div>
              <div class="input-field col s12">
                <input id="password" type="password" class="validate">
                <label for="password">Confirm Password</label>
              </div>
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <a href="#!" class=" modal-action modal-close waves-effect waves-green btn">Agree</a>
        </div>
      </div>



    <div class="container">
      <div class="section">

        <!--   Icon Section   -->
        <div class="row">
          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
              <h5 class="center">Speeds up development</h5>

              <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
            </div>
          </div>

          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
              <h5 class="center">User Experience Focused</h5>

              <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
            </div>
          </div>

          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
              <h5 class="center">Easy to work with</h5>

              <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
            </div>
          </div>
        </div>

      </div>
      <!-- Gallery Section -->
      <div class="section">
        <div class="carousel">
          <a class="carousel-item" href="#one!"><img src="img/galaxy.jpg"></a>
          <a class="carousel-item" href="#two!"><img src="img/galaxy.jpg"></a>
          <a class="carousel-item" href="#three!"><img src="img/galaxy.jpg"></a>
          <a class="carousel-item" href="#four!"><img src="img/galaxy.jpg"></a>
          <a class="carousel-item" href="#five!"><img src="img/galaxy.jpg"></a>
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
