<!-- Création du formulaire dd'Ajout Annonce Immo-->
<!-- Preparer la Base de Données PHmyAdmin -->


<!-- inclure le header  -->
<?php
require_once "partial/header.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>

<body>

    <main class="container">

        <h1 class="p-4 my-5 bg-dark text-danger text-center">Formulaire</h1>

<!--  -->
        <form class="bg-light shadow p-3 form-group col-6 m-auto border" action="newformadd.php" method="post">
            <input type="text" class="form-control my-2" name="titre" placeholder="titre">
            <input type="text" class="form-control my-2" name="adresse" placeholder="adresse">
            <input type="number" class="form-control my-2" name="cp" placeholder="cp">
            <input type="text" class="form-control my-2" name="ville" placeholder="ville">
            <input type="number" class="form-control my-2" name="surface" placeholder="surface">
            <input type="number" class="form-control my-2" name="prix" placeholder="prix">
            <input type="file" class="form-control my-2" name="photo" placeholder="photo">
            <select name="type"required>
            <option value="vente">Vente</option>
            <option value="location">Location</option>


            <textarea type="text" class="form-control my-2" name="description" placeholder="une description..-"></textarea>
            <br>
            <button type="submit" class="m-auto my-2 d-block btn btn-success">Ajouter</button>
        </form>
    </main>
    <!-- Inclure le Footer  -->
    <?php
    require_once "partial/footer.php";
    ?>
</body>

</html>