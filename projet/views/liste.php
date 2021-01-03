<?php
$objetPdo = new PDO('mysql:host=localhost;dbname=iheb','root','');

$pdoStat = $objetPdo->prepare('INSERT INTO contact VALUES (NULL, :nom, :prenom, :time)');

$pdoStat->bindValue(':nom', $_POST['lastName'], PDO::PARAM_STR);
$pdoStat->bindValue(':prenom', $_POST['firstName'], PDO::PARAM_STR);
$pdoStat->bindValue(':time', $_POST['time'], PDO::PARAM_INT);
$insertIsOk = $pdoStat->execute();

if($insertIsOk){
    $message = 'le contact a ete ajoute dans la bdd';
}
else{
    $message = 'echec de l\insertion';
}

?>
