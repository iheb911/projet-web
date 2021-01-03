<?php

$objetPdo = new PDO('mysql:host=localhost;dbname=iheb','root','');
$pdoStat = $objetPdo->prepare('SELECT * FROM liste WHERE id = :num');
$pdoStat->bindValue(':num',$_GET['numContact'],PDO::PARAM_INT);

$executeIsOk = $pdoStat->execute();

$contact = $pdoStat->fetch();
var_dump($contact);

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0,maximum-scal=1.0,mnimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form modification</title>
    <link rel="stylesheet" href="css/wing.css">
</head>
<body>
<h1>modifier un contact</h1>
<form action="modifier.php" method="post">
    <input type="hidden" name="numContact" value="<?= $contact['id'] ?>">
   <p>
       <label for="nom">nom</label>
       <input id="nom" type="text" name="firstName" value="<?= $contact['nom']; ?>">
   </p>
    <p>
        <label for="prenom">prenom</label>
        <input type="text" id="prenom" name="lastName" value="<?= $contact['prenom']; ?>">
    </p>
    <p>
        <label for="time">time</label>
        <input type="number" id="time" name="time" value="<?= $contact['time']; ?>">
    </p>

     <p><input type="submit" value="Enregistrer"></p>
</form>

</body>
</html>
