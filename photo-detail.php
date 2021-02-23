<?php include "inc\header.php" ?>



<?php if (!empty($_GET)) { ?>
    <?php $result = $pdo->query("SELECT * FROM photo WHERE id_photo= " . $_GET['id']);
    while ($photo = $result->fetch(PDO::FETCH_OBJ)) { ?>
        <div class="container-fluid tm-container-content tm-mt-60">
            <div class="row mb-4">
                <h2 class="col-12 tm-text-primary-center">
                    <center><?php echo "$photo->titre" ?>
                </h2>
                </center>
            </div>
            <div class="row tm-mb-90">
                <div class="col-xl-12 col-lg-7 col-md-6 col-sm-12">
                    <center> <img src="assets/images/<?php echo "$photo->img" ?>" alt="Image" class="img-fluid"></center>
                </div>
                <div class="col-xl-25 col-lg-25 col-md-25 col-sm-25">
                    <div class="tm-bg-gray tm-video-details">
                        <div class="mb-4 d-flex flex-wrap">
                            <div class="mr-4 mb-2">
                                <h3 class="tm-text-gray-dark mb-3">Type d'image: </h3>
                                <p>
                                    <?php echo "$photo->type" ?>
                                </p>
                            </div>
                            <div class="mr-4 mb-2">
                                <h3 class="tm-text-gray-dark mb-3">Photo avec Produit: </h3>
                                <p>
                                    <?php echo "$photo->produit" ?>
                                </p>
                            </div>
                            <div class="mr-4 mb-2">
                                <h3 class="tm-text-gray-dark">Photo avec Humain: </h3>
                                <p>
                                    <?php echo "$photo->humain" ?>
                                </p>
                            </div>
                            <div class="mr-4 mb-2">
                                <h3 class="tm-text-gray-dark mb-3">Photo institutionnelle: </h3>
                                <p>
                                    <?php echo "$photo->institutionnelle" ?>
                                </p>
                            </div>
                            <div class="mr-4 mb-2">
                                <h3 class="tm-text-gray-dark mb-3">Format: </h3>
                                <p>
                                    <?php echo "$photo->format" ?>
                                </p>
                            </div>
                            <div class="mr-4 mb-2">
                                <h3 class="tm-text-gray-dark mb-3">Crédits photos: </h3>
                                <p>
                                    <?php echo "$photo->credit" ?>
                                </p>
                            </div>
                            <div class="mr-4 mb-2">
                                <h3 class="tm-text-gray-dark mb-3">Droit d'utilisation limités: </h3>
                                <p>
                                    <?php echo "$photo->droits" ?>
                                </p>
                            </div>
                            <div class="mr-4 ">
                                <h3 class="tm-text-gray-dark mb-3">Copyright: </h3>
                                <p>
                                    <?php echo "$photo->copyright" ?></p>
                            </div>
                            <div class="mr-4">
                                <h3 class="tm-text-gray-dark mb-3">Date de fin de droits d'utilisation: </h3>
                                <p>
                                    <?php echo "$photo->datefin" ?>
                                </p>
                            </div>
                        </div>
                        <div>
                            <h3 class="tm-text-gray-dark mb-3">Tags : </h3>
                            <a href="#" class="tm-text-primary mr-4 mb-2 d-inline-block"> <?php echo "$photo->tags" ?></a>
                        </div>
                        <?php
                        if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
                        ?>

                            <div class="btn-group" role="group" aria-label="Un groupe de boutons">
                                <a href="modificationimage.php?id=<?php echo $photo->id_photo ?>"><button type="button" type="submit" class="btn btn-primary">Modifier</button></a>
                                <a href="supp.php?id=<?php echo $photo->id_photo ?>"><button type="button" type="submit" class="btn btn-danger">Supprimer</button></a>

                            </div>
                        <?php
                        } else {
                        } ?>
                    </div>

                </div>

            </div>


        </div>
    <?php } ?>
<?php } else { ?>
    <div class="alert alert-danger" role="alert">
        Impossible d'afficher les détails de cette actualitée
    </div>
<?php } ?>

<?php include "inc\/footer.php" ?>