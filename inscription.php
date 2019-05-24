<?php
include "header.php";
//include "fonction.php";

if(isset($_POST['chemin'])){
    newContact($bdd);
}
?>

<div class="container">
    <form id="contact" action="index.php" method="post">
    
        <h4> Inscrivez vous ici </h4>
        
        <fieldset>
            <input type="email" name="mail" placeholder="e-mail">
        </fieldset>

        <fieldset>
            <input type="password" id="myInput" name="pass" placeholder="mot de passe">
            <input type="checkbox" onclick="myFunction()"><i class="fas fa-eye"></i>
        </fieldset>

        <fieldset>
            <button type="submit" id="contact-submit" name="chemin" >Valider</button>
        </fieldset>
    </form>
</div>

<script>
function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
      	x.type = "text";
    } else {
      	x.type = "password";
    }
}
</script>

<script src="library/bootstrap/js/bootstrap.bundle.js"></script>
<script src="library/jQuery.js"></script>
<script src="js/script.js"></script>