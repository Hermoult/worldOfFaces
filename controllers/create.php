<?php

    // Recuperation des données entrée par le client, mise en variable

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

    // Preparation et execution de la commande sql

    $sql = "INSERT INTO user (mail, mdp) VALUES (?,?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$mail,$mdp,]);
    $d = $stmt->fetch();
    if($mail == $d['mail'] && $mdp == $d['mdp']){

    header('location: ../commande.html');
