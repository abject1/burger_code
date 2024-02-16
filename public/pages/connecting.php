<?php

include '../includes/script/printTest.php';

// printTest();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include '../includes/components/head.php' ?>
    <link rel="stylesheet" href="../css/libs/bodyFlex.css">
    <title>Vanilla_2024</title>
</head>

<body>
    <?php include '../includes/components/header.php' ?>
    <section id="connecting">
        <h3>Connectez-Vous</h3>
        <form action="..includes/script/loggeding.php" method="POST">
            <label for="email">Email : </label>
            <input type="email" require id="email">
            <label for="password">Mot de passe : </label>
            <input type="password" require id="password">
            <input type="submit" class="btn btn-primary">
        </form>
        <a href="./createAccount.php" class="btn btn-secondary">Cree un compte</a>
    </section>
    <?php include '../includes/components/footer.php' ?>
</body>

</html>