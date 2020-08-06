<?php
/*==================================================
MODELE MVC DEVELOPPE PAR Ngor SECK
ngorsecka@gmail.com
(+221) 77 - 433 - 97 - 16
PERFECTIONNEZ CE MODELE ET FAITES MOI UN RETOUR
POUR TOUTE MODIFICATION VISANT A L'AMELIORER.
VOUS ETES LIBRE DE TOUTE UTILISATION.
===================================================*/
use libs\system\Controller;
use src\model\MyRepository;

class MyController extends Controller{

    public function __construct(){
        parent::__construct();
    }
    /** 
     * use: localhost/projectName/Welcome/
     */
    public function index(){  
        return $this->view->load("myview/index");   
    }

    public function inserer(){   
        // echo ('youpii');
        // die;

        if(isset($_POST['soumettre'])){
            extract($_POST);
        
            if($_POST['check1']=='Particulier'){
        
                if(!empty($nom_client)  && !empty($prenom_client) && !empty($datenaiss) && !empty($cni) && !empty($adresse_client) && !empty($tel_client)){
                   
                    $ccpp = new ClientParticulier();
                    $cp = new MyRepository();
                    
                    $ccpp->setNom($nom_client);
                    $ccpp->setPrenom($prenom_client);
                    $ccpp->setDate_de_naissance($datenaiss);
                    $ccpp->setCni($cni);
                    $ccpp->setAdresse($adresse_client);
                    $ccpp->setTéléphone($tel_client);
                    $ccpp->setEmail($email_client);
                    $ccpp->setProfession($profession);
                    $ccpp->setStatut($statut);
                    $ccpp->setSalaire($salaire);
        
                    $resultat = $cp-> addClientParticulier($ccpp);
                    
                    if($resultat!=NULL){
                        //if(!empty($type_compte)){
                            $liaison = $cni;
        
                            $cc = new Compte();
                            $c = new MyRepository();
        
                            $cc->setType_compte($type_compte);
                            $cc->setAgence($numero_agence);
                            $cc->setNumero_compte($numero_compte);
                            $cc->setCle_rib($cle_rib);
                            $cc->setFrais_ouverture($frais_ouverture);
                            $cc->set_cni($liaison);
        
                            $resultatc = $c->addCompte($cc);
                        
                       // }
        
                        if($_POST['check3']=='salarie'){
                            if(!empty($denomination)  && !empty($adresse_employeur)){ 
                                $statut = 1;
                                
                                $ee = new Employeur();
                                $e = new MyRepository();
        
                                $ee->setNumero_identification($numero_identification);
                                $ee->setDenomination($denomination);
                                $ee->setRaison_social($raison_social);
                                $ee->setAdresse($adresse_employeur);
        
                                $resultatee = $e->addEmployeur($ee);
                            }  
        
                        }else if($_POST['check3']=='autres'){
                            $statut = 0;
        
                        }
    
                    }
                     $data['ok'] = 1;
                    return $this->view->load("myview/index", $data); 
                }
                $data['ok'] = 0;
                return $this->view->load("myview/index", $data); 
        
            }else if($_POST['check1']=='Entreprise'){
                
                if(!empty($statut_juridique)  && !empty($nom_entreprise) && !empty($adresse_entreprise) && !empty($tel_entreprise)&& !empty($ninea)){
         
                    $ccee = new ClientEntreprise();
                    $ce = new MyRepository();
        
                    $ccee->setStatut($statut_juridique);
                    $ccee->setDenomination($nom_entreprise);
                    $ccee->setNinea($ninea);
                    $ccee->setAdresse($adresse_entreprise);
                    $ccee->setTelephone($tel_entreprise);
                    $ccee->setMail($email_entreprise);
                    
                    $resultat = $ce->addClientEntreprise($ccee);
                }    
                   
                if($resultat!=NULL){
                   // if(!empty($type_compte)){
                        $liaison = $ninea;
        
                        $cc = new Compte();
                        $c = new MyRepository();
        
                        $cc->setType_compte($type_compte);
                        $cc->setAgence($numero_agence);
                        $cc->setNumero_compte($numero_compte);
                        $cc->setCle_rib($cle_rib);
                        $cc->setFrais_ouverture($frais_ouverture);
                        $cc->set_ninea($liaison);
        
                        $resultatc = $c->addCompte($cc);
                   // }
                }
                $data['ok'] = 1;
                return $this->view->load("myview/index", $data); 
            }$data['ok'] = 0;
            return $this->view->load("myview/index", $data); 
        
        }

    }
}
?>