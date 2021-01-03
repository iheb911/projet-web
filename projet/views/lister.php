<?php

$objetPdo = new PDO('mysql:host=localhost;dbname=iheb','root','');

$pdoStat = $objetPdo->prepare('SELECT * FROM liste ORDER BY nom ASC');
$executeIsOk = $pdoStat->execute();
$contacts = $pdoStat->fetchAll();
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content=""ie="edge">
    <title>Document</title>
    <style>body{color: darkviolet}</style>
    <link rel="stylesheet" href="styles1.css">

</head>
<body>
<h1>Liste des contacts</h1>

<ul>
    <?php foreach ($contacts as $contact): ?>
    <li>
        <h2 style="color: antiquewhite "><?=$contact['nom'] ?> <?= $contact['prenom'] ?> <?= $contact['time']?>h</h2>

        <a style="color: red" href="supprimer.php?numContact=<?= $contact['id']?>">supprimer</a>
        <a style="color: darksalmon" href="form_modification.php?numContact=<?= $contact['id']?>">modifier</a>
    </li>
    <?php endforeach; ?>


</ul>
<script src="script.js"></script>
</body>
</html>
