<?php 

require_once __DIR__. '/templates/header.php';
require_once ('lib/recipe.php')


?>


        <section class="container text-center">
            <article class="row text-center">
                <h1 class="mb-3">Liste des recettes</h1>
               <?php foreach ($recipes as $key => $recipe) { 

                 require __DIR__.'/templates/recipe_part';

               }?>

            </article>
        </section>

<?php require_once __DIR__. '/templates/footer.php' ?>  