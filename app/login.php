<?php
require_once '/app/env/variables.php';

$users = [
    [
        'email' => 'wissem@test.com',
        'password' => 'test123'
    ]
];

//on verifie que les donne
if (!empty($_POST['email']) && !empty($_POST['password'])) {
    //todo
} else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errorMeesage = "Veullier remplir les tout les champs";
}



?>


<!DOCTYPE html>
<html lang="fr-fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= $cssPath; ?>structure.css">
</head>

<body>
    <?php require_once '/app/layout/header.php'; ?>

    <main>
        <section class="container mt-2">
            <h1 class="text-center mt-2">Connexion</h1>
            <form action="/login.php" method="POST">

                <?php if (isset($errorMessage)) : ?>

                    <div class="alert alert-danger">

                        <?= $errorMessage; ?>

                    </div>

                <?php endif; ?>

                <div class="group-input">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="uneadresse@test.fr" required>
                </div>
                <div class="group-input">
                    <label for="email">Mots de passe</label>
                    <input type="password" name="password" id="password" placeholder="s3cr3t" required>
                </div>
                <button type="submit" class="btn btn-primary">Connections</button>
            </form>

        </section>
    </main>
</body>

</html>