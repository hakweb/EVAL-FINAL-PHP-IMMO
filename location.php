<?php
require_once "partial/header.php";
?>
<?php
require_once "partial/datalocation.php";
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
        <!-- Ajout vignette avec mise en forme  -->


        <!-- Suite Appel BDD Client +  Concatener -->


        <div class="container">
            <div class="jumbotron my-5 text-center">

                <h2 class="my-5 text-center">
                    Dites Oui ! à vos envies !
                </h2>

                <div class="row flex-lg-row flex-xl-row flex-column">

                    <?php foreach ($envies as $envie) : ?>
                                    <?php if ($envie["type"] == "location") :
                                    ?>
                        <div class="card text-center shadow">
                            <div class="card-header bg-dark text-white mt-3">
                                <h2 class="card-title">



                                        <img src=" <?= $envie["photo"] ?>" width=300px height=150px class="img-fluid" alt="">
                                        <hr>


                                        <p> <?= $envie['titre'] ?></p>
                                        <hr>

                                        <p> Prix : <span> <?= $envie['prix'] ?> € </span>
                                        </p>

                                        <p> Surface : <span> <?= $envie['surface'] ?> m2 </span>
                                        </p>

                                        <p> <span>
                                                <?= $envie['cp'] . " " . $envie['ville'] ?> </span>
                                        </p>
                                        <p> <span> <?= $envie['description'] ?> </span>
                                        </p>
   
                            </div>
                                      
                                <?php endif;
                                endforeach; ?>


                        </div>






    </main>

    <?php
    require_once "partial/footer.php";
    ?>

</body>

</html>