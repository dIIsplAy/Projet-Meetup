<?php
include_once 'Personne.php';
include_once 'Evenement.php';
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
        echo"<p id='conteout'>Compte inexistant</p>";
    }
};
?>

<html>
    <head>
        <title>Register</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="meetup.css">        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body id="bodi" class="container"> 
    <h1 id="titre" class="text-center  col-md-4 col-md-offset-4">Finderz</h1>
        <div id="niklecar"class="row container-fluid"> 
          <form id="conect"class="col-md-4 col-md-offset-4" action=" " method="POST">
              <h1 class="page-header">Connection</h1>
              <div class="form-group">
                <label for="login">Login</label>
                  <input class="form-control" type="text" name="login" id="login"/>
              </div>
              <div class="form-group">
                <label for="mdp">Mots de Passe</label>
                <input class="form-control" type="password" name="mdp">
              </div>
              <div class=" col-md-4 col-md-offset-4">
                <input class="btn btn-success"type="submit"/> 
              </div>
          </form>
        </div>
        <div id="register" class="container row col-md-4 col-md-offset-4">
     <h2 class="page-header">Register</h2>
        <form action="SaveProfil.php" method="POST">
            <label class="control-label" for="nom">Nom</label>
            <input class="form-control"type="text" name="nom" id="nom"/>
          <div class="form-group">
           <label for="prenom">Prenom</label>
            <input class="form-control form-control-success" type="text" name="prenom" id="prenom"/>            
            <label for="nom">E-mail</label>
            <input class="form-control" type="text" name="mail" id="mail" placeholder="@......"/>           
           <label for="login">Login</label>
            <input class="form-control"type="text" name="login" id="login"/>            
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password">          
            <label for="region">Region</label>
            <input class="form-control" list="region" name="region"/>
          <datalist name="region" id="region"/>
            <option value="Auvergne-Rhones-Alpes">
            <option value="Bourgogne-Franche-Comte">
            <option value="Bretagne">
            <option value="Centre-Val de Loire">
            <option value="Corse">
            <option value="Grand Est">
            <option value="Hautes-de-France">
            <option value="Iles-de-France">
            <option value="Normandie">
            <option value="Nouvelle-Aquitaine">
            <option value="Occitanie">
            <option value="Pays de la Loire">
            <option value="Provence-Alpes,Cote d'Azur">     
         </datalist>
            </br>
            <label for="DateNaissance">Date de Naissance</label>
            <input class="form-control"type="date" name="date" id="date">
            </br>
            <div class="form-check">
            <label class="form-check-label"for="genre">Genre</label></br>
            <input class="form-check-input"type="radio" name="genre" id="genre" value="Homme"/>Homme
            <input class="form-check-input" type="radio" name="genre" id="genre" value="Femme"/>Femme
            </div>
            </br>
            <label class="form-check-label"for="interet">Centre D'interet</label></br>
            <input class="form-check-input" type="checkbox" name="interet" value="Festival"/>  Festival
            <input class="form-check-input" type="checkbox" name="interet" value="Musique"/>  Musique
            <input class="form-check-input" type="checkbox" name="interet" value="Cuisine"/>  Cuisine
            <input class="form-check-input" type="checkbox" name="interet" value="Sport"/>    Sport
            <input class="form-check-input" type="checkbox" name="interet" value="Culturel"/> Culturel
            <input class="form-check-input" type="checkbox" name="interet" value="Voyage"/>   Voyage
            <input class="form-check-input" type="checkbox" name="interet" value="Beauté"/>   Beauté
            </br>
            </br>
            <div class=" col-md-4 col-md-offset-4">
            <input class="btn btn-success"type="submit"/>
            </div>
       </form>  
       </div>
    </body>
</html>    


