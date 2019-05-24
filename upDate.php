<?php
include "connexion.php";
include "fonction.php";
session_start();

//$_SERVER['argc'];
//$_SERVER['argv'];
//print_r($_SERVER);
$id = $_SESSION['id'];
//var_dump($id);
$now=time();
$min=strtotime('+1 minute');
//var_dump($now);


/*function idFile($bdd,$id) {
   $reponse=$bdd->query('SELECT user.id FROM `file` INNER JOIN `user` ON file.`user_id` = user.id ');
   return $reponse;
}  -------------------*/

function updateFile($bdd,$id) {
	$fileId=$bdd->query('SELECT `user_id` FROM `file`');
    while($file=$fileId->fetch()) {
        $id=$file;
        var_dump($id);
        if( $id['user_id']!=1 ) {
           $timing=60;
        }else {
           $timing=10;
        }
        $reponse=$bdd->prepare('UPDATE `file` SET `path`=:chemin WHERE `user_id` = ' .$id['user_id']. ' AND ADDDATE(`file`.`date`,INTERVAL ' .$timing. ' MINUTE) < NOW()');
        $requete = $reponse->execute(array(
           'chemin'=>'non valide'
        ));
    }
}
updateFile($bdd,$id);


function deleteOldFiles($bdd) {

	$file=$bdd->query('SELECT name FROM file WHERE `path`="non valide"');
	while ($name=$file->fetch()) {

		shell_exec('rm /var/www/wetransfer/files/'.$name["name"]);
		var_dump($name);
	}
}
deleteOldFiles($bdd);




