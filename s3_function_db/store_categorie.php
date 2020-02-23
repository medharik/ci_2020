<?php
require("modules.php");
// $libelle=$_POST['libelle'];
// $prix=$_POST['prix'];
// $qtestock=$_POST['qtestock'];
extract($_POST);
ajouter_categorie($nom);
// redirection vers index.php
header("location:index_categorie.php?n=str");
?>