<?php
// Initialiser la session
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo-style.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Passion Froid</title>

</head>
<header>

    <!-- Page Loader -->
    <!--<div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>-->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="accueil.php">
                
                <i class="fas fa-film mr-2"></i>
                Accueil
            </a>

            </form>
        </div>
        <?php
        if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
        ?>
        


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link nav-link-3" href="upload.php">Ajouter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-3" href="modif.php">Modifier</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-3" href="suppression.php">Supprimer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-3" href="logout.php">Déconnexion</a>
                    </li>
                    
                </ul>
            </div>
        <?php
        } else {
        } ?>
    </nav>
    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" style="background-image:url('./assets/background/img-slid.jpg')" >
    <!--<img src="./assets/background/img-slid.jpg" alt=""> -->

        <form action="verif-form.php" method="get" class="d-flex tm-search-form"  >
            <input type="search" class="form-control tm-search-input"  placeholder="Search" aria-label="Search" name="terme">
            <button class="btn btn-outline-success tm-search-btn" type="submit" name="s" value="Rechercher">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>

    <!--<script src="js/plugins.js"></script>
    <script>
        $(window).on("load", function () {
            $('body').addClass('loaded');
        });
    </script>-->


</header>
<?php include "data\data.php" ?>

<body>