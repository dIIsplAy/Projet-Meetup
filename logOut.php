<?php
include_once 'DataBase.php';

$Data= new DataBase();
session_start();
if(isset ($_SESSION['utilisateur'])){
    
    session_destroy();
    header("location: Register.php");
  
}
?>


