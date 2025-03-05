<?php

if(isset($_POST["submit"])){
  //Récupérer les données
  $nom = $_POST["nom"];
  $prenom = $_POST["prenom"];
  $email = $_POST["email"];
  $pwd = $_POST["pwd"];

  //Instanciation de la classe SIgnupContr
  include "../classes/signup.classes.php";
  include "../classes/signup-contr.classes.php";

  $signup = new SignupContr($nom, $prenom, $email, $pwd);
  //Gestion des erreures pour le le user signup

  //Retourner à la page d'accueil
}