<?php

include '../includes/script/printTest.php';

// printTest();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include '../includes/components/head.php' ?>
    <title>Vanilla_2024</title>
</head>

<body>
    <?php include '../includes/components/header.php' ?>
    <section id="createAccount">
        <h3>Cree votre compte</h3>
        <form action="../includes/script/addNewAccount.php" method="POST">
            <input type="text" id="firstname" placeholder="Prenom" require>
            <input type="text" id="lastname" placeholder="Nom" require>
            <input type="email" id="email" placeholder="Email" require>
            <input type="password" id="password" placeholder="Mot de Passe" require>
            <input type="password" id="passwordVerify" placeholder="Confirmer" require>
            <input type="submit" class="btn btn-primary">
        </form>
        <a href="./connecting.php" class="btn btn-secondary">Connectez Vous</a>
    </section>
    <?php include '../includes/components/footer.php' ?>
</body>

</html>