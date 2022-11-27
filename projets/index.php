<?php

//die;
require_once("models/bibliotheque.model.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="publics/css/style.css">
</head>
<body>
    <div class="menu">
        <ul>
            <li><a href="index.php?view=1">Ouvrages</a></li>
            <li><a href="index.php?view=2">Rayons</a></li>
            <li><a href="index.php?view=3">Auteurs</a></li>
            <li><a href="index.php?view=4">DEMANDE DE PRET</a></li>
            <li><a href="index.php?view=5">PRET EN COURS</a></li>
        </ul>
    </div>
<?php 
if (isset($_GET['view'])){
    //$view=$_GET["view"];
    extract($_GET);
    if($view==1){
        require_once("views/ouvrages.html.php"); 
    }elseif ($view==2){
        require_once("views/rayons.html.php");
    }elseif ($view==3){
        require_once("views/auteurs.html.php");
    }
    elseif ($view==4){
        require_once("views/pret.html.php");
    }
    elseif ($view==5){
        require_once("views/pretencours.html.php");
    } 
}else{
    require_once("views/ouvrages.html.php");
}

?>
</body>
</html>