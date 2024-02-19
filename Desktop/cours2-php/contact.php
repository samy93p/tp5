<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>contact-Formulaires</title>
</head>
<body>
    

<?php require_once(__DIR__."/head.php") ?>
<form action="contactValide.php" method="">
    <div class="nb-3">
        <label for="email">email</label>
        <input type="email" name="email" id="email">
    </div>

<div class="nb-3">
    <label for="prenom">nom</label>
    <input type="text" name="prenom">
</div>

<div class="nb-3">
    <label for="message">message</label>
    <textarea name="message" id="message" cols="30" rows="10"></textarea>
</div>

<button type="submit" class="btn btn-primary">Envoyer</button>
</form>

<?php require_once(__DIR__."/footer.php") ?>
</body>
</html>