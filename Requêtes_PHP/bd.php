<?php
      function getBDTDP(){
        $bdd = new PDO('mysql:host=localhost;dbname=Temps_de_parole;charset=utf8', 'root', 'root');
        return $bdd;
      }
?>
