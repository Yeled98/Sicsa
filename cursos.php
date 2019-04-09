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
      <title>Aprende TODO lo que necesitas sobre Plagas | Evita las Plagas</title>
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
            <li class="active"><a href="cursos.php">Capacitaciones</a></li>
            <li><a href="contacto.php">Contacto</a></li>
          </ul>
          <ul class="side-nav" id="mobile-demo">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="nosotros.php">Nosotros</a></li>
            <li><a href="servicios.php">Servicios</a></li>
            <li class="active"><a href="cursos.php">Capacitaciones</a></li>
            <li><a href="contacto.php">Contacto</a></li>
          </ul>
        </div>
      </nav>
      <main>
        <div class="row">
          <div class="col l8 offset-l2 s10 offset-s1">
            <div class="card blue accent-1 hoverable">
              <div class="card-image">
                <img src="img/curso.jpg">
              </div>
              <div class="card-content">
                <p>En Sicsa nos preocupamos por difundir el adiestramiento necesario para que el personal técnico, operativo y/o sus congéneres, aprendan a identificar las oportunidades para ser víctima de una infestación.<p>
                <p>Nosotros contamos con cursos para nuestros clientes en nivel introductorio, avanzado e inclusive profesional en el Manejo Integrado de Plagas, que permiten ir comprendiendo:<p>
                <ul>
                  <li>Que es el Manejo Integrado de Plagas y su importancia.</li>
                  <li>Planes de mantenimiento y Limpieza.</li>
                  <li>Sistemas de Normatividad en Manejo Integrado de Plagas.</li>
                  <li>Auditorias en Manejo Integrado de plagas.</li>
                  <li>Buenas Practicas de Manufactura (GMPS) para el control de plagas.</li>
                  <li>HACCP Enfocado al Manejo Integrado de Plagas.</li>
                  <li>Normas AIB.</li>
                  <li>Distintivos H Enfocado al Manejo Integrado de Plagas.</li>
                </ul>
              </div>
              <div class="card-action">
                <a href="contacto.php">Contáctanos</a>
              </div>
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
