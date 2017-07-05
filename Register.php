<?php
include_once 'Personne.php';
include_once 'Evenement.php';
?>

<html>
    <head>
        <title>Register</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body> 
        <form action="SaveProfil.php" method="POST">
           <label for="nom">Nom-</label>
            <input type="text" name="nom" id="nom"/>
            </br>
           <label for="prenom">Prenom-</label>
            <input type="text" name="prenom" id="prenom"/>
            </br>
            <label for="nom">E-mail-</label>
            <input type="text" name="mail" id="mail" placeholder="@......"/>
            </br>
           <label for="login">Login-</label>
            <input type="text" name="login" id="login"/>
            </br>
            <label for="password">Password-</label>
            <input type="password" name="password">
            </br>
            <label for="region">Region-</label>
            <input list="region" name="region"/>
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
            <input type="date" name="date" id="date">
            </br>
            <label for="genre">Genre-</label>
            <input type="radio" name="genre" id="genre" value="Homme"/>Homme
            <input type="radio" name="genre" id="genre" value="Femme"/>Femme
            </br>
            <label for="interet">Centre D'interet</label>
            <input type="checkbox" name="interet" value="Festival"/>Festival
            <input type="checkbox" name="interet" value="Musique"/>Musique
            <input type="checkbox" name="interet" value="Cuisine"/>Cuisine
            <input type="checkbox" name="interet" value="Sport"/>Sport
            <input type="checkbox" name="interet" value="Culturel"/>Culturel
            <input type="checkbox" name="interet" value="Voyage"/>Voyage
            <input type="checkbox" name="interet" value="Beauté"/>Beauté
            </br>
            <input type="submit"/>
       </form>   
        
        
        
         <form action="Login.php" method="POST">
            <p>Connect Toi</p>
              <label for="login">Login-</label>
            <input type="text" name="login" id="login"/>
            </br>
            <label for="mdp">Mots de Passe</label>
            <input type="password" name="mdp">
            <input type="submit"/>
            
            
            
        </form>
    </body>
</html>    


