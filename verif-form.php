<?php include "inc\header.php" ?>


<?php


if (isset($_GET["s"]) and $_GET["s"] == "Rechercher") {
    $_GET["terme"] = htmlentities($_GET["terme"]); //pour sécuriser le formulaire contre les intrusions html
    $terme = $_GET["terme"];
    $terme = trim($terme); //pour supprimer les espaces dans la requête de l'internaute
    $terme = strip_tags($terme); //pour supprimer les balises html dans la requête
    $terme = addslashes($terme); //pour ajouter des slashes pour prendre en compte les apostrophes

    if (isset($terme)) {
        $terme = strtolower($terme);
        $select_terme = $pdo->prepare("SELECT titre, img, type, format, id_photo, credit, tags, datefin FROM photo WHERE titre LIKE ? OR img LIKE ? OR type LIKE ? OR format LIKE ? OR id_photo LIKE ? OR credit LIKE ? OR tags LIKE ? OR datefin LIKE ?");
        $select_terme->execute(array("%" . $terme . "%", "%" . $terme . "%", "%" . $terme . "%", "%" . $terme . "%", "%" . $terme . "%", "%" . $terme . "%", "%" . $terme . "%", "%" . $terme . "%"));
    } else {
        $message = "Vous devez entrer votre requete dans la barre de recherche";
    }
}
$trouve = false;
$afficheaucun = false; ?>


<div class="container-fluid tm-container-content tm-mt-60">

    <div class="row tm-mb-90 tm-gallery">
        <?php
        while ($terme_trouve = $select_terme->fetch()) { ?>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="assets/images/<?php echo $terme_trouve['img']  ?>" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2><?php echo $terme_trouve['titre']  ?>"</h2>
                        <a href="photo-detail.php?id=<?php echo $terme_trouve['id_photo'] ?>">View more</a>
                    </figcaption>
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light"><?php echo $terme_trouve['img'] ?></span>
                </div>
            </div>

        <?php
        } ?>
    </div>
</div>
<?php


if (!$trouve and !$afficheaucun) {
    echo "Aucun résultat trouvé.";
    $afficheaucun = true;
}


$select_terme->closeCursor();

?>
<?php include "inc\/footer.php" ?>