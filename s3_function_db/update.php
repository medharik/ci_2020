<?php 
require_once("modules.php");
//dd($_POST);
extract($_POST);
modifier($libelle,$prix,$qtestock,$categorie_id,$id);
header("location:index.php?n=upd");

?>