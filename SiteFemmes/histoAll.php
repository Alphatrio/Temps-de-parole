<?php

// content="text/plain; charset=utf-8"
include ('src/jpgraph.php');//Si pas ca le graph ne s'affichera pas
include ("src/jpgraph_bar.php");// pour le barplot
// appel bd
include 'call_bd.php';

$annee=$_GET['annee'];//recuparation de l'année

$chaine= array();
$temps_parole=array();
$bdd = getBD_TDP(); //connexion BD

$res=$bdd->query('SELECT * FROM MEDIA WHERE MEDIA.annee ='.$annee);
while ($row = $res->fetch()){
  // Ajoute une chaine et son temps de parole pour une année donnée
  $chaine[] = $row['rnomMed']; $temps_parole[] = $row['temps_parole'];
}

$largeur = 1100;
$hauteur = 1200;

// Initialisation du graphique
$graph = new Graph($largeur, $hauteur);

$graph->setScale("textlin");

// Ajouter une ombre au conteneur
$graph->SetShadow();

//Fonction utilisé pour mettre le graphique a 90
$graph->Set90AndMargin(120,30,90,30);



// Titre associé au graphe
$graph->title->Set("Temps de parole par chaine");


//nom des medias
$graph->xaxis->SetTickLabels($chaine);
//grille des axes
$graph->xgrid->Show(true,true);
$graph->xgrid->Show();




// Creation histogramme
$histo = new BarPlot($temps_parole);//Permet d'avoir l'histogramme







// ajouter le graphique histo au conteneur
$graph->Add($histo);




//couleur bleu
$histo->value->SetColor('blue');

//mets les valeurs des temps de paroles
$histo->value->Show();

// Provoquer l'affichage
$graph->Stroke();


?>
