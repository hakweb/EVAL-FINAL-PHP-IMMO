
<?php

var_dump($_POST);
var_dump($_FILE);

// se connecter à la BDD 

$bdd = new PDO('mysql:host=localhost;dbname=immoa3l', "root","");

// encore cette bdd ici !

$titre = $_POST['titre'];
$adresse = $_POST['adresse']; 
$cp = $_POST['cp']; 
$ville = $_POST['ville']; 
$surface = $_POST['surface']; 
$prix = $_POST['prix']; 
$photo = $_POST['photo']; 
$type = $_POST['type']; // vente ou location //
$description = $_POST['description']; 

// faire des vérifications avant !

// Renseigner Info Structure de la Table  pour l'insertion  dans la BDD

//Implémenter l'Ajout avec INSERT INTO
$req = "INSERT INTO `logement`(`titre`, `adresse`, `cp`, `ville`, `surface`, `prix`, `photo`, `type`, `description`) VALUES
                    
                    (:titre,
                     :adresse, 
                     :cp, 
                     :ville, 
                     :surface, 
                     :prix, 
                     :photo, 
                     :type, 
                     :description) ";

$stmt = $bdd->prepare($req);
$stmt->bindValue(":titre",$titre, PDO::PARAM_STR);
$stmt->bindValue(":adresse",$adresse, PDO::PARAM_STR);
$stmt->bindValue(":ville",$ville, PDO::PARAM_STR);
$stmt->bindValue(":cp",$cp, PDO::PARAM_INT);
$stmt->bindValue(":surface",$surface, PDO::PARAM_INT);
$stmt->bindValue(":prix",$prix, PDO::PARAM_INT);
$stmt->bindValue(":photo",$photo, PDO::PARAM_STR);
$stmt->bindValue(":type",$type, PDO::PARAM_STR);
$stmt->bindValue(":description",$description, PDO::PARAM_STR);

$result = $stmt->execute(); // return true si good donc si 

$stmt->closeCursor();       // donc SI good redirection avec header

var_dump($stmt = $bdd->prepare($req));
// ah comme ça ! évidemment !

if ($result) {
    header("Location: index.php");
}