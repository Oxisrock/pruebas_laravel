<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Añadir Usuario</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        <section id="formulario">
          <form id="form" class="" action="" method="post">
            <label for="">Nombre: </label><input type="text" name="first_name" value="">
            <label for="">Apellido: </label><input type="text" name="last_name" value="">
            <label for="">Cedula: </label><input type="text" name="Ced" value="">
            <label for="">Email: </label><input type="text" name="email" value="">
            <input type="submit" name="submit" value="Registrar">
          </form>
        </section>
    </body>
</html>
