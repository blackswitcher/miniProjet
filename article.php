<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- lien avec mon fchier css -->
    <link rel="stylesheet" href="CSS/style.css">
    <!-- Bootstrap CSS--> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <!-- Ici, on inclut le fichier header.php -->
    <?php
    $title = 'Articles BBO';
    $nav = 'articles';
    include_once 'header.php';
?>
    <main>
        <h1>Articles</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit </p>
    </main>
    <footer>
        <!--ici j'inclu mon footer-->
        <?php
        include_once 'footer.php';
        ?>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>