<?php

class SignupContr {

  private $nom;
  private $prenom;
  private $email;
  private $pwd;

  public function __construct($nom, $prenom, $email, $pwd){
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->email = $email;
    $this->pwd = $pwd;
  }
  //Fonction pour vérifier si les entées sont vides
  private function emptyInput(){
    $result = true;
    if(empty($this->nom) || empty($this->prenom) || empty($this->email) || empty($this->pwd)){
      $result = false;
    }
    return $result;
  } 

  //Fonction pour vérifier le format de l'email
  private function invalidEmail(){
    $result = true;
    if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
      $result = false;
    }
    return $result;
  }
}