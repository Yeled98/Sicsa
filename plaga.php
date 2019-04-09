<!DOCTYPE html>
  <html>
    <head lang="la">
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-125102180-1"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-125102180-1');
      </script>
      <meta charset="utf-8">
      <title>TODO sobre las Plagas | Como evitarlas y las Plagas Mas Comunes</title>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/style.css"/>
      <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Signika:400,700" rel="stylesheet">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
      <nav class="blue darken-4">
        <div class="nav-wrapper">
          <a href="index.php" class="brand-logo hide-on-med-and-down"><img src="img/sicsa.png" alt="Sicsa" class="logo-nav"></a>
          <a href="index.php" class="brand-logo center hide-on-large-only"><img src="img/sicsa.png" alt="Sicsa" class="logo-side-nav"></a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="nosotros.php">Nosotros</a></li>
            <li><a href="servicios.php">Servicios</a></li>
            <li><a href="cursos.php">Capacitaciones</a></li>
            <li><a href="contacto.php">Contacto</a></li>
          </ul>
          <ul class="side-nav" id="mobile-demo">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="nosotros.php">Nosotros</a></li>
            <li><a href="servicios.php">Servicios</a></li>
            <li><a href="cursos.php">Capacitaciones</a></li>
            <li><a href="contacto.php">Contacto</a></li>
          </ul>
        </div>
      </nav>
      <main>
        <div class="row">
          <div class="col l8 offset-l2 s10 offset-s1 card blue accent-1 hoverable">
            <div class="card-image">
              <img src="img/plagas.jpg" alt="Plagas" class="responsive-img">
            </div>
            <h1>Plaga</h1>
            <h3>¿Qué es una plaga?</h3>
            <p>Según la Real Academia Española una <strong>plaga</strong> es la aparición masiva y repentina de seres vivos de la misma especie que causan graves daños a poblaciones animales o vegetales, como, respectivamente, la peste bubónica y la filoxera.</p>
            <div class="card-action">
              <a href="biblioteca.php">Biblioteca</a>
            </div>
          </div>
        </div>
        <?php include_once 'funcion-contacto.php';?>
      </main>
      <footer class="page-footer blue darken-4">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Sicsa</h5>
                <p class="grey-text text-lighten-4">Posicionados en el mercado con un servicio de Profesionistas altamente capacitados brindando un servicio eficiente y dinámico para nuestros clientes.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Índice</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="index.php">Inicio</a></li>
                  <li><a class="grey-text text-lighten-3" href="nosotros.php">Nosotros</a></li>
                  <li><a class="grey-text text-lighten-3" href="servicios.php">Servicios</a></li>
                  <li><a class="grey-text text-lighten-3" href="cursos.php">Capacitaciones</a></li>
                  <li><a class="grey-text text-lighten-3" href="contacto.php">Contacto</a></li>
                  <li><a class="grey-text text-lighten-3" href="biblioteca.php">Biblioteca</a></li>
                </ul>
              </div>
            </div>
          </div>
            <a class="grey-text text-lighten-4 right" href="#!"><img class="responsive-img" src="img/tecnoys98.jpg"></a>
            </div>
        </footer>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>$(".button-collapse").sideNav();</script>
    </body>
  </html>
