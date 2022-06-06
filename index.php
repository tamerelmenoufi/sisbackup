<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="lib/vendor/bootstrap5/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="lib/vendor/jquery3.6/jquery.min.js" ></script>

    <link rel="stylesheet" href="lib/vendor/jquery-confirm/jquery-confirm.min.css">
    <script src="lib/vendor/jquery-confirm/jquery-confirm.min.js"></script>

  </head>
  <body>
    <h1 id="opc">Olá Mundo</h1>
    Aqui entram os dados do sistema!!!
    <script src="lib/vendor/bootstrap5/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script>
        $(function(){
            $("#opc").click(function(){
                $.alert('Dados com o popup Jquery-Confirm');
            });
        })
    </script>

  </body>
</html>