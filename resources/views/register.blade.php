<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <form action="{{route('register')}}" method="post"
        style="display: flex; flex-direction:column; align-items: center;">
        @csrf
        <label for="">Name:</label>
        <input type="text" name="name" />

        <label for="">Email:</label>
        <input type="email" name="email" />

        <label for="">Password:</label>
        <input type="password" name="password" />

        <label for="">Confirmation:</label>
        <input type="password" name="password_confirmation" />

        <br>
        <button type="submit">Register</button>

        @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>

            @endforeach
    </ul>
    @endif
    </form>
</body>

</html> 
<!-------------------------------------------------------------------->




{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="{{asset('css\register.css')}}">


</head>

<body>

    <nav>
        <header>
            <div class="encabezado">
                <img src="{{asset('css/logo/logo1_t .png')}}" alt="" id="logo" />
            
            </div>

            <p><B>
                    <h3 id="titulo">Registro</h3>
                </B></p>



            <div class="aside">

                <div class="buscador">


                    <a class='dropdown-trigger material-icons tooltipped' data-position="bottom" data-tooltip="Menú"
                        id="boton-buscar" href='#' data-target='dropdown1'>dehaze</a>
                </div>

                <!-- Dropdown Structure -->
                <ul id='dropdown1' class='dropdown-content'>
                    <li><a href="Layout.html">Inicio</a></li>
                    <li><a href="#!">Acerca</a></li>


                </ul>

            </div>
        </header>
    </nav>


    <div class="container">

        <main>





            <div class="container-main">
                <div class="articulos2">
                    

                    <div class="row">
                        <form class="col s12" action="{{route('register')}}" method="post">
                        @csrf
                            <div class="input-field col s12" class="input">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="first_name" type="text" name="name" class="validate">
                                <label for="first_name" >Nombre Completo</label>
                            </div>

                            <div class="input-field col s12" class="input">
                                <i class="material-icons prefix ">markunread</i>
                                <input id="email" type="email" name="email" class="validate">
                                <label for="email" >Email</label>
                            </div>

                            <div class="input-field col s12" class="input">
                                <i class="material-icons prefix ">phone</i>
                                <input id="password" type="number" class="validate ">
                                <label for="password">Numero Telefono</label>
                            </div>

                            <div class="input-field col s12" class="input">
                                <i class="material-icons prefix">folder</i>
                                <input id="confirmation" type="text" class="validate">
                                <label for="confirmation">Tipo Documento</label>
                            </div>


                            <div class="input-field col s12" class="input">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="first_name" type="number" class="validate">
                                <label for="first_name">Numero Documento</label>
                            </div>

                            <div class="input-field col s12" class="input">
                                <i class="material-icons prefix ">vpn_key</i>
                                <input id="password" type="password" name="password"class="validate ">
                                <label for="password" >Contraseña</label>
                            </div>

                            <div class="input-field col s12" class="input">
                                <i class="material-icons prefix">lock</i>
                                <input id="confirmation" type="password" name="password_confirmation" class="validate">
                                <label for="confirmation" >Confirmacion</label>
                            </div>

                           <div id="boton-registrar">
                                <button class="btn waves-effect waves-light" type="submit" id="registrarse">Finalizar

                                </button>

                            </div>



                            @if($errors->any())
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>

                                @endforeach
                            </ul>
                            @endif
                        </form>
                    </div>
                </div>
            </div>

        </main>
    </div> --}}






</body>
<script src="js.js">

</script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script> M.AutoInit();</script>

</html>