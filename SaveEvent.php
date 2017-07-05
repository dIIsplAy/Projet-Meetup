<?php
include_once 'DataBase.php';
include_once 'Evenement.php';

session_start();

$type =  $_POST['type'];
$resource =  $_POST['resource'];
$nom =  $_POST['nom'];
$descriptif =  $_POST['descriptif'];
$lieu =  $_POST['lieu'];
$durer =  $_POST['durer'];
$capacite =  $_POST['capacite'];
$date =  $_POST['date'];

$Data = new DataBase();



$event = new Evenement($type, $date, $durer, $capacite, $lieu, $descriptif, $resource, $nom);

$event->genererhtml();




$profil =$_SESSION['utilisateur'];

if($Data->creatEvent($profil,$event)===true ){
   
    echo "Votre evenement a bien été creé!";
    echo'<a href="accountuser.php">return</a>';
}else{
    echo "Oups il y a u une erreur!";
}


?>

