<?php
    // Recuperation des données entrée par le client, mise en variable

    $mail = htmlspecialchars($_POST['mail']);
    $mdp = htmlspecialchars($_POST['mdp']);

    require ('log.php'); // Recupère les logs accès BDD

    // Test de l'existance du profil
    $sqls = 'SELECT * FROM user WHERE mail = ?';
    $stmt = $pdo->prepare($sqls);
    $stmt->execute([$mail]);
    $d = $stmt->fetch();

    $sqli = 'INSERT INTO user (mail,mdp) VALUES (?,?)';
    $stmt = $pdo->prepare($sqli);
    $stmt->execute([$mail,$mdp]);

    if($mail == $d['mail']){
        header('location:erreur.php');
    }
    else{
        $sqli = 'INSERT INTO user (mail,mdp) VALUES (?,?)';
        $stmt = $pdo->prepare($sqli);
        $stmt->execute([$mail,$mdp]);
        header('location:../commande.html'); ;
        }
?>