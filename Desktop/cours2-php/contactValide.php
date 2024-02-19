<?php 
// var_dump($_GET['message']);
// $_GET['email']
//
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>contactValide</title>
</head>
<body>
<?php require_once(__DIR__."/head.php") ?>
<h1>Page de validation formulaire</h1>

<?php if (!isset($_GET['email']) || !isset($_GET['message']) || !isset($_GET['prenom']) || !filter_var($_GET['email'], FILTER_VALIDATE_EMAIL) || empty($_GET['message'])) {
        echo " <h2>merci de remplir le formulaire </h2>";
    } else { 
?>
        
<div>
    <h2>votre email:</h2>
    <p><?php echo $_GET["email"] ?></p>
</div>

<div>
    <h2>votre message</h2>
    <p><?php echo $_GET["message"] ?></p>
</div>

<div>
    <h2>votre nom</h2>
    <p><?php echo $_GET["prenom"] ?></p>
</div>

<?php } ?>

<?php require_once(__DIR__."/footer.php") ?>

</body>
</html>