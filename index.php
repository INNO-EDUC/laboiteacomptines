<?php
	session_start();
	include("vues/v_entete.php");
	if(!isset($_REQUEST['uc']))
     $uc = 'accueil';
	else
	/**
	* On donne a la variable $uc la valeur renvoy� par "v_bandeau.php"
	*/
	 $uc = $_REQUEST['uc'];
	switch($uc)
	/**
	* On utilise la variable $uc dans un switch afin de g�rer les diff�rentes pages souhait�es
	*/
	{
	case 'accueil':
					include("vues/v_recherche.php");
					break;
	case 'rechercher': 
					include("c_gestionRecherche.php");
					break;
	case 'publier' :
					include("c_gestionPublication.php");
					break;
	}
	include("vues/v_pied.php");
?>
