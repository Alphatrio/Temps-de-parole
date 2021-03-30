<?php
session_start();
// content="text/plain; charset=utf-8"
include ('src/jpgraph.php');//Si pas ca le graph ne s'affichera pas
include ("src/jpgraph_bar.php");// pour le barplot
// appel bd
include 'call_bd.php';



$annee=$_SESSION['annee'];//recupere l'année
// contenue et legendes
$chaines=$_SESSION['chainesChoisies'];//recupere les infos pour les meedias de la chekbox
$temps_parole=array();
$bdd=getBD_TDP(); //connexion BD




foreach ($chaines as $chaine){

  $res=$bdd->query('SELECT * FROM MEDIA WHERE MEDIA.annee ='.$annee.' and MEDIA.rnomMed="'.$chaine.'"' );
  $row = $res->fetch();

  array_push($temps_parole,$row['temps_parole']);//on prends les informations du temps de paroles pour chaque media
}

$largeur = 600;
$hauteur = 500;

// Initialisation du graphique
$graph = new Graph($largeur, $hauteur);
$graph->setScale("textlin");

// Ajouter une ombre au conteneur
$graph->SetShadow();



// Titre associé au graphe
$graph->title->Set("Temps de parole par chaine");


// Axe x  ********************************

//affiche la legende, ici le nom des medias
$graph->xaxis->SetTickLabels($chaines);


//la grille des axes
$graph->ygrid->Show();
$graph->xgrid->Show();




// Creation histogramme
$histo = new BarPlot($temps_parole);//Permet d'avoir l'histogramme







// ajouter le graphique histo au conteneur
$graph->Add($histo);




//couleur bleu pour les bars
$histo->value->SetColor('blue');

//affiche la valeur des temps de paroles
$histo->value->Show();

// Provoquer l'affichage
$graph->Stroke();


?>
