<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <?php require_once(__DIR__ . "/head.php") ?>

<h1>Page de validation formulaire</h1>

<?php if (!isset($_GET['recherche']) || empty($_GET['recherche'])) {
        echo " <h2>merci de remplir le formulaire </h2>";
    } else { 
?>
        
<div>
    <h2>votre recherche:</h2>
    <p><?php echo $_GET["recherche"] ?></p>
</div>

<div>
    <h2>est-ce une recherche global</h2>
    <p><?php if( isset($_GET['global'])){
        echo 'oui';
    }else{
        echo 'non';
    }
     ?></p>
</div>

<div>
    <h2>votre tri</h2>
    <p><?php echo $_GET["tri"] ?></p>
</div>

<?php } ?>

<?php require_once(__DIR__."/footer.php") ?>

</body>

</html>