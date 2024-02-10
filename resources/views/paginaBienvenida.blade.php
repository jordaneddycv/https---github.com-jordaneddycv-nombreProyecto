<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>tienda de <?php echo $nombreTienda ?></h1>
    <h1>tienda de {{ $nombreTienda }} </h1>

    <?php
        if($nombreTienda == "koalas"){
    ?>
    <p>Busco al mejor koala de tu empresa</p>
    <?php
        }
    ?>
    <ul>
        <li> {{ $nombreMascota }} </li>
        <li> {{ $nombreMascotas }} </li>
        <li> {{ $direccion }} </li>
    </ul>

    @if($nombreTienda == "koalas")

    <p>Busco al mejor koala de tu empresa</p>
    
    @endif
</body>
</html>