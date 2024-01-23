<?php
require_once '/app/env/variables.php';

//on verif si on a bien telecharger une image
if (!empty($_FILES['image']) && $_FILES['image']['error'] === 0) {
    //on veriefie la tail du fichier 
    if ($_FILES['image']['size'] < 16000000) {
        //on veriefie l'extention du fichier  
        $fileInfo = pathinfo($_FILES['image']['name']);

        //on recupere l'extensions du fichier upload
        $extension = $fileInfo["extension"];

        //on definit les extensions autorisees
        $extensionAllowed = ['jpg', 'png', 'jpeg', 'svg', 'webp', 'gif'];

        //on verifie que l'extension du fichier est autorise
        if (in_array($extension, $extensionAllowed)) {
            $fileName = $fileInfo['filename'] . '_' . (new DateTime())->format('Y-m-d_H:i:s') . '.' . $extension;

            move_uploaded_file($_FILES['image']['tmp_name'], "/app/uploads/$fileName");
        }
    }
}

?>

<!DOCTYPE html>
<html lang="fr-fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href=" <?= $cssPath; ?>structure.css">
</head>

<body>
    <?php require_once '/app/layout/header.php'; ?>
    <main>
        <h1>votre demande de contact</h1>
        <?php var_dump($_FILES); ?>
        <?php if (!empty($_POST['prenom']) && !empty($_POST["nom"]) && !empty($_POST["message"])) : ?>
            <div class="card">
                <p>prenom: <?= $_POST['prenom']; ?></p>
                <p>nom: <?= $_POST['nom']; ?></p>
                <p>message: <?= $_POST['message']; ?></p>
            </div>
        <?php else : ?>
            <div class="alert alert-danger">veuillez soumettre le formulaire</div>
        <?php endif; ?>
    </main>

</body>

</html>