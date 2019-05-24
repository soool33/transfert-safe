<?php 
include "fonction.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="library/bootstrap/css/bootstrap.css" />
	    <link rel="stylesheet" href="library/fontawesome/css/all.css" />
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
		    <a class="navbar-brand" href="index.php">LOGO</a>
		  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  	</button>
		 	<div class="collapse navbar-collapse" id="navbarNav">
			    <ul class="navbar-nav">
			    	<?php
			    	if (isset($_SESSION['mail'])) { ?>
			    		<li class="nav-item">
			        	<a class="nav-link" href="logout.php">Deconnexion</a>
			        	<script type="text/javascript">

			        		var horn = new Audio('car_horn.wav');
							horn.play();
			        	</script>
			      	</li>
			      	<li id="id">
			      		<?php echo 'bonjour : '.$_SESSION['mail']; ?> <style type="text/css">ul #id { margin-top: 8px; font-size: 17px; } </style>
			      	</li>
			      	<li>
			      		
			      		<div id="boutton"></div>
			      		<i class="far fa-grin fa-2x"></i>
			      	</li>
			      	<?php
			    	} 
			    	else { ?>
			    		<li class="nav-item active">
			        	<a class="nav-link" href="login.php">connexion<span class="sr-only">(current)</span></a>
			     	</li>
			      	<li class="nav-item">
			        	<a class="nav-link" href="inscription.php">Inscription</a>
			      	</li>
			      	<li>
			      		<div id="sad"></div>
			      		<i class="fas fa-frown-open fa-2x"></i>
			      	</li>
			      	<?php
			    	}
			    	?>
			    </ul>
		  	</div>
		</nav>
    </header>
    <div class="text-center"></div>