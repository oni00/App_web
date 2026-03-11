<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">accueil</a></li>
            </ul>
        </nav>
    </header>

    // git add . ( tu ajoute tous les fichiers modifiés à la zone de staging)
    // git commit -m "message de commit" ( tu valide tes changements)
    // git push ( tu envoie tes changements vers le dépôt distant) ( tu dois être connecté
     à ton compte github et avoir configuré le dépôt distant pour que cette commande fonctionne)
     // configurer le dépôt distant : git remote add origin <url du dépôt distant>
    // git pull ( tu récupère les changements du dépôt distant 
        et les fusionne avec ta branche locale)
        // git merge ( tu fusionne une branche avec une autre branche)
        // git checkout ( tu change de branche)
        // git branch ( tu affiche la liste des branches)
        // git log ( tu affiche l'historique des commits)
        // git status ( tu affiche l'état de ton dépôt local,
         les fichiers modifiés, les fichiers en staging, etc.)

         1. git init ( tu initialise un dépôt git dans ton projet)
         2. git clone <url du dépôt distant> ( tu clones un dépôt distant sur ton ordinateur)
        3. créer une branche : git branch <nom de la branche> ( tu crée une nouvelle branche)
        4. git checkout <nom de la branche> ( tu change de branche)
        5. git merge <nom de la branche> ( tu fusionne une branche avec une autre branche)
        6. tu merge la dev vers la prod : git checkout prod ( tu change de branche pour la branche prod)
        git merge dev ( tu fusionne la branche dev avec la branche prod)

        7. git pull origin dev ( tu récupère les changements de la branche dev du dépôt distant et les fusionne avec ta branche locale)
        8. git push origin prod ( tu envoie les changements de ta branche prod vers le dépôt distant)
        9. git checkout dev ( tu change de branche pour la branche dev)
        10. git merge prod ( tu fusionne la branche prod avec la branche dev)
        11. git push origin dev ( tu envoie les changements de ta branche dev vers le dépôt distant)
        12. tu créer une branche a partir de la branche dev 
        : git checkout -b <nom de la branche> ( tu crée une nouvelle branche à partir de la branche dev)