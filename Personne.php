<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Personne
 *
 * @author cristophol
 */
class Personne {
    protected $nom;
    protected $prenom;
    protected $dateNaissance;
    protected $interet;
    protected $mail;
    protected $region;
    protected $genre;
    protected $login;
    protected $mdp;
    
    
    function __construct($nom, $prenom, $dateNaissance, $interet, $mail, $region, $genre, $login, $mdp) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->interet = $interet;
        $this->mail = $mail;
        $this->region = $region;
        $this->genre = $genre;
        $this->login = $login;
        $this->mdp = $mdp;
    }
    
    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getDateNaissance() {
        return $this->dateNaissance;
    }

    function getInteret() {
        return $this->interet;
    }

    function getMail() {
        return $this->mail;
    }

    function getRegion() {
        return $this->region;
    }

    function getGenre() {
        return $this->genre;
    }

    function getLogin() {
        return $this->login;
    }

    function getMdp() {
        return $this->mdp;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setDateNaissance($dateNaissance) {
        $this->dateNaissance = $dateNaissance;
    }

    function setInteret($interet) {
        $this->interet = $interet;
    }

    function setMail($mail) {
        $this->mail = $mail;
    }

    function setRegion($region) {
        $this->region = $region;
    }

    function setGenre($genre) {
        $this->genre = $genre;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setMdp($mdp) {
        $this->mdp = $mdp;
    }

        
    function genererhtml(){
        echo "<br/> Date de Naisance : ". $this->dateNaissance;
        echo "<br/> Genre :" .$this->genre;
        echo "<br/> Interet :" .$this->interet;
        echo "<br/> Login : " .$this->login;
        echo "<br/> E-Mail :" .$this->mail;
        echo "<br/> Mdp :".$this->mdp;
        echo "<br/> Nom :".$this->nom;
        echo "<br/> Prenom:".$this->prenom;
        echo "<br/> Region :" .$this->region;
    }

    
}
