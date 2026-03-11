<?php

$nom = 'admin';
$prenom = 'admin';
$email = 'test@test.com';
$mot_de_passe = 'TestEncore';
$role = 'administrateur';

require "db.php";

$mdphash = password_hash($mot_de_passe, PASSWORD_DEFAULT);


$insert = "insert into utilisateur (nom, prenom, email, mot_de_passe, role) values (?,?,?,?,?)";
$req = $connect->prepare($insert);
$req->bind_param("sssss", $nom, $prenom, $email, $mdphash, $role );
$req->execute(); 



?>