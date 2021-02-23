<?php include "inc\header.php" ?>
<div class="container-fluid tm-container-content tm-mt-60">
    <div class="row tm-mb-90 tm-gallery">
        <?php $result = $pdo->query("SELECT * FROM photo");
        while ($photo = $result->fetch(PDO::FETCH_OBJ)) { ?>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="assets/images/<?php echo $photo->img  ?>" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2><?php echo $photo->titre  ?>"</h2>
                        <a href="modificationimage.php?id=<?php echo $photo->id_photo ?>">Modifier</a>
                    </figcaption>
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light"><?php echo $photo->img ?></span>
                </div>
            </div>

        <?php } ?>
    </div>
</div> <!-- container-fluid, tm-container-content -->
<?php include "inc\/footer.php" ?>