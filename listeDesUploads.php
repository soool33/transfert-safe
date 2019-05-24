<?php
session_start();

include "header.php";
//include "fonction.php";?>

<div class="container">
	<form id="contact">
		<?php
		$reponse= showTransferByUser($bdd,$id);
		while ($donnees=$reponse->fetch()) {
?>
			<h3>
				<?php  echo $donnees['path']; ?>
			</h3>
			<h4>
				<?php  echo $donnees['date']; ?>
			</h4>
	<?php	} ?>
	</form>
</div>

