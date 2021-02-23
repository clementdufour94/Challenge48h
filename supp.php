<?php include "inc\header.php" ?>

<?php if (!empty($_GET)) {

    //On supprime la table annonce en fonction de l'id de l'annonce
    $pdu = new PDO("mysql:host=localhost;dbname=passionfroid", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $result2 = $pdu->exec("DELETE FROM photo WHERE id_photo= " . $_GET['id']); ?>

    <div class="alert alert-danger">
        <b>La photo est bien supprimé!</b>
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    </div>

    <?php
    header("Refresh: 3 ; url= suppression.php");;
    ?>


<?php } else {
} ?>


<?php include "inc\/footer.php" ?>