



<?php
    require("src/jpgraph.php");
    require("src/jpgraph_bar.php");
    require 'call_bd.php';

    $bdd = getBD_TDP();
    $annee=$_GET['annee'];


    $temps_parole = array();
    $chaine=array();
    $sql='SELECT * FROM MEDIA WHERE MEDIA.annee =' .$annee;
    $graphique=$bdd-> query($sql);
    $i=0;
    while ($ligne = $graphique ->fetch()) {
       $donnees[]=$ligne['temp_parole'];
       $chaine[]=$ligne['rnomMED'];


   }

    $largeur = 150;
    $hauteur = 200;

    // Initialisation du graphique
    $graphe = new Graph($largeur, $hauteur);
    // Echelle lineaire ('lin') en ordonnee et pas de valeur en abscisse ('text')
    // Valeurs min et max seront determinees automatiquement
    $graphe->setScale("textlin");
    $graphe->SetShadow();

    $graphe->xaxis->SetTickLabels($chaine);
    $graphe->xgrid->Show(true,true);

    // Creation de l'histogramme
    $histo = new BarPlot($donnees);
    $histo->value->Show();
    $histo-> SetWidth(0.5);
    // Ajout de l'histogramme au graphique
    $graphe->add($histo);

    // Ajout du titre du graphique
    $graphe->title->set("Temps de parole en fonction des chaines");

    // Affichage du graphique
    $graphe->Stroke();?> -->
