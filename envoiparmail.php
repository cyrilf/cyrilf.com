<?php

// On vérifie si la fonction ini_set() a été désactivée...
$desactive = ini_get('disable_functions');
if (preg_match("/ini_set/i", "$desactive") == 0) {
// Si elle n'est pas désactivée, on définit ini_set de manière à n'afficher que les erreurs...
ini_set("error_reporting" , "E_ALL & ~E_NOTICE");
}

// Vérifier que le formulaire a été envoyé...
if (isset($_POST['envoi'])) {


//On commence une session pour enregistrer les variables du formulaire...

session_start();

$_SESSION['nom'] = $_POST['nom'];
$_SESSION['prenom'] = $_POST['prenom'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['tel'] = $_POST['tel'];
$_SESSION['sujet'] = $_POST['sujet'];

//Enregistrement des zones de texte...
$_SESSION['message'] = $_POST['message'];

// Définir l\'icone apparaissant en cas d\'erreur...


// Définir sur 0 pour afficher un petit x de couleur rouge.
// Définir sur 1 pour afficher l\'image d\'une croix rouge telle que celle utilisée dans l\'assistant
// Si vous utilisez l\'option 1, l\'image de la croix rouge \'icone.gif\' doit se trouver dans le répertoire \'images\',
// ce dernier devant se trouver au même niveau que votre formulaire...
$flag_icone = 0;

// On vérifie si $flag_icone est défini sur 0 ou 1...
if ($flag_icone == 0) {
$icone = "<b><font size=\"3\" face=\"Arial, Verdana, Helvetica, sans-serif\" color=\"#CC0000\">x</font></b>";
} else {
$icone = "<img src=\"images/icone.gif\"";
}

// Définir l'indicateur d'erreur sur zéro...
//$flag_erreur = 0;
// N'envoyer le formulaire que s'il n'y a pas d'erreurs...
if ($flag_erreur == 0) {					

// Addresse de réception du formulaire
$email_dest = "cyril.francesconi+sitePerso@gmail.com";
$sujet = "sujet";
$entetes ="MIME-Version: 1.0 \n";
	$entetes .="From: Site<site@site.fr>\n";
	$entetes .="Return-Path: Site<site@site.fr>\n";
	$entetes .="Reply-To: Site<site@site.fr>\n";
	$entetes .="Content-Type: text/html; charset=iso-8859-1 \n";
	$partie_entete = "<html>\n<head>\n<title>Formulaire</title>\n<meta http-equiv=Content-Type content=text/html; charset=iso-8859-1>\n</head>\n<body bgcolor=#FFFFFF>\n";


//Partie HTML de l'e-mail...
$partie_champs_texte .= "<font face=\"Verdana\" size=\"2\" color=\"#003366\">Nom = " . $_SESSION['nom'] . "</font><br>\n";
$partie_champs_texte .= "<font face=\"Verdana\" size=\"2\" color=\"#003366\">Prénom = " . $_SESSION['prenom'] . "</font><br>\n";
$partie_champs_texte .= "<font face=\"Verdana\" size=\"2\" color=\"#003366\">Téléphone = " . $_SESSION['tel'] . "</font><br>\n";
$partie_champs_texte .= "<font face=\"Verdana\" size=\"2\" color=\"#003366\">Description = " . $_SESSION['sujet'] . "</font><br>\n";
$partie_zone_email .= "<font face=\"Verdana\" size=\"2\" color=\"#003366\">E-mail = " . $_SESSION['email'] . "</font><br>\n";
$partie_zone_texte .= "<font face=\"Verdana\" size=\"2\" color=\"#003366\">Message / Commentaire = " . $_SESSION['message'] . "</font><br>\n";
					

					// Fin du message HTML
					$fin = "</body></html>\n\n";
					
					$sortie = $partie_entete . $partie_champs_texte . $partie_zone_email . $partie_listes . $partie_boutons . $partie_cases . $partie_zone_texte . $fin;


					// Send the e-mail
					if (@!mail($email_dest,$sujet,$sortie,$entetes)) {
					echo("Envoi du formulaire impossible");
					exit();
					} else {

                    // Rediriger vers la page de remerciement
                    header("Location:contact_send.html");
                    exit();
                  } // Fin else
			    } // Fin du if ($flag_erreur == 0) {
			} // Fin de if POST
?>
<html>
<!-- 
Assistant de création de formulaires PHP pour les nuls - Version gratuite 1.6
Auteur : Frédéric Ménard (assistant@f1-fantasy.net)
Site : http://www.f1-fantasy.net/assistant
 -->
<head>
<title>Formulaire</title>

</head><body><form name="formulaire" method="post" action="<?=$_SERVER['PHP_SELF']?>" >
  <div align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif, Tahoma"><strong>Formulaire
    de contact</strong></font></div><br><table align="center" width="566" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="16"><div align="center">
  <font color="#CC0000" size="2" face="Verdana, Arial, Helvetica, sans-serif, Tahoma"><strong><?php
if ($erreur_nom) {
	  echo(stripslashes($erreur_nom));
	  } else {
if ($erreur_prenom) {
	  echo(stripslashes($erreur_prenom));
	  } else {
if ($erreur_email) {
	  echo(stripslashes($erreur_email));
	  } else {
if ($erreur_tel) {
	  echo(stripslashes($erreur_tel));
	  } else {
if ($erreur_email1) {
	  echo(stripslashes($erreur_email1));
	  } else {
if ($erreur_texte1) {
	  echo(stripslashes($erreur_texte1));
	  } else {
} // Fin du else...
} // Fin du else...
} // Fin du else...
} // Fin du else...
} // Fin du else...
} // Fin du else...
?>
    </strong></font>
    </div></td>
      </tr>
    </table>
<p align="center"></p><table width="566" border="0" align="center"><tr>
      <td width="140"><div align="right"><font face="Verdana" size="2">Nom</font></div></td>
	  <td align="center" valign="middle" width="30">
      <?php
	  if ($erreur_nom) {
	  echo($icone);
	  }
	  ?>
      </td>
      <td><input name="nom" type="text" value="<?=stripslashes($_SESSION['nom']);?>"></td>
    </tr></table><table width="566" border="0" align="center"><tr>
      <td width="140"><div align="right"><font face="Verdana" size="2">Prénom</font></div></td>
	  <td align="center" valign="middle" width="30">
      <?php
	  if ($erreur_prenom) {
	  echo($icone);
	  }
	  ?>
      </td>
      <td><input name="prenom" type="text" value="<?=stripslashes($_SESSION['prenom']);?>"></td>
    </tr></table><table width="566" border="0" align="center"><tr>
      <td width="140"><div align="right"><font face="Verdana" size="2">Téléphone</font></div></td>
	  <td align="center" valign="middle" width="30">
      <?php
	  if ($erreur_email) {
	  echo($icone);
	  }
	  ?>
      </td>
      <td><input name="email" type="text" value="<?=stripslashes($_SESSION['email']);?>"></td>
    </tr></table><table width="566" border="0" align="center"><tr>
      <td width="140"><div align="right"><font face="Verdana" size="2">Description</font></div></td>
	  <td align="center" valign="middle" width="30">
      <?php
	  if ($erreur_tel) {
	  echo($icone);
	  }
	  ?>
      </td>
      <td><input name="tel" type="text" value="<?=stripslashes($_SESSION['tel']);?>"></td>
    </tr></table><table width="566" border="0" align="center"><tr>
      <td width="140"><div align="right"><font face="Verdana" size="2">E-mail</font></div></td>
      <td width="30" align="center" valign="middle">
	  <?php
	  if ($erreur_email1) {
	  echo($icone);
	  }
	  ?>
	  </td>
      <td><input name="sujet" type="text" value="<?=stripslashes($_SESSION['sujet']);?>"></td>
    </tr></table><table width="566" border="0" align="center"><tr>
      <td width="140" valign="top"><div align="right"><font face="Verdana" size="2">Message / Commentaire</font></div></td>
      <td width="30" align="center" valign="top">
	  <?php
	  if ($erreur_texte1) {
	  echo($icone);
	  }
	  ?>
	  </td>
      <td><textarea name="message" cols="45" rows="10"><?=stripslashes($_SESSION['message']);?></textarea></td>
    </tr></table><table width="566" border="0" align="center"><tr>
<td valign="top"><div align="center"> 
          <input type="reset" name="Reset" value=" Effacer ">
            
          <input type="submit" name="envoi" value="Envoyer">
        </div></td></tr></table><div align="center"><input name="nbre_fichiers" type="hidden" id="nbre_fichiers" value=""></div></form></body></html>