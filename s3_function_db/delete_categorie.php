<?php
include("modules.php");
$id=$_GET['id']; //
supprimer($id,"categorie");
header("location:index_categorie.php?n=del");
?>