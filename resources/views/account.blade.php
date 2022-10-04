<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
</head>
<body>
    <h1>Bienvenido {{$user->name}}</h1>
    <form action="{{route('logout')}}" method="post">
        @csrf
        <button type="submit">Cerrar Sesion</button>
    </form>
</body>
</html>