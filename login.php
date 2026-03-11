
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
    print_r($_POST);
    $email = $_POST["email"];
    $mot_de_passe = $_POST["mot_de_passe"];

    if (empty($email) || empty ($mot_de_passe)){
        echo "veuilez remplir tous les champs";
    }


    require "db.php";
    
    
    
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

    <form action="#" method="post">

    <label for="email">email</label>
    <input type="email" name="email">
    <label for="mot de passe">mot de passe</label>
    <input type="password" name="mot_de_passe">
    <button type="submit" name="login">login</button>
  
    
    </form>

</body>

</html>
