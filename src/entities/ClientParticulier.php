<?php
use Doctrine\ORM\Annotation as ORM;


/**
 * @Entity @Table (name="client_particulier") 
*/

class ClientParticulier {

    /** 
    * @Id
    * @Column(type="integer")
    * @GeneratedValue
    */
   private $id;
   /** @Column (type="string") */
   private $nom;
   /** @Column (type="string") */
   private $prenom;
   /** @Column (type="integer") */
   private $date_de_naissance;
   /** @Column (type="integer") */
   private $cni;
   /** @Column (type="string") */
   private $adresse; 
   /** @Column (type="string") */
   private $téléphone;
   /** @Column (type="string") */
   private $email; 
   /** @Column (type="string") */
   private $profession;
   /** @Column (type="integer") */
   private $statut;
   /** @Column (type="integer") */
   private $salaire;

   function __construct(){

   }
   function getId(){
       return $this->id;
   }

   function getNom(){
       return $this->nom;
   }
   function setNom($nom){
       $this->nom =$nom;
       return $this;
   }

   function getPrenom(){
       return $this->prenom;
   }
   function setPrenom($prenom){
       $this->prenom =$prenom;
       return $this;
   }

   function getDate_de_naissance(){
       return $this->date_de_naissance;
   }
   function setDate_de_naissance($date_de_naissance){
       $this->date_de_naissance =$date_de_naissance;
       return $this;
   }

   function getCni(){
       return $this->cni;
   }
   function setCni($cni){
       $this->cni =$cni;
       return $this;
   }


   function getAdresse(){
       return $this->adresse;
   }
   function setAdresse($adresse){
       $this->adresse =$adresse;
       return $this;
   }

   function getTéléphone(){
       return $this->téléphone;
   }
   function setTéléphone($téléphone){
       $this->téléphone =$téléphone;
       return $this;
   }


   function getEmail(){
       return $this->email;
   }
   function setEmail($email){
       $this->email =$email;
       return $this;
   }


   function getProfession(){
       return $this->profession;
   }
   function setProfession($profession){
       $this->profession =$profession;
       return $this;
   }


   function getStatut(){
       return $this->statut;
   }
   function setStatut($statut){
       $this->statut =$statut;
       return $this;
   }

   function getSalaire(){
       return $this->salaire;
   }
   function setSalaire($salaire){
       $this->salaire =$salaire;
       return $this;
   }

}


?>