<link rel="stylesheet" href="./assets/css/style.css">
<?php
require_once "partial/header.php";

require_once "partial/databoard.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/style.css">

    <title>Document</title>
</head>
<body>
<h1 class="p-4 my-5 bg-dark text-danger text-center"> Display </h1>


    
</main>
    
        <table class="table table-hover text-center">
            <thead class="bg-info">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">photo</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Ville</th>
                    <th scope="col">surface</th>
                    <th scope="col">CP</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Description</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($boards as $board) : ?>
                    <tr class="table">
                        <td> <?= $board['id_logement'] ?></td>
                        <td> <?= $board['titre'] ?></td>
                        <td> <?= $board['adresse'] ?></td>
                        <td> <?= $board['cp'] ?></td>
                        <td> <?= $board['ville'] ?></td>
                        <td> <?= $board['surface'] ?></td>
                        <td> <?= $board['prix'] ?> &euro;</td>
                        <td> <?= $board['description'] ?></td>
                        <td> <img src="<?= $board['photo'] ?>" alt=""></td>
                        
                        <td>
                        <form action="delete.php" method="post" 
                            onSubmit="return confirm('ÃŠtes-vous certain ?')">
                            <input hidden type="text" name="appartID" value="<?= $board['id_logement'] ?>">
                        <button class="btn" type="submit">X</button>
                        </form>
                        </td>
                        <td>
                            
                        <form action="edit.php" method="post">
                            <input hidden type="text" name="appartID" value="<?= $board['id_logement'] ?>">
                        <button class="btn" type="submit">Edit</button>
                        </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="newform.php" class="btn btn-info d-block">Ajouter un bien</a>
    </main>
<?php require_once "partial/footer.php" ?>
</body>
</html>



