<h1>Gallery</h1>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima quo vitae fugit nesciunt nam, maxime ab dolorum laboriosam voluptates magnam error alias placeat! Dicta, vero blanditiis. Eaque illo asperiores temporibus?</p>
<section id="gallery" class="row">

<?php
// Le dossier contenant les images c'est bien "./assets/gallery"
$dir = "./assets/gallery/";
// Le tableau $array_img est créé grace à la fonction scandir 
// capable de scanner un dossier (à la recherche de fichiers)
$array_img = scandir($dir);
// Pour chaque entrée dans le tableau $array_img
// Pour chaque fichier se trouvant dans le dossier $dir
foreach($array_img as $src): 
    // On détermine la source complète avec le nom du dossier 
    $file = $dir.$src;
    // Si cette source est bien un fichier on effectue le traitement
    // Sinon rien ;)
    if (is_file($file)):
      ?>
    <article class="col-12 col-sm-6 col-md-4 mb-3">
        <div class="card">
            <img src="<?php echo $dir.$src ?>" class="card-img-top" alt="Ocean">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-dark">Read more</a>
            </div>
        </div>
    </article>
    <?php endif ?>
<?php endforeach; ?>

</section>