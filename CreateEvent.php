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
        <form action="SaveEvent.php" method="POST">
           <label for="nom">Nom-</label>
            <input type="text" name="nom" id="nom"/>
            </br>
           <label for="type">Ressource</label>
            <input type="text" name="resource" id="resource"/>
            </br>
            <label for="descriptif">Description</label>
            <textarea name="descriptif" id="descriptif" cols=“50” rows=“20"></textarea>
            </br>
            <label for="lieu">Lieu-</label>
            <input type="text" name="lieu" id="lieu" />
            </br>
           <label for="durer">Durer-</label>
            <input type="text" name="durer" id="durer"/>
            </br>
            <label for="capacite">Capacite</label>
            <input type="capacite" name="capacite">
            </br>
            <label for="region">Type</label>
            <input list="type" name="type"/>
          <datalist name="type" id="type"/>
            <option value="Loisir">
            <option value="Proffesionel">
            <option value="Evenmentiel">
                </datalist>
            </br>
            <label for="Date Evenement">Date de Evenement</label>
            <input type="date" name="date" id="date"/>
            </br>
            <input type="submit"/>
       </form>   
    </body>
</html>

