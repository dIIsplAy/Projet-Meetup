<?php

include_once ('Personne.php');

class DataBase {

    function creat($Profile) {
        if (!is_dir('Profile')) {
            mkdir('Profile');
        }

        $open = fopen('Profile/' . $Profile->getLogin() . '.txt', 'w');
        fwrite($open, serialize($Profile));
        fclose($open);
        return true;
    }

    function readProfil($login, $mdp) {
        $show = scandir('Profile');
        foreach ($show as $file) {
            if (is_dir($file)) {
                continue;
            };
            $profil = unserialize(file_get_contents('Profile/' . $file));

            if ($profil->getLogin() == $login && $profil->getMdp() == $mdp) {

                return $profil;
            }
        }
        return false;
    }

    function creatEvent($profil, $event) {
        if (!is_dir('Evenements')) {
            mkdir('Evenements');
        }
        if (isset($profil) && !is_dir('Evenements/' . $profil->getLogin())) {
            mkdir('Evenements/' . $profil->getLogin());
         
        }

        $open = fopen(('Evenements/' . $profil->getLogin() . '/' . $event->getNom()) . '.txt', 'w');
        fwrite($open, serialize($event));
        fclose($open);


        
        
        return true;
    }

    function showEvent(Personne $User) {

     
        $showuser = scandir('Evenements/' . $User->getLogin());
        $arrays = [];
        foreach ($showuser as $file) {
          
            if ($file !== '.' && $file !== '..') {

               
                $decrypt = unserialize(file_get_contents('Evenements/' . $User->getLogin() . '/' . $file));
                array_push($arrays, $decrypt);
                 
            }
        }
        return $arrays;
    }
    function delete($profil){
        
        unlink("Evenements/". $profil->getLogin().'/'.$_POST['event'].".txt");
        
    }

}