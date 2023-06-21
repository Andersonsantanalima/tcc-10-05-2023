<?php

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./imagens/esporte-imagem-animada-0415.gif" type="image/x-icon">
    <title>SF Athlrtic</title>
</head>
<body >
    <header></header>
    <a href="?page=1">home</a>
    <a href="?page=2">Cadastro</a>
    <a href="?page=3">Entrar</a>
<?php
        http://tcc.local/?page
        if(isset($_GET['page'])){
            $page = $_GET['page'];
            switch($page){
                case '1':
                    require_once './componets/Home.php';
                    break;
                case '2':
                    require_once './componets/Usuario.php';
                    break;
                case '3':
                    require_once './componets/Cadastro.php';
                    break;
            }
        }
        else{
            echo 'Não foi';
        }
        // var_dump($_GET);

        // for($id = 0; $id <= $_POST['tab']; $id++){
        //     echo "<h1> $id * ".$_POST['tab']." = ".$_POST['tab'] * $id."</h1>";
        // }
    ?>
</body>
</html>