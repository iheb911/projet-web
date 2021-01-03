<?php
//connexion à la base
$servername = "localhost";
$username = "root";
$password = "";




if (isset($_POST['adresse'])) {
    $adresse = $_POST['adresse'];
    echo $adresse;
}
if ($adresse == null){
    echo ("adresse est vide!!!!!!");
}

if (isset($_POST['password'])) {
    $password=$_POST['password'];
    echo $password;
}
if ($password == null){
     echo ("password est vide!!!!!!");
}

try {
    $conn = new PDO("mysql:host=$servername;dbname=iheb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
  $req=" SELECT adresse,password from coach where adresse='".$adresse."' and password='".$password."'; ";
  $res=$conn->query($req);
  $row = $res->setFetchMode(PDO::FETCH_ASSOC);
   if($res-> rowcount())
  {
  header('Location: http://localhost/projet/views/');
  exit();
  }
  else
  {
    header('Location: http://localhost/project/views/login.html');
    exit();
  }
?>