<?php

include_once 'Personne.php';
include_once 'Evenement.php';
?>

<html>
    <head>
        <title>Register</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 <link rel="stylesheet" href="meetup.css">   
    </head>
    <body id="creation" class="container-fluid">
    <div id='nav' class='navbar navbar-default container-fluid'style='color:black;height:5em'>
        <div class='collaspe navbar-collapse'>
            <a id='title'class='col-md-4 col-md-offset-4 text-center'>Finderz</a>
        </div>
</div>
    <div id="create"class="form-group row col-md-4 col-md-offset-4">
      <div class="container-fluid">
    <h3 class="col-md-6 col-md-offset-3 page-header">Creé ton Evenement</h3>
    </div>
        <form action="SaveEvent.php" method="POST">
           <label for="nom">Nom</label>
            <input class="form-control"type="text" name="nom" id="nom"/>
            </br>
           <label for="type">Ressource</label>
            <input class="form-control"type="text" name="resource" id="resource"/>
            </br>
            <section class="container-fluid">
            <div class="form-group col-md-6 col-md-offset-3">
            </br>
            <label for="lieu">Lieu</label>
            <input class="form-control" type="text" name="lieu" id="lieu" />
            </br>
            <label for="descriptif">Description</label>
            <input class="form-control" type="text" name="descriptif" id="descriptif"/>
            </br>
           <label for="durer">Durée</label>
            <input class="form-control" type="text" name="durer" id="durer"/>
            </br>
            <label for="capacite">Capacite</label>
            <input class="form-control" type="capacite" name="capacite">
            </br>
            <label for="region">Type</label>
            <input class="form-control" list="type" name="type"/>
          <datalist name="type" id="type"/>
            <option value="Loisir">
            <option value="Proffesionel">
            <option value="Evenmentiel">
            </datalist>
            </br>
            <label for="Date Evenement">Date de Evenement</label>
            <input class="form-control" type="date" name="date" id="date"/>
            </br>
            <input class="btn btn-success col-md-6 col-md-offset-3"type="submit"/>
            </div>
            </section>
            </div>
       </form>   
    </body>
</html>

