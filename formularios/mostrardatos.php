<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilopropio.css">
</head>
<body>

<h1>Datos Recepcionados</h1>
<div class="fondodatos">
<?php

$usuario = $_POST['usuario']; 
$contra = $_POST['passw'];

//mostrar datos recepcionados

echo "<h2>El usuario es: ".$usuario."</h2>"."<br>";
echo "<h2>Su contraseña es : ".$contra."</h2>";
?>

</div>
</body>
</html>

