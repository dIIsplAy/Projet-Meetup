<?php

include_once ('DataBase.php');


session_start();




$Data = new DataBase();





if (isset($_POST['login']) && (isset($_POST['mdp']))) {
    $login = htmlspecialchars($_POST['login']);
    $mdp = htmlspecialchars($_POST['mdp']);

    $profil = $Data->readProfil($login, $mdp);
    
    if ($profil) {
        $_SESSION['utilisateur'] = $profil;
        header("location: accountuser.php");
    } else {
        http_response_code(401);
        echo"Compte inexistant";
    }
};


?>


