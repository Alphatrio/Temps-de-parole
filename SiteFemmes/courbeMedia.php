<?php
// source pour certaines explications: source :https://eric-pommereau.developpez.com/tutoriels/decouverte-jpgraph/?page=page-2#LII-E
// content="text/plain; charset=utf-8"
include ('src/jpgraph.php');//Si pas ca le graph ne s'affichera pas
include ("src/jpgraph_line.php");// pour la courbe
// appel bd
include 'call_bd.php';

$media=$_GET['rnomMed'];//recuperation du nom du media


// contenue et legendes
$annee= array();
$temps_parole=array();
$bdd = getBD_TDP(); //connexion BD
$sql ="SELECT * FROM MEDIA WHERE MEDIA.rnomMed ='".$media."'";

$res=$bdd->query($sql);




while ($row = $res->fetch()){ // recuperation des données pour le graphique
  $annee[] = $row['annee']; $temps_parole[] = $row['temps_parole']; // et d'une année pour la legende
}

$largeur = 800;
$hauteur = 400;

// Initialisation du graphique
$graph = new Graph($largeur, $hauteur);
$graph->img->SetMargin(40,30,50,40);//fixe les marges
$graph->img->SetAntiAliasing("white");//evite la pixelisation
$graph->setScale("textlin");

// Ajouter une ombre au conteneur
$graph->SetShadow();



// Titre associé au graphe
$graph->title->Set("Temps de parole par rapport aux années");

// Axe x  ********************************

//affiche les années
$graph->xaxis->SetTickLabels($annee);

//affiche une grille

$graph->ygrid->Show();
$graph->xgrid->Show();



// Creation de la courbe
$courbe = new LinePlot($temps_parole);//Permet d'avoir la courbe



// ajouter la courbe au conteneur
$graph->Add($courbe);

//affiche les valeurs
$courbe->value->show();
//couleur bleu pour la courbe
$courbe->value->SetColor('blue');

//nom de l'axe x
$graph->xaxis->title->Set("Année");





// Provoquer l'affichage
$graph->stroke();


?>
