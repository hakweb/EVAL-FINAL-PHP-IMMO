<?php
$dbh = new PDO('mysql:host=localhost;dbname=immoa3l', "root","");

$req  = $dbh->prepare("SELECT * FROM client");
$req->execute();
$users = $req->fetchAll(PDO::FETCH_ASSOC);
$req->closeCursor();

// var_dump($users);

?>
