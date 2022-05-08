<?php
require_once "partial/header.php";
?>
<?php
require_once "partial/dataclient.php"
?>
<!-- APPEL BDD Client  -->

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="./asset/style.css">
    <title>Ozark Inc.</title>
</head>

<body>
    <main>
        <!-- Ajouter  -->
        <div class="container">
        <div class="jumbotron my-5 text-center border border-dark">
            <h1 class="display-3 text-danger">
                Ozark Inc.
            </h1>
            <p class="lead"> propose une sélection de biens immobiliers de prestige dans les plus belles régions de France </p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" routerLink="cars" role="button">VIP</a>
            </p>
        </div>
        <h2 class="my-5 text-center"> Acteur majeur de l’immobilier de luxe <br>& ambassadeur de l’art de vivre</h2>
        <div class="card-deck  justify-content-center">
            <!-- Recup Data  -->
            <div class="card text-center shadow">
                <div class="card-header bg-dark text-white">
                    <h2 class="card-title">

                        <!-- Suite Appel BDD Client +  Concatener -->
                        <?= $users[0]['prenom'] . " " . $users[0]['nom'] ?>
                    </h2>
                </div>

                <div class="card-body">

                    <img src=" <?= $users[0]['photo'] ?>" width=300px height=150px class="img-fluid" alt="photo Marty">
                    <hr>

                    <p>Origine: <?= $users[0]['origine'] ?></p>

                    <p>Spécialité:
                        <span class=" badge badge-primary"><?= $users[0]['specialite'] ?></span>
                    </p>

                    <button class="btn btn-success mx-2 border">
                        <i class="fas fa-thumbs-up"></i>
                    </button>

                    <button class="btn btn-danger border">
                        <i class="fas fa-thumbs-down"></i>
                    </button>

                </div>
            </div>
            <div class="card text-center shadow">
                <div class="card-header bg-dark text-white">
                    <h2 class="card-title">

                        <!-- Suite Appel BDD Client +  Concatener -->
                        <?= $users[1]['prenom'] . " " . $users[1]['nom'] ?>
                    </h2>
                </div>

                <div class="card-body">

                    <img src=" <?= $users[1]['photo'] ?>" width=300px height=150px class="img-fluid" alt="photo Marty">
                    <hr>

                    <p>Origine: <?= $users[1]['origine'] ?></p>

                    <p>Spécialité:
                        <span class=" badge badge-danger"><?= $users[1]['specialite'] ?></span>
                    </p>

                    <button class="btn btn-success mx-2 border">
                        <i class="fas fa-thumbs-up"></i>
                    </button>

                    <button class="btn btn-danger border">
                        <i class="fas fa-thumbs-down"></i>
                    </button>

                </div>
            </div>
        </div>
</div>
    </main>

    <?php
    require_once "partial/footer.php";
    ?>

</body>

</html>