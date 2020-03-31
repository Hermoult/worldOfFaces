<?php

    // Recup des données du formulaire
    $mail = htmlspecialchars($_POST['mail']);
    $mdp = htmlspecialchars($_POST['mdp']);
    
    require ('log.php'); //Recupère les logs accès BDD

    // Preparation, envoie de la commande sql et lecture du profil corespondant
    $sql = 'SELECT * FROM user WHERE mail = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$mail]);
    $d = $stmt->fetch();

    // Réponse sur le navigateur
    if($mail == $d['mail'] && $mdp == $d['mdp']){
        header('location: ../commande.html'); ;
        }
        else
            {
            echo "Pas de profil correspondant";
    }
?>