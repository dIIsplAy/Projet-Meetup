<?php

include_once ('DataBase.php');
include_once('Evenement.php');



session_start();

$Data = new DataBase();

$profil = $_SESSION['utilisateur'];

if (!is_dir('Evenements/'.$profil->getLogin())){
    mkdir('Evenements/'.$profil->getLogin());
}
if(isset ($_POST['event'])){
    $Data->delete($profil);
}


$a = $Data->showEvent($profil);

echo "Bonjour " . $profil->getNom();
echo"</br>";
echo'<a href="CreateEvent.php">Creé un Evenements</a>';
echo"</br>";
echo'<a href="logOut.php">Deconexion</a>';
echo"</br>";
echo"Voici tes Evenements!";
echo"</br>";





for ($i = 0; $i < count($a); $i++) {
    echo"</br>";
    echo"Nom :" . $a[$i]->getNom();
    echo"</br>";
    echo"Type: " . $a[$i]->getType();
    echo"</br>";
    echo"Date: ". $a[$i]->getDate();
    echo"</br>";
    echo "Durer: " .$a[$i]->getDurer();
    echo"</br>";
    echo"Capacite: ". $a[$i]->getCapacite();
    echo"</br>";
    echo"Lieu: ". $a[$i]->getLieu();
    echo"</br>";
    echo"Descriptif : ". $a[$i]->getDescriptif();
    echo"</br>";
    echo "Ressource : ".$a[$i]->getResource();
    
    echo"<form action='' method='POST'>
           <input type='hidden' name='event' value='".$a[$i]->getNom()."'/>
            <input type='submit' value='delete'/>
        </form>";
      echo"</br>";
};


