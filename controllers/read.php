<?php

    // Recup des données du formulaire
    $mail = htmlspecialchars($_POST['mail']);
    $mdp = htmlspecialchars($_POST['mdp']);
    
    // Variables Database
    $DB_NAME = "worldofface";
    $DB_DSN = "mysql:host=localhost;dbname=".$DB_NAME;
    $DB_USER = "adrien"; 
    $DB_PASSWORD = "adrien"; 

    // Connexion Database
    try {
        $pdo = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (\Throwable $th) {
        die('error sql connection');
    } 

    // Preparation, envoie de la commande sql et lecture du profil corespondant
    $sql = 'SELECT * FROM user WHERE mail = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$mail]);
    $d = $stmt->fetch();
    print_r ($d);

    // Réponse sur le navigateur
    if($mail == $d['mail'] && $mdp == $d['mdp']){

        header('location: ../commande.html'); ;
        }
        else
            {
            echo "Pas de profil correspondant";
    }
?>