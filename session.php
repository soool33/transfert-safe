<?php 
session_start();
require_once 'login.php';

if (isset($_POST['login'])) {
	//var_dump("coucou1");
	//var_dump($_POST);
	if (empty($_POST['mail']) || empty($_POST['pass'])) {
		
		header("location:login.php?invalide=fill in the blanks");
	} else {
		$mail=$_POST['mail'];
		$pass=$_POST['pass'];
		
		$query='SELECT * from user WHERE mail="'.$mail.'" AND password="'.$pass.'"';
		$result=$bdd->query($query);
		$donnees=$result->fetch();

		if ($donnees) {
			$_SESSION['mail']=$_POST['mail'];
			$_SESSION['id']=$donnees['id'];
			//var_dump($donnees['id']);
			header("location:index.php?link=".$_SESSION['id']);
		} else {
			var_dump("cou4");
			header("location:login.php?invalid=entrez vos id");
		}
	}
}