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

<?php require_once 'header.php'; ?>
<?php require_once 'function.php'; ?>
<?php  
$aDeviner = 150;
$erreur= null;
$succes = null;
$value =null;
if (isset($_GET['chiffre'])) {
    if ($_GET['chiffre'] > $aDeviner) {
        $erreur = 'Votre chiffre est trop grand';
    } elseif ($_GET['chiffre'] < $aDeviner) {
        $erreur = 'Votre chiffre est trop petit';
    } else {
        $succes = 'Bravo! Vous avez deviné le chiffre.';
    }
    $value = (int)$_GET['chiffre'];
}
?>
<?php if ($erreur): ?>
    <div class="alert alert-danger">
        <?= $erreur ?>
    </div>
<?php elseif ($succes): ?>
    <div class="alert alert-success">
        <?= $succes ?>
    </div>
<?php endif ?>

<form action="jeu.php" method="GET" >
    <div class="form-group">
    <input type="number" class="form-control" name="chiffre" placeholder="entre 0 et 1000" value="<?= $value ?>">
    </div>
<!--autre methode possible pour eviter que l'utilisateur ne puisse pas passer par le url
n <input type="number" name="chiffre" placeholder="entre 0 et 1000" values=" htmlentities($_GET['chiffre']) -->
    <button type=submit class="btn btn-primary">Deviner</button>
</form>
<br>
<br>
<br>
<?php
$parfums=[
    'vanille' => 3,
    'fraise' => 5,
    'chocolat' => 2
];
$cornets = [
    'pot' => 2,
    'cornet' => 3
];

$supplements = [
    'pepites' => 1,
    'chantilly' => 0.5
];

?>
<!--
    <div class="form-group"> les checkbox me permettent de faire des selections multiple je doit creer une function pour garder les choix des utilisateurs
        <input type="checkbox" name = "parfum[]" value="vanille">Vanille
        <input type="checkbox" name = "parfum[]" value="fraise">Fraise
        <input type="checkbox" name = "parfum[]" value="chocolat">Chocolat
    </div>
    <div class="form-group"><                         les inputs de type radio me permettent de faire des choix uniques
        <input type="radio" name = "cornet" value="pot">Pot
        <input type="radio" name = "cornet" value="cornet">Cornet
    </div>
    <div class="form-group">
        <input type="checkbox" name = "supplements" value="pepites">Pépites de chocolat
        <input type="checkbox" name = "supplements" value="chantilly">Chantilly
    </div>
    -->
<!--la zone ci dessus peut etre retravailler de cette maniere avec du php -->  
<form action="/jeu.php" method="GET">
        <?php foreach ($parfums as $parfum => $prix): ?>
            <div class="checkbox">
                <label>
                    <?= 
                    checkIt('parfum', $parfum, $_GET); 
                    ?> 
                    <?= $parfum; ?> - <?= $prix; ?> €
                </label>
            </div>
        <?php endforeach; ?>
        <?php
    var_dump($_GET); // Place ça ici pour voir le contenu de $_GET
?>
        <?php foreach ($cornets as $cornet => $prix): ?>
            <div class="checkbox">
                <label>
                    <?= 
                    checkedRadio('cornet', $cornet, $_GET); 
                    ?> 
                    <?= $cornet; ?> - <?= $prix; ?> €
                </label>
            </div>
        <?php endforeach; ?>
        <?php foreach ($supplements as $supplement => $prix): ?>
            <div class="checkbox">
                <label>
                    <?= 
                    checkIt('supplement', $supplement, $_GET); 
                    ?> 
                    <?= $supplement; ?> - <?= $prix; ?> €
                </label>
            </div>
        <?php endforeach; ?>
    <button type="submit" class="btn btn-primary">Commander</button>
</form> 
<?php require_once 'footer.php' ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>