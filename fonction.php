<?php
include "connexion.php";
session_start();

function newContact($bdd)
{
	$query=$bdd->prepare('INSERT INTO user(mail,password) VALUES (:mail,:password)');
	$query->execute([
		'mail'=>$_POST['mail'],
		'password'=>$_POST['pass']
	]);
    //header("location:index.php");
}

$fichier = $_FILES["fichier"]["name"];
$uploaddir = 'files/';
$uploadfile = $uploaddir . basename($_FILES['fichier']['name']);
$size = $_FILES['fichier']['size'];
$id = $_SESSION['id'];
//var_dump($_FILES["fichier"]["name"]);
//var_dump($id);
//var_dump($_SESSION);
if ( !$_SESSION ) {$id=1;} else { $id = $_SESSION['id']; }

	if ((isset($_SESSION) && $size > 7000000) || (!$_SESSION && $size > 2000000)) { 
	//-------------------------------------------------------------condition pour limiter taille
		echo "votre fichier est trop lourd ! ";
	} else {
		if (move_uploaded_file($_FILES['fichier']['tmp_name'], $uploadfile)) {
			    echo "Le fichier est valide, et a été téléchargé avec succès.";

			    $req = $bdd->prepare('INSERT INTO file(`filename`,`name`,`path`,`user_id`) VALUES(:filename,:name,:chemin,:userid)');
			    $req->execute([
					'filename'=>$_POST['filename'],
					'name'=>$fichier,
					'chemin'=>$uploadfile,
					'userid'=>$id
				]);
				header("location:download.php?link=".$uploadfile);
		}
	}

/*$req = mysql_query('SELECT * FROM file ');
while ($donnees = mysql_fetch_array($req)) {

    $date_inscription = $donnees['date'];
    $date = time();
    $difference = $date - $date_inscription;
    $nbr = 60*1;
    if ($difference > $nbr)
    {
    $id = $donnees['id'];
    mysql_query("DELETE FROM file WHERE id='$id'");
    }
}*/

function infoFile($bdd,$path) {
$reponse=$bdd->query('SELECT * FROM `file` WHERE `path` ="'.$path.'"');
    return $reponse;
}

function showTransferByUser($bdd,$id) {
   $reponse=$bdd->query('SELECT * FROM file INNER JOIN user ON file.`user_id`=user.id WHERE user.id ='.$id);
   return $reponse;
}