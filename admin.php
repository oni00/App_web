<?php

$nom = 'admin';
$prenom = 'admin';
$email = 'test@test.com';
$mot_de_passe = 'TestEncore';
$role = 'administrateur';
$status = 'actif';

require "../config/db.php";

$mdphash = password_hash($mot_de_passe, PASSWORD_DEFAULT);


$insert = "insert into utilisateur (nom, email, password_hash, role,statut) values (?,?,?,?,?)";
$req = $connexion->prepare($insert);
$req->bind_param("sssss", $nom, $email, $mdphash, $role, $status);
$req->execute(); 



?>

