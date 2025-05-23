<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mini site MVC PHP</title>
</head>
<body>
    <nav>
        <a href="index.php?action=list">Liste des produits</a>
    </nav>
    <hr>
    <?php
    // Inclusion de la vue principale
    require "views/{$view}.php";
    ?>
</body>
</html>
