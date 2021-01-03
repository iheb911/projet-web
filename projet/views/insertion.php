<?php
$objetPdo = new PDO('mysql:host=localhost;dbname=iheb','root','');
$pdoStat = $objetPdo->prepare('INSERT INTO liste VALUES(NULL, :id, :nom, :prenom, :time)');

$pdoStat->bindValue(':id', $_POST['number'], PDO::PARAM_STR);
$pdoStat->bindValue(':nom', $_POST['lastName'], PDO::PARAM_STR);
$pdoStat->bindValue(':prenom', $_POST['firsttName'], PDO::PARAM_STR);
$pdoStat->bindValue(':time', $_POST['time'], PDO::PARAM_STR);

$insertIsOk = $pdoStat->execute();

if ($insertIsOk){
    $message = 'le contact a ete ajoute dans la dbb';
}
else{
    $message = 'echec de linsertion';
}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0,maximum-scal=1.0,mnimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>document</title>

</head>
<body>
<h1>insertion des contacts</h1>

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

<p><?php echo $message; ?></p>
</body>
</html>