<?php
use Doctrine\ORM\Annotation as ORM;


/**
 * @Entity @Table(name="client_entreprise") 
*/

class ClientEntreprise {


    /** 
    * @Id
    * @Column(type="integer")
    * @GeneratedValue
    */
   private $id;
   /** @Column (type="string") */
   private $statut;
   /** @Column (type="string") */
   private $denomination;
   /** @Column (type="string") */
   private $ninea; 
   /** @Column (type="string") */
   private $adresse; 
   /** @Column (type="string") */
   private $telephone;
   /** @Column (type="string") */
   private $mail; 
   
   function __construct(){

   }
   function getId(){
       return $this->id;
   }

   function getStatut(){
       return $this->statut;
   }
   function setStatut($statut){
       $this->statut =$statut;
       return $this;
   }

   function getDenomination(){
       return $this->denomination;
   }
   function setDenomination($denomination){
       $this->denomination =$denomination;
       return $this;
   }

   function getNinea(){
       return $this->ninea;
   }
   function setNinea($ninea){
       $this->ninea =$ninea;
       return $this;
   }


   function getAdresse(){
       return $this->adresse;
   }
   function setAdresse($adresse){
       $this->adresse =$adresse;
       return $this;
   }

   function getTelephone(){
       return $this->telephone;
   }
   function setTelephone($telephone){
       $this->telephone =$telephone;
       return $this;
   }


   function getMail(){
       return $this->mail;
   }
   function setMail($mail){
       $this->mail =$mail;
       return $this;
   }

}


?>