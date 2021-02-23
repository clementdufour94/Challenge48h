<?php include "inc\header.php" ?>



<?php




$msg = "";

// Si on appuie sur le bouton Enregistrer alors... 
if (isset($_POST['upload'])) {

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "assets/images/" . $filename;



    // Récuperer toutes les données soumises par le formulaire 
    $sql = "INSERT INTO photo (img) VALUES ('$filename')";

    // Execute query 
    mysqli_query($conn, $sql);

    // Déplacer l'image télécharger dans le dossier : assest/images
    if (move_uploaded_file($tempname, $folder)) {
        $msg = "Image téléchargée avec succès";
    } else {
        $msg = "Erreur lors du téléchargement de l'image";
    }
}
?>

<div class="container-fluid tm-container-content tm-mt-60">
   
        <form method="POST" action="" enctype="multipart/form-data">
        

            <div class="form-group">
                <h3>Photos:</h3>
                <label for="myfile">Selectionnez une première photo:</label>
                <input class="btn btn-primary" type="file" id="url_img" name="uploadfile" required><br><br>

            </div>

            <button type="submit" class="btn btn-primary" name='upload'>Enregister</button>



        </form>
    </div>
</div>

<?php include "inc\/footer.php" ?>