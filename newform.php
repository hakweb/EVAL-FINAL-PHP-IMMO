<!DOCTYPE html>
<html lang="en">

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


        <form class="bg-light shadow p-3 form-group col-6 m-auto border" action="createValid.php" method="post">
            <input type="text" class="form-control my-2" name="nom" placeholder="titre">
            <input type="text" class="form-control my-2" name="possesseur" placeholder="adresse">
            <input type="text" class="form-control my-2" name="console" placeholder="cp">
            <input type="number" class="form-control my-2" name="prix" placeholder="ville">
            <input type="number" class="form-control my-2" name="nbre_joueurs_max" placeholder="surface">
            <input type="number" class="form-control my-2" name="nbre_joueurs_max" placeholder="prix">
            <input type="number" class="form-control my-2" name="nbre_joueurs_max" placeholder="photo">
            <input type="number" class="form-control my-2" name="nbre_joueurs_max" placeholder="type">
            <input type="number" class="form-control my-2" name="nbre_joueurs_max" placeholder="description">

            <textarea type="text" class="form-control my-2" name="commentaires" placeholder="un commentaire..-"></textarea>
            <br>
            <button type="submit" class="m-auto my-2 d-block btn btn-success">Ajouter</button>
        </form>
    </main>

</body>

</html>