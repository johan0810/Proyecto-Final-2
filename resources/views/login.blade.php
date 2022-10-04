{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <form action="{{route('login')}}" method="post" style="display: flex; flex-direction:column; align-items: center;">
        @csrf
        <label for="">Email:</label>
        <input type="email" name="email" />

        <label for="">Password:</label>
        <input type="password" name="password" />

        <button type="submit">Ingresar</button>
        <br>

        <a href="{{route('viewforgot')}}">¿Olvidaste tu contraseña?</a>



        @if (session()->has('message'))
        <p>{{session('message')}}</p>

        @endif



    </form>
</body>

</html> --}}






<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inicio</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"
    />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <!-- Compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
    />
   <link rel="stylesheet" href="{{asset('css\register.css')}}">
    <link rel="icon" href="logo.png" />
  </head>

  <body>
    <nav>
      <header>
        <div class="encabezado">
          <img src="logo1_t .png" alt="" id="logo" />
        </div>

        <p>
          <b>
            <h3 id="titulo">¡Come más pide más!</h3>
          </b>
        </p>

        <div class="aside">
          <!-- <a href="index.html" id="icon-usuario" class="material-symbols-outlined">
            person</a> -->

          <div class="buscador">
            <button
              id="boton-buscar"
              type="submit"
              value="Buscar"
              class="material-symbols-outlined"
            >
              search
            </button>
            <input
              id="input-buscar"
              type="search"
              name="buscar"
              placeholder="  Buscar"
            />

            <a
              class="modal-trigger material-icons tooltipped"
              data-position="bottom"
              data-tooltip="Usuario"
              id="boton-buscar"
              href="#modal1"
              >person</a
            >

            <a
              class="dropdown-trigger material-icons tooltipped"
              data-position="bottom"
              data-tooltip="Menú"
              id="boton-buscar"
              href="#"
              data-target="dropdown1"
              >dehaze</a
            >
          </div>

          <!-- Modal Structure -->
          <div id="modal-1">
            <div id="modal1" class="modal">
              <div class="container-modal">
                <div class="nombre-login">
                  <h3>LOGIN</h3>
                </div>
                <form class="col s12" id="ini_sesi">
                  <div class="input-field col s12" class="input">
                    <i class="material-icons prefix">markunread</i>
                    <input id="email" type="email" class="validate" />
                    <label for="email">Email</label>
                  </div>
                  <div class="input-field col s12" class="input">
                    <i class="material-icons prefix">vpn_key</i>
                    <input id="password" type="password" class="validate" />
                    <label for="password" class="label">password</label>
                  </div>

                  <div id="boton-ingresar">
                    <a href="reset-contraseña.html" id="reset-password">
                      ¿Olvidaste tu Contraseña?</a
                    >
                    <a
                      class="btn waves-effect waves-light"
                      type="submit"
                      id="iniciar"
                      href="Layout-1.html"
                      >Ingresar
                    </a>
                  </div>
                </form>
                <div class="redes mx-auto pt-3" id="enlaces">
                  <div id="redes">
                    <a
                      class="circulo facebook"
                      href=""
                      type="button"
                      role="button"
                      ><i class="fa-brands fa-facebook">f</i></a
                    >
                    <a
                      class="circulo whatsapp"
                      href=""
                      type="button"
                      role="button"
                      ><i class="fa-brands fa-google">w</i></a
                    >
                  </div>

                  <div id="boton-registrar">
                    <a
                      class="btn waves-effect waves-light"
                      href="Login.html"
                      id="registrarse"
                      >Registrarse
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Dropdown Structure -->
          <ul id="dropdown1" class="dropdown-content">
            <li><a href="#!">Inicio</a></li>
            <li><a href="#!">Historial</a></li>
            <li><a href="#!">Acerca</a></li>
          </ul>
        </div>
      </header>
    </nav>
    <div class="public">
      <div class="anuncios carousel carousel-slider center">
        <div class="publicidad">
          <div class="carousel-fixed-item center" href="#inicio"></div>

          <div class="anuncio1 carousel-item red white-text" href="#one!"></div>
          <div class="anuncio2 carousel-item red white-text" href="#one!"></div>
          <div class="anuncio3 carousel-item red white-text" href="#one!"></div>
          <div class="anuncio4 carousel-item red white-text" href="#one!"></div>
        </div>
      </div>
    </div>

    <div class="container">
      <div id="nombre-restaurante">
        <h4>RESTAURANTES</h4>
      </div>
      <main>
        <div class="container-main">
          <div class="articulos2">
            <div class="restaurantes">
              <img src="2.jpeg" alt="" id="img" href="" />

              <img src="2.jpeg" alt="" id="img" href="" />

              <img src="2.jpeg" alt="" id="img" href="" />

              <img src="2.jpeg" alt="" id="img" href="" />

              <img src="2.jpeg" alt="" id="img" href="" />

              <img src="2.jpeg" alt="" id="img" href="" />

              <img src="2.jpeg" id="img" alt="" />

              <img src="2.jpeg" id="img" alt="" />

              <img src="2.jpeg" alt="" id="img" href="" />

              <img src="2.jpeg" alt="" id="img" href="" />

              <img src="2.jpeg" alt="" id="img" href="" />

              <img src="2.jpeg" alt="" id="img" href="" />

              <img src="2.jpeg" alt="" id="img" href="" />

              <img src="2.jpeg" alt="" id="img" href="" />

              <img src="2.jpeg" id="img" alt="" />

              <img src="2.jpeg" id="img" alt="" />
              <img src="2.jpeg" alt="" id="img" href="" />

              <img src="2.jpeg" alt="" id="img" href="" />

              <img src="2.jpeg" alt="" id="img" href="" />

              <img src="2.jpeg" alt="" id="img" href="" />

              <img src="2.jpeg" alt="" id="img" href="" />

              <img src="2.jpeg" alt="" id="img" href="" />

              <img src="2.jpeg" id="img" alt="" />

              <img src="2.jpeg" id="img" alt="" />

              <img src="2.jpeg" id="img" alt="" />

              <img src="2.jpeg" id="img" alt="" />
            </div>
          </div>
        </div>
      </main>
    </div>

    <div class="di">
      <br />
      <br />
      <br />
      <br />
    </div>




  </body>
  
  <script src="js.js"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    M.AutoInit();
    document.addEventListener("DOMContentLoaded", function () {
      var elems = document.querySelectorAll(".slider");
      var instances = M.Slider.init(elems, options);
    });

    // Or with jQuery

    $(document).ready(function () {
      $(".slider").slider();
    });
  </script>
</html>




























