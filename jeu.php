<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--²lien avec mon Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--²lien avec mon fchier css -->
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
<?php  
$aDeviner = 150;
if ($_GET['chiffre'] > $aDeviner): ?>
    <p>Le chiffre est trop grand</p>
<?php elseif ($_GET['chiffre'] < $aDeviner): ?>
    <p>Le chiffre est trop petit</p>
<?php else: ?>
    <p>Bravo! Vous avez deviné le chiffre.</p>
<?php endif ?>
<?php require_once 'header.php'; ?>
<form action="jeu.php" method="GET" >
    <input type="number" name="chiffre" placeholder="entre 0 et 1000">
    <button type=submit>Deviner</button>
</form>

<?php require_once 'footer.php' ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>