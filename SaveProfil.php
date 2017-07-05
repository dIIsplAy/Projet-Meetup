<?php
include_once 'DataBase.php';
include_once 'Personne.php';


$login =  $_POST['login'];
$mdp =  $_POST['password'];
$nom =  $_POST['nom'];
$prenom =  $_POST['prenom'];
$mail =  $_POST['mail'];
$region =  $_POST['region'];
$dateNaissance =  $_POST['date'];
$genre =  $_POST['genre'];
$interet =  $_POST['interet'];


$Profile = new Personne($nom, $prenom, $dateNaissance, $interet, $mail, $region, $genre, $login, $mdp);

$Profile->genererhtml();

$Data = new DataBase();



if($Data->creat($Profile)){
    echo "Votre compte a bien été creé!";
    echo'<a href="Register.php">return</a>';
}else{
    echo "Oups il y a u une erreur!";
}

$Data->readProfil($login , $mdp);
 

?>