<?php require('../view/partial/_header.view.php'); ?>

	<main>
	
		<h1>Payer une commande</h1>

		<?php if ($orderByUser) {?>
			<p> <?php echo $orderByUser['product']; ?> :  <?php echo $orderByUser['quantity']; ?>
			<p>Créée le <?php echo $orderByUser['createdAt']->format('y-m-d'); ?></p>
			<p>Votre commande est en statut :<?php echo $orderByUser['status']; ?> </p>


			<button>Payer</button>
		<?php } else { ?>
			<p>Vous n'avez pas de commande à payer</p>
		<?php } ?>


		
		

	</main>

</body>
</html>