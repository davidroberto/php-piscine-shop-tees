<?php

require_once('../config.php');

// je démarre la session : php créé un identifiant unique, l'associe à une zone de stockage sur le serveur
// et envoie l'identifiant au navigateur qui le stocke en cookie
session_start();

if (array_key_exists("quantity", $_POST) && 
	array_key_exists("product", $_POST))
{
	
	$order = [
		"product" => $_POST["product"],
		"quantity" => $_POST["quantity"]
	];

	// j'ajoute dans "ma" zone de stockage de session (sur le serveur) la commande que je viens de créer
	$_SESSION["order"] = $order;

}


require_once('../view/create-order.view.php');
