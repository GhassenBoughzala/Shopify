<?php


class client
{
 private $nom;
 private $prenom;
 private $identifiant;
 private $age;
 private $sexe;
 private $email;
 private $mdp;
 private $fidelite;
 private $adresse;

 //public function __construct () {}

 public  function __construct($identifiant,$nom,$prenom,$age,$sexe,$adresse,$email,$mdp,$fidelite) {
     $this->prenom=$prenom;
     $this->nom=$nom;
     $this->identifiant=$identifiant;
     $this->sexe=$sexe;
     $this->mdp=$mdp;
     $this->fidelite=$fidelite;
     $this->age=$age;
     $this->adresse=$adresse;
     $this->email=$email;
 }

    
 public function getId() {
     return $this->identifiant;
 }

 public  function getNom() {
     return $this->nom;
 }

 public function getPrenom() {
     return $this->prenom;
 }

 public function getSexe() {
     return $this->sexe;
 }

 public function getAge() {
     return $this->age;
 }
  public function getAdresse() {
     return $this->adresse;
 }
   public function getEmail() {
     return $this->email;
 }
   public function getMdp() {
     return $this->mdp;
 }
  public function getFidelite() {
     return $this->fidelite;
 }

 public function setId($identifiant) {
     $this->identifiant=$identifiant;
 }

 public function setNom($nom){
     $this->nom=$nom;
 }

 public function setPrenom($prenom) {
     $this->prenom=$prenom;
 }

 public function setAge($age) {
     $this->age=$age;
 }

 public function setSexe($sexe) {
     $this->sexe=$sexe;
 }
  public function setEmail($email) {
     $this->email=$email;
 }
  public function setAdresse($adresse) {
     $this->adresse=$adresse;
 }
public function setMdp($mdp) {
     $this->mdp=$mdp;
 }
 public function setFidelite($fidelite) {
     $this->fidelite=$fidelite;
 }



    
}
?>