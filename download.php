<?php
session_start();

include "header.php";
//include "fonction.php";?>

<div class="container">
    <form id="contact" action="download.php" method="post" enctype="multipart/form-data">

    	<?php
    	$path=$_GET['link'];
    	//var_dump($path);
		$reponse= infoFile($bdd,$path);
		$donnees=$reponse->fetch();?>
		<h2> Nom fichier : <?php echo ($donnees['filename']); ?> </h2>


        <h3><?php echo "localhost/wetransfer/download.php?link=".$_GET['link'] ?></h3>

        <h5><?php echo "<a href='".$_GET['link'] ."' download> Click ici pour télécharger </a>" ; ?></h5>
       
    </form>
    <?php //var_dump ($_FILES['fichier']['tmp_name']); ?>
</div>