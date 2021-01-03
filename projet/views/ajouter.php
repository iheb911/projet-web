<?php
include "config.php";

if(isset($_POST['valider'])){
	$req="insert into employe (nom,prenom,datedenaissance,salaire) values 
	('".$_POST['nom']."','".$_POST['prenom']."','".$_POST['dateNaissance']."',".$_POST['salaire'].")";
	$db=config::getConnexion();
	$sql=$db->prepare($req);
	$sql->execute();
}
?>

<html>
<head>
<title>gestion des employes</title>
<link href="bootstrap.min.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
<div class="container">
<h3 class="navbar-brand">gestion des employes</h3>
<div class="collapse navbar-collapse">
<ul class="navbar-nav ml-auto">
<li class="nav-item"><a class="nav-link" href="index.html">accueil</a></li>
<li class="nav-item active"><a class="nav-link" href="ajouter.html">ajouter</a></li>
<li class="nav-item"><a class="nav-link" href="afficher.html">afficher</a></li>
</ul>
</div>
</div>
</nav>
<p>ajouter</p>
<form id="myform" method="POST" action="ajouter.php">
<label>nom</label>
<input type="text" class="form-control" name="nom" placeholder="votre nom" style="width:200px"></br>
<label>prenom</label>
<input type="text" class="form-control" name="prenom" placeholder="votre prenom" style="width:200px"></br>
<label>date</label>
<input type="date" class="form-control" name="dateNaissance" placeholder="votre date de naissance" style="width:200px"></br>
<label>salaire</label>
<input type="number" class="form-control" name="salaire" placeholder="votre salaire" style="width:200px"></br>
<input type="submit" value="valider" name="valider">
<input type="reset" value="reset">
</form>

</body>
<script type="text/javascript" src="script.js"></script>

</html>

