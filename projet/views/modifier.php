<?php

$objetPdo = new PDO('mysql:host=localhost;dbname=iheb','root','');

$pdoStat = $objetPdo->prepare('UPDATE liste set nom=:nom, prenom=:prenom, time=:time WHERE id = :num');
$pdoStat->bindValue(':num', $_POST['numContact'], PDO::PARAM_INT);
$pdoStat->bindValue(':nom', $_POST['firstName'], PDO::PARAM_STR);
$pdoStat->bindValue(':prenom', $_POST['lastName'], PDO::PARAM_STR);
$pdoStat->bindValue(':time', $_POST['time'], PDO::PARAM_INT);

$executeIsOk = $pdoStat->execute();

if ($executeIsOk){
    $message = 'le contact a ete mis a jour';
}
else{
    $message = 'echec de la mise a jour du cintact';
}
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0,maximum-scal=1.0,mnimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>modification : résultat</title>

</head>
<body>
<h1>resultat de la modificaton</h1>

<p><?= $message ?></p>
</body>
</html>



