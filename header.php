<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="utf-8">
        <title>PDO partie 2</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
        <script src="/assets/js/jquery.min.js"></script>
        <script src="/assets/js/popper.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
        <style>
            .fakeimg {
                height: 200px;
                background: #aaa;
            }
        </style>
    </head>
    <body>
        <div class="jumbotron text-center" style="margin-bottom:0">
            <h1>PDO - Partie 2 : Ecrire des données</h1>
            <p>Attention : Exécuter patients.sql avant de commencer les exercices.</p>
        </div>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <a class="navbar-brand" href="index.php">Accueil</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="ajout-patient.php">Ajouter un patient</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="liste-patients.php">Liste des patients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Exercice 3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Exercice 4</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Exercice 5</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Exercice 6</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Exercice 7</a>
                    </li>  
                </ul>
            </div>  
        </nav>
        <div class="container" style="margin-top:30px">
            <div class="row">
                <div class="col-sm-8">