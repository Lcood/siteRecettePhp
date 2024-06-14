<?php 

require_once __DIR__. '/templates/header.php';
require_once ('./lib/recipe.php');

$id = $_GET['id'];

//var_dump($recipes[$id]);

?>


    <section class="container col-xxl-8 px-4 py-5">
                <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                    <div class="col-10 col-sm-8 col-lg-6">
                    <img src="<?=_RECIPES_IMG_PATH_.$recipes[$id]['image']; ?>" class="d-block mx-lg-auto img-fluid" alt="image_recette" width="350">
                    </div>
                    <div class="col-lg-6">
                        <h1 class="fw-bold lh-1 mb-3"><?=$recipes[$id]['title'];?></h1>
                        <p><?=$recipes[$id]['description'];?></p>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        </div>
                    </div>
                </div>
    </section>
<?php require_once __DIR__. '/templates/footer.php' ?>  