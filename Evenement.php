<?php



class Evenement {
   protected $nom;
   protected $type;
   protected $date;
   protected $durer;
   protected $capacite;
   protected $lieu;
   protected $descriptif;
   protected $resource;
   function getNom() {
       return $this->nom;
   }

   function getType() {
       return $this->type;
   }

   function getDate() {
       return $this->date;
   }

   function getDurer() {
       return $this->durer;
   }

   function getCapacite() {
       return $this->capacite;
   }

   function getLieu() {
       return $this->lieu;
   }

   function getDescriptif() {
       return $this->descriptif;
   }

   function getResource() {
       return $this->resource;
   }

   function setNom($nom) {
       $this->nom = $nom;
   }

   function setType($type) {
       $this->type = $type;
   }

   function setDate($date) {
       $this->date = $date;
   }

   function setDurer($durer) {
       $this->durer = $durer;
   }

   function setCapacite($capacite) {
       $this->capacite = $capacite;
   }

   function setLieu($lieu) {
       $this->lieu = $lieu;
   }

   function setDescriptif($descriptif) {
       $this->descriptif = $descriptif;
   }

   function setResource($resource) {
       $this->resource = $resource;
   }

      
   function __construct($type, $date, $durer, $capacite, $lieu, $descriptif, $resource, $nom) {
       $this->type = $type;
       $this->date = $date;
       $this->durer = $durer;
       $this->capacite = $capacite;
       $this->lieu = $lieu;
       $this->descriptif = $descriptif;
       $this->resource = $resource;
       $this->nom = $nom;
   }
   function genererhtml(){
        echo "<br/> Nom : ". $this->nom;
        echo "<br/> Type :" .$this->type;
        echo "<br/> Date :" .$this->date;
        echo "<br/> Durer : " .$this->durer;
        echo "<br/> Capacite :" .$this->capacite;
        echo "<br/> Lieu :".$this->lieu;
        echo "<br/> Descriptif :".$this->descriptif;
        echo "<br/> Ressource:".$this->resource;
      
    }
    

   
}
