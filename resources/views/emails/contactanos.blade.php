<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
</head>
<body>
    <p>Primer correo que se envía por Laravel</p>
    <p><strong>Nombre: </strong> {{$contacto->nombre}} </p>
    <p><strong>Email: </strong> {{$contacto->email}} </p>
    <p><strong>Comentarios: </strong> {{$contacto->comentarios}} </p>    
</body>
</html>