<?php

session_start();

require_once('../model/order.repository.php');


$orderByUser = findOrderByUser();

// je regarde si c'est une méthode post (si oui ça veut dire que l'utilisateur
// a cliqué sur "payer" dans le form)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	if ($orderByUser['status'] === 'CART') {
		$orderByUser['status'] = "PAID";
		saveOrder($orderByUser);
	} else {
		$message = "la commande est déjà annulée. Vous ne pouvez plus la payer";
	}

	// je resauve la commande payée de l'utilisateur en session (elle remplace l'ancienne en CART)
	saveOrder($orderByUser);
}





require_once('../view/pay-order.view.php');