
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
    print_r($_POST);
    $email = $_POST["email"];
    $password_hash = $_POST["mot_de_passe"];

    if (empty($email) || empty ($password_hash)){
        echo "veuilez remplir tous les champs";
    }


    require "db.php";
    
    $selectUser = "select * from utilisateur where email = ?";
    $stmt = $connect->prepare($selectUser);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $userInfo= $result->fetch_assoc();

    if (password_verify($password_hash, $userInfo["passw"])){

        session_start();
        $_SESSION["user_id"]=$userInfo["id"];
        $_SESSION["email"]=$userInfo["email"];
        $_SESSION["role"]=$userInfo["role"];
        
        header("location: index.php");
        exit;

    }else{

        echo "mot de passe ou email incorrect";
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

    <form action="#" method="post">

    <label for="email">email</label>
    <input type="email" name="email">
    <label for="mot de passe">mot de passe</label>
    <input type="password" name="mot_de_passe">
    <button type="submit" name="login">connectez-vous</button>
     <a href="inscription.php">Pas encore inscrit ?</a>
    
    </form>

</body>
</html>
