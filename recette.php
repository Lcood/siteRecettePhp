<?php 

require_once __DIR__. '/templates/header.php';
require_once ('./lib/recipe.php');

$pdo = new PDO('mysql:host=localhost;dbname=siteRecette;charset=utf8', 'root', 'root');

$id = $_GET['id'];
$query = $pdo->prepare("SELECT * FROM recipes WHERE id = :id");
$query->bindParam(':id', $id, PDO::PARAM_INT);
$query->execute();
$recipe = $query->fetch();


?>


    <section class="container col-xxl-8 px-4 py-5">
                <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                    <div class="col-10 col-sm-8 col-lg-6">
                    <img src="<?=_RECIPES_IMG_PATH_.$recipe['image']; ?>" class="d-block mx-lg-auto img-fluid" alt="image_recette" width="350">
                    </div>
                    <div class="col-lg-6">
                        <h1 class="fw-bold lh-1 mb-3"><?=$recipe['title'];?></h1>
                        <p><?=$recipe['description'];?></p>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        </div>
                    </div>
                </div>
    </section>
<?php require_once __DIR__. '/templates/footer.php' ?>  