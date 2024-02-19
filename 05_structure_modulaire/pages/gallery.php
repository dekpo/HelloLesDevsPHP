<?php
// $array_img = [
//     "https://cdn.pixabay.com/photo/2024/01/11/09/50/village-8501168_1280.jpg",
//     "https://cdn.pixabay.com/photo/2013/08/28/00/54/field-176602_1280.jpg",
//     "https://cdn.pixabay.com/photo/2015/01/28/23/34/mountains-615428_1280.jpg",
//     "https://cdn.pixabay.com/photo/2017/02/01/22/02/mountain-landscape-2031539_1280.jpg",
//     "https://cdn.pixabay.com/photo/2015/12/01/20/28/road-1072823_1280.jpg",
//     "https://cdn.pixabay.com/photo/2016/09/21/04/46/barley-field-1684052_1280.jpg",
//     "https://cdn.pixabay.com/photo/2015/01/28/23/35/hills-615429_1280.jpg",
//     "https://cdn.pixabay.com/photo/2017/06/11/02/05/wheat-2391348_1280.jpg",
//     "https://cdn.pixabay.com/photo/2024/01/11/09/50/village-8501168_1280.jpg",
//     "https://cdn.pixabay.com/photo/2013/08/28/00/54/field-176602_1280.jpg",
//     "https://cdn.pixabay.com/photo/2015/01/28/23/34/mountains-615428_1280.jpg"
// ];
$dir = "./assets/gallery/";
$array_img = scandir($dir);
// var_dump($array_img);
// die();
?>
<h1>Gallery</h1>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima quo vitae fugit nesciunt nam, maxime ab dolorum laboriosam voluptates magnam error alias placeat! Dicta, vero blanditiis. Eaque illo asperiores temporibus?</p>
<section id="gallery" class="row">

<?php foreach($array_img as $src): ?>
    <?php 
    $file = $dir.$src;
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