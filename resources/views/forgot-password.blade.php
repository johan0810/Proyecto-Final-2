<!DOCTYPE html>
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
    <form action="{{route('forgot')}}" method="post" style="display: flex; flex-direction:column; align-items: center;">
        @csrf
        <label for="">Email:</label>
        <input type="email" name="email" />

        <button type="submit"><b>Restablecer Contraseña<b></button>
        <br>

        {{-- @if (session()->has('message'))
        <p>{{session('message')}}</p>

        @endif --}}

        @if ($errors->any('message'))
        <ul>
        @foreach ($errors->all() as $error)
        <li>{{session('message')}}</li>
            
        @endforeach
            
        @endif



    </form>
</body>

</html>