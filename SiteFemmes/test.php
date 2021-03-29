<html lang="en">
<head>


  <meta charset="utf-8">

  <title>Les Femmes à la TV et à la Radio</title>

  <?php
  
  require_once("./jpgraph/src/jpgraph.php");
  require_once("./jpgraph/src/jpgraph_bar.php");
  ?>


</head>

<body>
<?php

$donnees = array(12,23,9,58,23,26,57,48,12);

$largeur = 250;
$hauteur = 200;

// Initialisation du graphique
$graphe = new Graph($largeur, $hauteur);
// Echelle lineaire ('lin') en ordonnee et pas de valeur en abscisse ('text')
// Valeurs min et max seront determinees automatiquement
$graphe->setScale("textlin");

// Creation de l'histogramme
$histo = new BarPlot($donnees);
// Ajout de l'histogramme au graphique
$graphe->add($histo);

// Ajout du titre du graphique
$graphe->title->set("Histogramme");

// Affichage du graphique
$graphe->stroke();

?>
</body>
</html>
