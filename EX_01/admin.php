<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" enctype="multipart/form-data" action="admin.php">
    <p>
    <input type="file" name="photo">
    <input type="submit" name="upload" value="Uploader">
    <strong> Note:</strong> Seul les formats jpeg, png et jpg ne sont autorisés. La taille maximale est de 2Mo.
    </p>
    </form>

<?php
session_start();

    if (filesize(string['photo'])>2097152)
    {
        echo "<p> La taille de la photo est trop élevée.</p>";
    }

    if (filetype (string ['photo']!= jpeg, jpg, png))
    {
        echo "<p>Le format n'est pas accepté.</p>";
    }

    $nombredecaractères=strlen(['photo']);
    if ($nombredecaractères < 4)
    {
        echo "<p> Le nombre de caractères n'est pas suffisant. </p>" ;
    }
    $_SESSION['titre'];
    $_SESSION['description'];
?>