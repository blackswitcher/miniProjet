<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS--> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- lien avec mon fchier css -->
    <link href="projetYT/css/style.css" rel="stylesheet">
</head>
<body><?php
    $title = 'Accueil BBO';
    $nav = 'index';
    include_once 'header.php';
?>
    <main>
        <section>
            <div>
                <h1 class="h1">Accueil</h1>
                <p></p>
            </div>
        </section>
    </main>
    <footer>
        <section>
            <div>
            <?php
            include_once 'footer.php';
            ?>
        </div>
        </section>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>