<?php
      function getBD_TDP(){
        $bdd = new PDO('mysql:host=sql4.cluster1.easy-hebergement.net;dbname=tempsdeparole;charset=utf8', 'tempsdeparole', 'alphatrio');
        return $bdd;
      }
?>
