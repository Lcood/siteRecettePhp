<?php require_once __DIR__. '/templates/header.php';

require_once('lib/recipe.php')

?>


        <section class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="./assets/images/logo-cuisinea.jpg" class="d-block mx-lg-auto img-fluid" alt="logo" width="350">
                </div>
                <div class="col-lg-6">
                    <h1 class="fw-bold lh-1 mb-3">Nos recettes de cuisine</h1>
                    <p>Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="recettes.php" class="btn btn-primary">Voir les recettes</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="container text-center">
            <article class="row text-center">
               <?php foreach ($recipes as $key => $recipe) { 

                 include __DIR__.'/templates/recipe_part';

               }?>

            </article>
        </section>

<?php require_once __DIR__. '/templates/footer.php' ?>  