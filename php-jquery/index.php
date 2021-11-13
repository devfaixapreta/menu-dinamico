<?php
$page = filter_input(INPUT_GET, "url");
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8" >
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="../vendor/jquery.js"></script>
        <title>title</title>
        <!--<link rel="stylesheet" href="assets/css/style.css">-->
        <!--<script src="assets/js/jquery.min.js"></script>-->
        <style>
            .nav li a{
                text-decoration: none;
                padding: 1rem;
                font-weight: bold;
                color: blue;
            }
            .nav li a:visited,
            .nav li a:active,
            .nav li a:link,
            .nav li a:hover{
                text-decoration: none;
            }
            .nav li a:hover{
                border-bottom: 3px solid blue;
            }
            .nav ul{
                list-style: none;
                display: flex;
                flex-direction: row;
            }
            .nav li + li{
                margin-left: 0.5rem;
            }

            .nav .active{
                background-color: blue;
                color: white;
            }

        </style>
    </head>
    <body>
        <div data-url="<?= $page; ?>" class="nav"> 
            <ul>
                <li><a data-menu="home" href="home">HOME</a></li>
                <li><a data-menu="sobre" href="sobre">SOBRE</a></li>
                <li><a data-menu="produtos" href="produtos">PRODUTOS</a></li>
                <li><a data-menu="contato" href="contato">CONTATO</a></li>
            </ul></div>


        <script>
            var menu = $("div").attr("data-url");
            $('.menu a').removeClass('active');
            switch (menu) {
                case 'home':
                    $("[data-menu='home']").addClass('active');
                    break;
                case 'sobre':
                    $("[data-menu='sobre']").addClass('active');
                    break;
                case 'produtos':
                    $("[data-menu='produtos']").addClass('active');
                    break;
                case 'contato':
                    $("[data-menu='contato']").addClass('active');
                    break;
            }
        </script>
    </body>
</html>