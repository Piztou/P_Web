<!DOCTYPE html>

<!--
ETML
Auteur: Clément Dieperink
Date: 14.02.2017
Description:
-->

<?php
    session_start();

    // Pour inclure automatiquement les classes
    spl_autoload_register(function ($class) {
        include_once "classes/$class.php";
    });

    $pageId = 1;#NE PAS OUBLIE DE L'ENLEVER POUR VRAIS PAGES
    $isConnected = true;#TODO Moyen de savoir si connecter ou pas
?>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title><?php echo GlobalValue::SITE_TITLE?></title>

        <!-- Bootstrap -->
        <link href="../../resources/lib/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/"><?php echo GlobalValue::SITE_TITLE?></a>
                </div>
                <?php

                    echo '<ul class="nav navbar-nav">';
                    echo '<li'.($pageId === 0?' class="active"':'').'><a href="./accueil.php">Accueil</a></li>';
                    echo '<li'.($pageId === 1?' class="active"':'').'><a href="./books.php">Ouvrages</a></li>';

                    if ($isConnected){
                        echo '<li'.($pageId === 2?' class="active"':'').'><a href="./addBook.php">Ajouter un ouvrage</a></li>';
                    }

                    echo '</ul>';
                    echo '<ul class="nav navbar-nav navbar-right">';

                    if($isConnected){
                        echo '<li><a href="#"><span class="glyphicon glyphicon-user"></span> Mon Compte</a></li>
                              <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Déconnexion</a></li>';
                    }
                    else{
                        echo '<li><a href="#YOLO"><span class="glyphicon glyphicon-user"></span> Inscription</a></li>
                              <li><a href="#YOLO"><span class="glyphicon glyphicon-log-in"></span> Connexion</a></li>';
                    }

                    echo '</ul>';
                ?>
            </div>
        </nav>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="../../resources/lib/jquery-3.1.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../../resources/lib/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    </body>
</html>