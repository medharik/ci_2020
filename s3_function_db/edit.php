<?php 
require("modules.php");
$id=intval($_GET['id']);
$produit=find($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edition du produit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<?php include("_menu.php"); ?>
<div class="alert alert-info text-center">
Modification du produit : <?=$produit['libelle']?> </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto shadow">
            
            <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?=$produit['id']?>">
                <div class="form-group"><label for="libelle">libelle</label>
                <input type="text" class="form-control" name="libelle" id="libelle"  value="<?=$produit['libelle']?>" >
                </div>
                <div class="form-group"><label for="prix">prix</label>
                <input type="text" class="form-control" name="prix" id="prix" value="<?=$produit['prix']?>">
                </div>
                <div class="form-group"><label for="qtestock">qte stock</label>
                <input type="text" class="form-control" name="qtestock" id="qtestock" value="<?=$produit['qtestock']?>"" >
                </div>
                <button type="submit" class="btn btn-primary">valider</button>
            </form>
            </div>
        </div>
    </div>

</body>
</html>