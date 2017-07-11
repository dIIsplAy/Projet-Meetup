<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="meetup.css">        
    </head>
    <body id="acountimage"> 
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


?>
<div id='nav' class='navbar navbar-default container-fluid'style='color:black;height:5em'>
        <div class='collaspe navbar-collapse'>
            <a id='event' class="col-md-3" href="CreateEvent.php">Creé un Evenements</a>
            <a id='title'class='col-md-2 col-md-offset-2 text-center'>Finderz</a>
            <a id='deco'class="nav navbar-nav navbar-right" href="logOut.php">Deconexion</a>
        </div>
</div>

<?php

echo"<section  class='container-fluid'>";
echo"<div id='event_acount' class='text-center  col-md-4 col-md-offset-4'>";
echo"<p class='page-header '>Bonjour " . $profil->getNom()."</p>";
echo"<p class='page-header '>Evenements</p>";
echo "</br>";
echo "</br>";
echo"</div>";
echo"</section>";


?>
<?php 
for ($i = 0; $i < count($a); $i++) {?>

<section class="container-fluid">
  <div id="evenement" class="text-center  col-md-4 col-md-offset-4">
  <div id="events">
     <p>Nom: <?php echo $a[$i]->getNom()?></p>
  

     <p>Type: <?php echo $a[$i]->getType();?></p>
 
     <p>Date: <?php echo $a[$i]->getDate();?></p>
 
     <p>Durer: <?php echo $a[$i]->getDurer();?></p>
  
     <p>Capacite:  <?php echo $a[$i]->getCapacite();?></p>

     <p>Lieu:  <?php echo $a[$i]->getLieu();?></p>

     <p>Descriptif: <?php echo $a[$i]->getDescriptif();?></p>

     <p>Ressources: <?php echo $a[$i]->getResource();?></p>
     </div>
     </div>
     </section>
    <?php
    echo"<section class='container-fluid'>";
    echo"<div class='text-center  col-md-4 col-md-offset-4'>";
    echo"<form id='formevent' action='' method='POST'>";?>
           <input type='hidden' name='event' value='<?php echo $a[$i]->getNom()?>'/>
            <input class="btn btn-info" type='submit' value='delete'/>
        </form>
        <?php
        echo"</div>";
    echo"</section>";
      echo"</br>";
      
    
};
?>
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>


