<?php
/* Smarty version 3.1.30, created on 2020-08-05 18:55:46
  from "C:\xampp\htdocs\SamaneMVC_BanqueDuPeuple\src\view\myview\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f2ae4924acdb1_30480723',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd77993c40e9fa5626a7550bf971121e346748e40' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SamaneMVC_BanqueDuPeuple\\src\\view\\myview\\index.html',
      1 => 1596646496,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f2ae4924acdb1_30480723 (Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (isset($_smarty_tpl->tpl_vars['ok']->value)) {?>
        <?php if ($_smarty_tpl->tpl_vars['ok']->value == 1) {?>
                echo "<div class='passe'>Soumission réussie</div>";
        <?php } else { ?>
                echo "<div class='casse'>Erreur de soumission</div>";
        <?php }?> 
    <?php }?> 



<!DOCTYPE HTML>
<html>
    <head>
        <title>Banque du peuple</title>
        <meta charset="utf-8"/>
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/style.css"/>
    </head>
    <body>
        <header>
            <div class="ligne" name="ligne">
                 <h1> BANQUE DU PEUPLE  </h1>
                 <h2> <i> Vous êtes notre raison d'être! </i></h2>
                 <h3> Espace responsable de compte</h3>
                 <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image0.jpg" alt="">
                </div>
            <div name="menu" id="menu">
                <ul name="menu_respo" id=menu_respo>
                    <li><a href="consultations">Consultations</a>   
                        <ul>
                            <li> <a href="#">Clients</a></li>
                            <li> <a href="#">Comptes</a></li>
                            <li> <a href="#">Historique</a></li>
                        </ul>
                    </li>
                    <li> <a href="opérations">Opérations</a> 
                        <ul>
                            <li> <a href="#">Virements</a></li>
                        </ul>
                    </li>
                    <li><a href="gestion">Gestion compte</a>  
                        <ul>
                            <li name="ovrc" id="ovrc" onclick="afficherForm()"> <a href="#Ouverture_compte">Ouverture compte</a></li>
                            <li> <a href="#">Gestion requêtes</a></li>
                            <li> <a href="#">Gestion réclamations</a></li>
                            <li> <a href="#">Fermeture comptes</a></li>
                            <li> <a href="#">Autres</a></li>
                        </ul>
                    </li>

                </ul>   
            </div> 
        </header>
        <nav>
            <div class="erreur" name="erreur" id="erreur"></div>


            <form name="formulaire" name="ouverture" id="ouverture" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
My/inserer">
                
                    <div class="pore" name="pore" id="pore">
                        <fieldset>
                            <legend>type de client </legend> 
                            
                            <input type="radio" name="check1" value="Particulier"  id="Particulier" onchange="particulier()"/>
                            <label for="Particulier" class="inline">particulier</label>
                            <input type="radio" name="check1" value="Entreprise"  id="Entreprise" onchange="entreprise(), anulsal()" />
                            <label for="Entreprise" class="inline">entreprise</label>
                            
                        </fieldset> 
                    </div>    
                    <div class="aorn" name="aorn" id="aorn">
                        <fieldset >
                            <legend>infos client</legend> 
                            
                            <input type="radio" name="check2" value="Nouveau"  id="Nouveau" onchange="anulidc(), anulautomat ()"/>
                            <label for="Nouveau" class="inline">nouveau client</label>
                            <input type="radio" name="check2" value="Ancien"  id="Ancien" onchange="idc(), automat()" />
                            <label for="Ancien" class="inline">ancien client</label>

                            <label for= "id_client">id client:</label>
                            <input type="text" name="id_client" id= "id_client" placeholder="Saisir id client" disabled/> <br>
                        </fieldset>
                    </div>
                    <div class="sccp" name="sccp" id="sccp">
                        <fieldset>
                            <legend>infos client particulier</legend> 

                            <label for="prenom_client">prénom :</label>
                            <input type="text"  name="prenom_client" id="prenom_client" placeholder="Saisir le prenom" /> <br>
                                
                            <label for="nom_client">nom :</label>
                            <input type="text" name="nom_client" id="nom_client" placeholder="Saisir le nom" /> <br>
                            
                            <label for="datenaiss">date de naissance :</label> 
                            <input type="date" name="datenaiss" id="datenaiss" placeholder="choisir une date" /> <br>

                            <label for="cni">CNI :</label> 
                            <input type="number" name="cni" id="cni" placeholder="Saisir le numéro d'indentification national" /> <br>
                            
                            <label for="adresse_client">adresse :</label> 
                            <input type="text" name="adresse_client" id="adresse_client" placeholder="Saisir l'adresse" /> <br>
                            
                            <label for="tel_client">téléphone :</label> 
                            <input type="text" name="tel_client" id="tel_client" placeholder="Saisir le numéro de téléphone" /> <br>

                            <label for="email_client">email :</label>
                            <input type="text" name="email_client" id="email_client" placeholder="Saisir l'adresse mail"> <br>

                            <label for="profession">profession :</label> 
                            <input type="text" name="profession" id="profession" placeholder="Saisir la profession"/> <br>

                        </fieldset>  
                        <fieldset>

                            <legend>statut client particulier</legend> 

                            <input type="radio" name="check3" value="salarie" id="salarie" onchange="sal(), salac()"/>
                            <label for="salarie" class="inline">salarié</label>
                            <input type="radio" name="check3" value="autres" id="autres" onchange="anulsal(), anulsalac ()"/>
                            <label for="autres" class="inline">autres</label>

                            <input type="hidden" name="statut" id="statut"> <br>

                            
                            <label for="salaire">salaire actuel :</label> 
                            <input type="text" name="salaire" id="salaire" value ="0" placeholder="Saisir le salaire" disabled/> <br>


                        </fieldset>

                    </div>
                    <div class="scce" name="scce" id="scce">
                        <fieldset>

                            <legend>infos client entreprise</legend> 

                            <label for="statut_juridique">statut juridique :</label> 
                            <select name="statut_juridique" id="statut_juridique" > 
                                <option value="sa">SA</option>
                                <option value="sarl">SARL</option>
                                <option value="scs">SCS</option>
                                <option value="snc">SNC</option>
                                <option value="autre">autre</option>
                            </select> 

                            <label for="nom_entreprise">dénomination :</label>
                            <input type="text" name="nom_entreprise" id="nom_entreprise" placeholder="Saisir le nom de l'entreprise" /> <br>
                                
                            <label for="ninea">NINEA :</label> 
                            <input type="text" name="ninea" id="ninea" placeholder="Saisir le NINEA" /> <br>
                            
                            <label for="adresse_entreprise">adresse :</label> 
                            <input type="text" name="adresse_entreprise" id="adresse_entreprise" placeholder="Saisir l'adresse" /> <br>
                            
                            <label for="tel_entreprise">téléphone :</label> 
                            <input type="text" name="tel_entreprise" id="tel_entreprise" placeholder="Saisir le numéro de téléphone" /> <br>

                            <label for="email_entreprise">email :</label>
                            <input type="text" name="email_entreprise" id="email_entreprise" placeholder="Saisir l'adresse mail"> <br>

                        </fieldset>

                      
                    </div>
                    <div class="info_employeur" name="info_employeur" id="info_employeur" >
                        <fieldset>
                            <legend>infos employeur</legend>
                            
                            <label for="denomination">dénomination :</label> 
                            <input type="text" name="denomination" id="denomination" placeholder="Saisir la dénomination" /> <br>

                            <label for="raison_social">raison social :</label> 
                            <input type="text" name="raison_social" id="raison_social" placeholder="Saisir la raison sociale" /> <br>
                            
                            <label for="numero_identification">numéro d'identification :</label> 
                            <input type="text" name="numero_identification" id="numero_identification" placeholder="Saisir le numéro d'identification" /> <br>
                            
                            <label for="adresse_employeur">adresse :</label>
                            <input type="text" name="adresse_employeur" id="adresse_employeur" placeholder="Saisir l'adresse" /> <br>

                        </fieldset>
                            

                    </div>
                    <div class="info_compte" name="info_compte" id="info_compte"> 
                        <fieldset>
                            <legend>Type de Compte</legend>

                            <label for="type_de_compte">Type de Compte :</label> 
                            <select name="type_compte" id="type_compte" onchange="frais()">
                                <option value="ccourant" >compte courant</option>
                                <option value="cepargne" >compte épargne</option>
                                <option value="cbloqué" >compte bloqué</option>
                            </select> 
                            <input type="hidden" name="liaison" id="liaison"> <br>
                        </fieldset>
                        <fieldset>
                            <legend>infos compte</legend>

                            <label for="numero_agence">numéro agence :</label>
                            <input type="text" name="numero_agence" id="numero_agence" placeholder="Saisie automatique"/> <br>

                            <label for="numero_compte">numéro compte :</label>
                            <input type="text" name="numero_compte" id="numero_compte" placeholder="Saisie automatique"/> <br>

                            <label for="cle_rib">clé rib :</label>
                            <input type="text" name="cle_rib" id="cle_rib" placeholder="Saisie automatique"/> <br>

                            <label for="frais_ouverture">frais ouverture :</label>
                            <input type="text" name="frais_ouverture" id="frais_ouverture" value ="0" placeholder="Saisir le montant" disabled/> <br>
                        
                        </fieldset> 

                      

                    </div>


                <button type="submit" class="soumettre" name="soumettre" id="soumettre" onclick="verify()">soumettre</button>
                
            </form>
        </nav>
        <footer>

        </footer>
    </body>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/script.js""><?php echo '</script'; ?>
>
</html>

<?php }
}
