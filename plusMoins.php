<?php 

require_once __DIR__. '/templates/header.php';
require_once ('./lib/tools.php');
require_once ('./lib/recipe.php');

if(isset($_POST['saveRecipe'])){
    saveRecipe($pdo, $_POST['category'], $_POST['title'], $_POST['description'], $_POST['ingredients'], $_POST['instructions'], null);

}

?>

    <section class="container">
        <!--enctype="multipart/form-data : permet l'envoi de fichier à la BDD-->
        <form methode="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="title" class="form-label">Titre</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <div class="mb-3">
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control" ></textarea>
            </div>
            <div class="mb-3">
                <label for="ingredients" class="form-label">Description</label>
                <textarea name="ingredients" id="ingredients" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label for="instructions" class="form-label">Instructions</label>
                <textarea name="instructions" id="instructions" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Categorie</label>
                <select name="category" id="category" cols="30" rows="10" class="form-control">
                    <option value="1">Entrée</option>
                    <option value="2">Plat</option>
                    <option value="3">Dessert</option>
                </select>
            </div>
            <div>
                <label for="file">Image de la recette</label>
                <input type="file" name="file" id="file" class="pb-3">
            </div>
            <input type="submit" value="Enregristrer" name="saveRecipe" class="btn btn-primary">
        </form>

    </section>
    


<?php require_once __DIR__. '/templates/footer.php' ?>  