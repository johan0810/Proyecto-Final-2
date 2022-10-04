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
    <form action="{{route('reset',['token'=>$token])}}" method="post"
    
        style="display: flex; flex-direction:column; align-items: center;">

        @csrf
       
        {{-- <input type="hidden" name="token" value="{{$token}}"> --}}
       <label for="">Email:</label>
        <input type="email" name="email"/>

        <label for="">Password:</label>
        <input type="password" name="password"/>

        <label for="">Confirmation:</label>
        <input type="password" name="password_confirmation"/>

        <br>
        <button type="submit">Cambiar Contraseña</button>

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