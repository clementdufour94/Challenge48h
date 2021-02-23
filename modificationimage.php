<?php include "inc\header.php" ?>


<?php $result = $pdo->query("SELECT * FROM photo WHERE id_photo= " . $_GET['id']);
?>

<?php

if (!empty($_POST)) {
    $pdo = new PDO("mysql:host=localhost;dbname=passionfroid", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));



    $_POST['titre'] = htmlentities($_POST['titre']);
    $titre = $_POST["titre"];
    $titre = addslashes($titre); //pour ajouter des slashes pour prendre en compte les apostrophes


    $_POST['type'] = htmlentities($_POST['type']);
    $type = $_POST["type"];
    $type = addslashes($type); //pour ajouter des slashes pour prendre en compte les apostrophes

    $_POST['produit'] = htmlentities($_POST['produit']);
    $produit = $_POST["produit"];
    $produit = addslashes($produit); //pour ajouter des slashes pour prendre en compte les apostrophes

    $_POST['humain'] = htmlentities($_POST['humain']);
    $humain = $_POST["humain"];
    $humain = addslashes($humain); //pour ajouter des slashes pour prendre en compte les apostrophes

    $_POST['institutionnelle'] = htmlentities($_POST['institutionnelle']);
    $institutionnelle = $_POST["institutionnelle"];
    $institutionnelle = addslashes($institutionnelle); //pour ajouter des slashes pour prendre en compte les apostrophes

    $_POST['format'] = htmlentities($_POST['format']);
    $format = $_POST["format"];
    $format = addslashes($format); //pour ajouter des slashes pour prendre en compte les apostrophes

    $_POST['credit'] = htmlentities($_POST['credit']);
    $credit = $_POST["credit"];
    $credit = addslashes($credit); //pour ajouter des slashes pour prendre en compte les apostrophes

    $_POST['droits'] = htmlentities($_POST['droits']);
    $droits = $_POST["droits"];
    $droits = addslashes($droits); //pour ajouter des slashes pour prendre en compte les apostrophes

    $_POST['copyright'] = htmlentities($_POST['copyright']);
    $copyright = $_POST["copyright"];
    $copyright = addslashes($copyright); //pour ajouter des slashes pour prendre en compte les apostrophes

    $_POST['tags'] = htmlentities($_POST['tags']);
    $tags = $_POST["tags"];
    $tags = addslashes($tags); //pour ajouter des slashes pour prendre en compte les apostrophes

    $_POST['datefin'] = htmlentities($_POST['datefin']);

    //$req = $pdo->prepare("INSERT INTO photo (titre, type, produit, humain, institutionnelle, format, credit, droits, copyright, datefin, tags) VALUES ('$titre', '$type', '$produit', '$humain', '$institutionnelle', '$format', '$credit', '$droits','$copyright', '$_POST[datefin]','$tags') ;");
    //$req->execute();


    $req = $pdo->exec("UPDATE photo SET titre= '$titre', type='$type', produit='$produit', humain='$humain', institutionnelle='$institutionnelle', format='$format', credit='$credit', droits='$droits', copyright='$copyright', datefin='$_POST[datefin]', tags='$tags'  WHERE id_photo = " . $_GET['id']);

?> <div class="alert alert-success">
        <b>Votre image à bien été modifier</b>
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    </div>
    <?php
    header("Refresh: 3 ; url= modif.php");;
    ?>

<?php } ?>
<div class="container-fluid tm-container-content tm-mt-60">
    <form method="POST" action="" enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm-4">
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <label>Titre</label>
                    <input class="form-control" type="text" name="titre" required>
                    <br>


                    <label>Type :</label>
                    <select class="form-control" name="type">
                        <option value="PassionFroid">Photo PassionFroid</option>
                        <option value="fournisseur">Photo fournisseur</option>
                        <option value="logo">logo</option>
                    </select>
                    <br>



                    <label>Photo avec un produit ?</label>
                    <select class="form-control" name="produit">
                        <option value="oui">Oui</option>
                        <option value="non">Non</option>

                    </select>
                    <br>

                    <label>Photo avec un humain ?</label>
                    <select class="form-control" name="humain">
                        <option value="oui">Oui</option>
                        <option value="non">Non</option>

                    </select>
                    <br>

                    <label>Photo avec une institution ?</label>
                    <select class="form-control" name="institutionnelle">
                        <option value="oui">Oui</option>
                        <option value="non">Non</option>

                    </select>
                    <br>

                    <label>Format de la photo ?</label>
                    <select class="form-control" name="format">
                        <option value="vertical">Vertical</option>
                        <option value="horizontale">Horizontale</option>

                    </select>
                    <br>

                    <label>Crédits photo</label>
                    <input class="form-control" type="text" name="credit" required>
                    <br>

                    <label>Droits d'utilisation limité ?</label>
                    <select class="form-control" name="droits">
                        <option value="oui">Oui</option>
                        <option value="non">Non</option>

                    </select>
                    <br>

                    <label>Copyright</label>
                    <input class="form-control" type="text" name="copyright" required>
                    <br>


                    <label>Date de fin des droits d'utilisation</label>
                    <input class="form-control" type="datetime-local" name="datefin" min="2020-09-20" max="2030-12-31" required>
                    <br>

                    <label>Tags</label>
                    <input class="form-control" type="text" name="tags" required>
                    <br>
                </div>
            </div>



            <div class="col-sm-6 text-right">
                <input class="btn btn-primary" type="submit" value="Enregistrer les informations">
            </div>
        </div>




    </form>
</div>

<?php include "inc\/footer.php" ?>