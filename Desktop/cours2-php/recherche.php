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


    <form action="rechercheResultat.php" method="">

        <div class="nb-3">
            <label for="recherche">recherche</label>
            <input type="text" name="recherche">
        </div>

        <div>
            <input type="checkbox" id="global" name="global" checked />
            <label for="global">global</label>
        </div>

        <label for="tri">faire un tri</label>

        <select name="tri" id="tri">
            <option value="categorie">categorie</option>
            <option value="nom">nom</option>
            <option value="date">date</option>
        </select>

        <button type="submit">valider</button>

    </form>
    <?php require_once(__DIR__ . "/footer.php") ?>
</body>

</html>