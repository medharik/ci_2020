<?php
require("modules.php");
$categories=all("categorie");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nouveau produit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<?php include("_menu.php"); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto shadow">
            
            <form action="store.php" method="post" enctype="multipart/form-data">
                <div class="form-group"><label for="libelle">libelle</label>
                <input type="text" class="form-control" name="libelle" id="libelle" >
                </div>
                <div class="form-group"><label for="prix">prix</label>
                <input type="text" class="form-control" name="prix" id="prix" >
                </div>
                <div class="form-group"><label for="qtestock">qte stock</label>
                <input type="text" class="form-control" name="qtestock" id="qtestock" >
                </div>
        <div class="form-group"><label for="chemin">chemin</label>
                <input type="file" class="form-control" name="chemin" id="chemin" >
                </div>
                <div class="form-group"><label for="categorie_id">Categorie : </label>
<select name="categorie_id" id="categorie_id" class="form-control">
<?php foreach ($categories as $cat) {
 ?>
    <option value="<?=$cat['id']?>"><?=$cat['nom']?></option>
<?php } ?>
</select>
                </div>
                <button type="submit" class="btn btn-primary">valider</button>
            </form>
            </div>
        </div>
    </div>

</body>
</html>