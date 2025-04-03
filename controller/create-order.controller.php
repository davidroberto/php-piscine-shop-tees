<?php

require_once('../config.php');
require_once('../model/product.repository.php');

session_start();

if (array_key_exists("quantity", $_POST) && 
	array_key_exists("product", $_POST))
{
	$order = [
		"product" => $_POST["product"],
		"quantity" => $_POST["quantity"]
	];

	$_SESSION["order"] = $order;
}


require_once('../view/create-order.view.php');
