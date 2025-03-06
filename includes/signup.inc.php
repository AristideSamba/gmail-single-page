<?php
$servername = "localhost";
$username = "root";
$password = "";
try{
  $pdo = new PDO("mysql:host=$servername;dbname=gmail", $username, $password);
  # Définir le mode d'erreur PDO sur exception
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
  echo "Erreur!: " . $e->getMessage();
}
