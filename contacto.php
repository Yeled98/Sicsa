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
      <title>El MEJOR servicio de Control de Plagas</title>
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
            <li class="active"><a href="contacto.php">Contacto</a></li>
          </ul>
          <ul class="side-nav" id="mobile-demo">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="nosotros.php">Nosotros</a></li>
            <li><a href="servicios.php">Servicios</a></li>
            <li><a href="cursos.php">Capacitaciones</a></li>
            <li class="active"><a href="contacto.php">Contacto</a></li>
          </ul>
        </div>
      </nav>
      <main>
        <div class="parallax-container hide-on-med-and-down">
          <div class="parallax"><img src="img/llamada.jpg"></div>
        </div>
        <div class="parallax-container hide-on-large-only">
          <div class="parallax"><img src="img/llamadita.jpg"></div>
        </div>
        <div class="section white">
          <div class="row hide-on-large-only">
            <div class="col s10 offset-s1">
              <div class="col s10 offset-s1 card blue accent-1 hoverable">
                <div class="card-content">
                  <div class="row">
                    <div class="col s3">
                      <img src="img/gmail.png" alt="gmail" class="circle responsive-img">
                    </div>
                    <div class="col s9">
                      <a href="mailto:sicsamanejointegradodeplagas@gmail.com" class="blue-text accent-2">sicsamanejointegrado
                        deplagas@gmail.com</a>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col s3">
                      <img src="img/whatsapp.png" alt="whatsapp" class="circle responsive-img">
                    </div>
                    <div class="col s9">
                      <a href="tel:+525574000017" class="blue-text accent-2">+52 5574000017</a>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col s3">
                      <img src="img/telefono.png" alt="oficina" class="circle responsive-img">
                    </div>
                  <div class="col s9">
                    <a href="tel:62818055" class="blue-text accent-2">62818055</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
          <div class="row">
            <div class="col l8 offset-l1 s10 offset-s1">
              <div class="card hoverable">
                <div class="card-content">
                  <form action="enviar.php" method="post">
                    <div class="input-field">
                      <i class="material-icons prefix">account_circle</i>
                      <input id="icon_prefix" type="text" class="validate" name="nombre" required>
                      <label for="icon_prefix">Nombre</label>
                    </div>
                    <div class="input-field">
                      <i class="material-icons prefix">phone</i>
                      <input id="icon_telephone" type="tel" class="validate" name="telefono" required>
                      <label for="icon_telephone">Teléfono</label>
                    </div>
                    <div class="input-field">
                      <i class="material-icons prefix">mail</i>
                      <input id="icon_mail" type="email" class="validate" name="email" required>
                      <label for="icon_mail">E-mail</label>
                    </div>
                    <div class="input-field">
                      <i class="material-icons prefix">check</i>
                      <select name="plaga" required>
                        <optgroup label="Insectos Rastreros">
                          <option value="1">Cucaracha Americana</option>
                          <option value="2">Cucaracha Alemana</option>
                          <option value="3">Pescadito de Plata</option>
                          <option value="4">Hormiga Casera</option>
                          <option value="5">Arañas</option>
                          <option value="6">Cienpies</option>
                          <option value="7">Tijerillas</option>
                          <option value="8">Milpies</option>
                        </optgroup>
                        <optgroup label="Roedores">
                          <option value="9">Ratas</option>
                          <option value="10">Ratones</option>
                        </optgroup>
                        <optgroup label="Otros">
                          <option value="11">Otros</option>
                        </optgroup>
                      </select>
                      <label>Plaga</label>
                    </div>
                    <div class="input-field">
                      <i class="material-icons prefix">mode_edit</i>
                      <textarea id="icon_prefix2" type="text" class="validate materialize-textarea" name="mensaje" required></textarea>
                      <label for="icon_prefix2">Mensaje</label>
                    </div>
                    <button class="btn waves-effect waves-light" type="submit" >Enviar
                      <i class="material-icons right">send</i>
                    </button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col l3 hide-on-med-and-down">
              <div class="col l10 offset-l1 card hoverable">
                <div class="card-content">
                  <div class="row">
                    <div class="col l3">
                      <img src="img/gmail.png" alt="gmail" class="circle responsive-img">
                    </div>
                    <div class="col l9">
                      <a href="mailto:sicsamanejointegradodeplagas@gmail.com" class="blue-text accent-2">sicsamanejointegrado
                        deplagas@gmail.com</a>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col l3">
                      <img src="img/whatsapp.png" alt="whatsapp" class="circle responsive-img">
                    </div>
                    <div class="col l9">
                      <a href="tel:+525574000017" class="blue-text accent-2">+52 5574000017</a>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col l3">
                      <img src="img/telefono.png" alt="oficina" class="circle responsive-img">
                    </div>
                  <div class="col l9">
                    <a href="tel:62818055" class="blue-text accent-2">62818055</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
        <div class="parallax-container hide-on-med-and-down">
          <div class="parallax"><img src="img/familia.jpg"></div>
        </div>
        <div class="parallax-container hide-on-large-only">
          <div class="parallax"><img src="img/familita.jpg"></div>
        </div>
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
      <script type="text/javascript"> $(document).ready(function() {
        $('select').material_select();
      });</script>
      <script type="text/javascript">
        $(document).ready(function(){
        $('.parallax').parallax();
        });
      </script>
    </body>
  </html>
