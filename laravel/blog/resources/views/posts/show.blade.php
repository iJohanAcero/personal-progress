<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Larevel 12 | Curso</title>
</head>

<body>
    <h1> Bienvenido a la pagina para mostrar un post {{ $post }} </h1> 
    {{-- treamos la variable $post que viene del controlador --}}


    @if (false)
        <p> La condicion es verdadera </p>
    @endif
    {{-- podemos hacer logica gracias a blade, usando directivas como @if, @foreach, etc. --}}
</body>

</html>
