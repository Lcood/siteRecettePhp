<?php 

require_once __DIR__. '/templates/header.php';
require_once ('./lib/tools.php');
require_once ('./lib/recipe.php');


$id = (int)$_GET['id'];
$recipe = displayRecipesById($pdo, $id);

    if($recipe) {
        $ingredients = linesToArray($recipe['ingredients']);
        $instructions = linesToArray($recipe['instructions']);
?>

        <section class="container col-xxl-8 px-4 py-5">
                    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                        <div class="col-10 col-sm-8 col-lg-6">
                        <img src="<?=getRecipeImage($recipe['image']);?>" class="d-block mx-lg-auto img-fluid" alt="image_recette" width="350">
                        </div>
                        <div class="col-lg-6">
                            <h1 class="fw-bold lh-1 mb-3"><?=$recipe['title'];?></h1>
                            <p><?=$recipe['description'];?></p>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                            </div>
                        </div>
                    </div>
        </section>

        <section class="container">
                    <div class="row flex-lg-row-reverse align-items-center g-3 py-3">
                        <h2>Ingredients</h2>
                        <ul class="list-group">
                            <?php foreach ($ingredients as $key => $ingredient) {?>
                                <li class="list-group-item"><?=$ingredient;?></li>
                            <?php }?>
                        </ul>
                    </div>
        </section>

        <section class="container">
                    <div class="row flex-lg-row-reverse align-items-center g-3 py-3">
                        <h2>Instructions</h2>
                        <ol class="list-group">
                            <?php foreach ($instructions as $key => $instruction) {?>
                                <li class="list-group-item"><?=$instruction;?></li>
                            <?php }?>
                        </ol>
                    </div>
        </section>

    <?php } else {?>
        <div class="container text-center alert alert-danger" role="alert">Cette recette n'existe pas</div>
    <?php }?>


<?php require_once __DIR__. '/templates/footer.php' ?>  