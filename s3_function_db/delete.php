<?php
include("modules.php");
$id=$_GET['id']; //
supprimer($id);
header("location:index.php?n=del");
?>