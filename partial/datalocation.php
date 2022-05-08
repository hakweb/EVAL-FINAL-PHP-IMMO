<?php
$dbh = new PDO('mysql:host=localhost;dbname=immoa3l', "root","");

$req  = $dbh->prepare("SELECT * FROM logement");
$req->execute();
$envies = $req->fetchAll(PDO::FETCH_ASSOC);
$req->closeCursor();

// var_dump($users);

?>