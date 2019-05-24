<?php 

include "header.php";
//include "fonction.php";

session_start();

?>


<div class="container">
    <form id="contact" action="index.php" method="post" enctype="multipart/form-data">  <!-- enctype="multipart/form-data" -->
     
        <h4><?php //echo  $_GET['link'] ?></h4>
        
        <fieldset>
            <input type="file" name="fichier">
        </fieldset>

        <fieldset>
            <input type="text" id="myInput" name="filename" placeholder="nom du fichier">
        </fieldset>

        <fieldset>
            <button type="submit" id="contact-submit" name="chemin" >Transferer</button>
        </fieldset>
    </form> 
</div>


<?php

//var_dump($_FILES["fichier"]["tmp_name"]);

