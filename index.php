<html>
<head>
    <link rel="icon" href="imagens/coração.png" type="image/icon">
    <!-- js aqui -->
</head>
<?php
    include_once('topo.php');
    include_once('menu.php');

    if(empty($_SERVER["QUERY_STRING"])){
        $var = "principal.php";
        include_once("$var");
    }else{
        $pg = $_GET['pg'];
        include_once("$pg.php");
    }

    include_once('rodape.php');
?>
</html>