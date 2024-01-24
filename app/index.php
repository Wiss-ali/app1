//cette commande explique le chamain pour aller recuper mon header par exemple
<?php
require_once '/app/env/variables.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php nikzebi</title>
    <link rel="stylesheet" href=" <?= $cssPath; ?>structure.css">
    <link rel="stylesheet" href="assets/index.css">
</head>

<body>
    //recuper le header sur tout les page. (ne pas oublier la commande en haut de page)
    <?php require_once '/app/layout/header.php'; ?>
    <main>
        <h1>hello world</h1>
        <form action="/contact.php" method="POST" enctype="multipart/form-data">
            <label for="prenom">prenom</label>
            <input type="text" name="prenom" id="prenom">
            <label for="nom">nom</label>
            <input type="text" name="nom" id="nom">
            <label for="message">votre message</label>
            <textarea name="message" id="message"></textarea>
            <input type="file" name="image" id="image">
            <button type="submit" class="btn btn-primary">envoyer</button>

        </form>

        <?php var_dump($_POST) ?>
    </main>
</body>

</html>