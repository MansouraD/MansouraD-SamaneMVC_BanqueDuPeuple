<?php

use Doctrine\ORM\Mapping AS ORM; 



/**
 * @Entity @Table (name="employeur") 
*/


class Employeur {

   
     /** 
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    private $id;
    /** @Column (type="integer") */
    private $numero_identification;
    /** @Column (type="string") */
    private $denomination;
    /** @Column (type="string") */
    private $raison_social;
    /** @Column (type="string") */
    private $adresse; 
    /**
     * @Column (type="string") 
     * @OneToMany(targetEntity="ClientParticulier ", mappedBy="employeur")
     */
    private $employes;
    


    function __construct(){

    }

    function getId(){
        return $this->id;
    }

    function getNumero_identification(){
        return $this->numero_identification;
    }
    function setNumero_identification($numero_identification){
        $this->numero_identification =$numero_identification;
        return $this;
    }

    function getRaison_social(){
        return $this->raison_social;
    }
    function setRaison_social($raison_social){
        $this->raison_social =$raison_social;
        return $this;
    }

    function getDenomination(){
        return $this->denomination;
    }
    function setDenomination($denomination){
        $this->denomination =$denomination;
        return $this;
    }

    function getAdresse(){
        return $this->adresse;
    }
    function setAdresse($adresse){
        $this->adresse =$adresse;
        return $this;
    }

    function getEmployes(){
        return $this->employes;
    }
    function setEmployes($employes){
        $this->adresse =$employes;
        return $this;
    }


}


?>