<?php
/*==================================================
MODELE MVC DEVELOPPE PAR Ngor SECK
ngorsecka@gmail.com
(+221) 77 - 433 - 97 - 16
PERFECTIONNEZ CE MODELE ET FAITES MOI UN RETOUR
POUR TOUTE MODIFICATION VISANT A L'AMELIORER.
VOUS ETES LIBRE DE TOUTE UTILISATION.
===================================================*/
namespace src\model; 

use libs\system\Model; 
	
class MyRepository extends Model{
	
	/**
	 * Methods with DQL (Doctrine Query Language) 
	 */
	public function __construct(){
		parent::__construct();
	}
	
	public function addClientParticulier($ccpp)
	{
		if($this->db != null)
		{
			$this->db->persist($ccpp);
			$this->db->flush();

			return $ccpp->getId();
		}
    }
	
	public function addClientEntreprise($ccee)
	{
		if($this->db != null)
		{
			$this->db->persist($ccee);
			$this->db->flush();

			return $ccee->getId();
		}
	}


    public function addCompte($cc)
	{
		if($this->db != null)
		{
			$this->db->persist($cc);
			$this->db->flush();

			return $cc->getId();
		}
	}

	public function addEmployeur($ee)
	{
		if($this->db != null)
		{
			$this->db->persist($ee);
			$this->db->flush();

			return $ee->getId();
		}
	}

}
?>
	
	