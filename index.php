<?php
    include("lib/config/includes.php");

    if($_GET['sair']){
        $_SESSION = [];
        header("location:./");
        exit();
    }
?>
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

    <link href="lib/vendor/fontawesome-free-6.1.1-web/css/all.css" rel="stylesheet">

    <style>
        .AppBody{
            position:relative;
            width:100%;
            height:auto;
            margin:0;
            padding:0;
        }
    </style>
  </head>
  <body>
    <div class="AppBody"></div>
    <script src="lib/vendor/bootstrap5/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
        $(function(){

            $.ajax({
                url:"home/<?=(($_SESSION['backupUser'])?'index':'login')?>.php",
                success:function(dados){
                    $(".AppBody").html(dados);
                }
            });

            $("#opc").click(function(){
                $.alert('Dados com o popup Jquery-Confirm');
            });
        })
    </script>

  </body>
</html>