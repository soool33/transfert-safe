<?php
include "header.php";
//include "fonction.php";
include "session.php";

session_start();
?>

<div class="container">
    <form id="contact" action="login.php" method="post" enctype="multipart/form-data">  <!-- enctype="multipart/form-data" -->
     
        <h4> Connectez vous </h4>
        
        <fieldset>
            <input type="email" name="mail" placeholder="e-mail">
        </fieldset>

        <fieldset>
            <input type="password" id="myInput" name="pass" placeholder="mot de passe">
            <input type="checkbox" onclick="myFunction()"> <i class="fas fa-eye"></i>
        </fieldset>

        <fieldset>
            <button type="submit" id="contact-submit" name="login" >Connexion</button>
        </fieldset>
        <fieldset> <a href="inscription.php"> inscrivez vous gratuitement ! </a> </fieldset>
    </form>
</div>
<?php var_dump($_SESSION['mail']); ?>
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

