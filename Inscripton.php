<?php 
require_once __DIR__. "/db.php";
require_once __DIR__. "/../functions.php";


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["inscription"])) {
    print_r($_POST);
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $mot_de_passe = $_POST["mot_de_passe"];
    $role = "utilisateur";

    if (empty($nom) || empty ($prenom) || empty ($email) || empty ($mot_de_passe)){
        echo "veuilez remplir tous les champs";
    } else {
        $mdphash = password_hash($mot_de_passe, PASSWORD_DEFAULT);

        $insert = "insert into utilisateur (nom, prenom, email, mot_de_passe, role) values (?,?,?,?,?)";
        $req = $connexion->prepare($insert);
        $req->bind_param("sssss", $nom, $prenom, $email, $mdphash, $role );
        $req->execute(); 
        header("Location: login.php");
        exit();
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Formulaire d'inscription</h2>
    <form action="" method="post">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required>

        <label for="prenom">Prénom:</label>
        <input type="text" id="prenom" name="prenom" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="mot_de_passe">Mot de passe:</label>
        <input type="password" id="mot_de_passe" name="mot_de_passe" required>

        <button type="submit" name="inscription">S'inscrire</button>
    </form>
</body>

</html>
