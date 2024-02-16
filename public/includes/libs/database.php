<?php

// Connexion a la base de donnee

function connexion() {
    $servername = "localhost"; // Adresse du serveur MySQL
    $username = "root"; // Votre nom d'utilisateur MySQL
    $password = ""; // Votre mot de passe MySQL
    $dbname = "vanilla_2024"; // Le nom de votre base de données

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérification de la connexion
    if ($conn->connect_error) {
        die("La connexion a échoué : " . $conn->connect_error);
    };

    return $conn;
};

