<?php
// content="text/plain; charset=utf-8"
include ('src/jpgraph.php');//Si pas ca le graph ne s'affichera pas
include ("src/jpgraph_line.php");// pour le barplot
// appel bd
include 'call_bd.php';

$media=$_GET['rnomMed'];


// contenue et legendes
$annee= array();
$temps_parole=array();
$bdd = getBD_TDP(); //connexion BD
$sql ="SELECT * FROM MEDIA WHERE MEDIA.rnomMed ='".$media."'";

$res=$bdd->query($sql);




while ($row = $res->fetch()){ // Ajouter année devant, c'est pour la légende
  $annee[] = $row['annee']; $temps_parole[] = $row['temps_parole'];
}

$largeur = 600;
$hauteur = 400;

// Initialisation du graphique
$graph = new Graph($largeur, $hauteur);
$graph->img->SetMargin(40,30,50,40);
$graph->img->SetAntiAliasing("white");
$graph->setScale("textlin");

// Ajouter une ombre au conteneur
$graph->SetShadow();



// Titre associé au graphe
$graph->title->Set("Temps de parole par rapport aux années");

// Axe x  ********************************
//affichage des chaine et separation

$graph->xaxis->SetTickLabels($annee); $graph->xgrid->Show(true,true);

$graph->ygrid->Show();
$graph->xgrid->Show();


// Create
$courbe = new LinePlot($temps_parole);//Permet d'avoir l'histogramme
//$histo->SetLegend($chaine);


// ajouter le graphique histo au conteneur
$graph->Add($courbe);

$courbe->value->show();
$courbe->value->SetColor('blue');


$graph->xaxis->title->Set("Année");


// Spécifier des couleurs personnalisées... #FF0000 ok


// Légendes qui accompagnent le graphique, ici chaque chaine avec sa couleur


// Position du graphique (0.5=centré)


// Type de valeur (pourcentage ou valeurs)



// Personnalisation des étiquettes pour chaque partie


// Personnaliser la police et couleur des étiquettes


// Provoquer l'affichage
$graph->stroke();


?>
