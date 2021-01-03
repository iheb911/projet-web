<?php

$objetPdo = new PDO('mysql:host=localhost;dbname=iheb','root','');

$pdoStat =$objetPdo->prepare('DELETE FROM liste WHERE id=:num LIMIT 1');

$pdoStat->bindValue(':num',$_GET['numContact'],PDO::PARAM_INT);
$executeIsOk = $pdoStat->execute();

if ($executeIsOk){
    $message = 'le contact a ete supprime';
}
else{
    $message = 'echec de la suppression du contact';
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
    <link rel="stylesheet" href="css/wing.css">
</head>
<body>
<h1>suppression</h1>
<p><?= $message ?></p>
</body>
</html>


