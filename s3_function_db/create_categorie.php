<?php include("modules.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nouveau categorie</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<?php include("_menu.php"); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto shadow">
            
            <form action="store_categorie.php" method="post">
                <div class="form-group"><label for="nom">nom</label>
                <input type="text" class="form-control" name="nom" id="nom" >
                </div>
                <div class="form-group"><label for="chemin">chemin</label>
                <input type="file" class="form-control" name="chemin" id="chemin" >
                </div>
                
                <button type="submit" class="btn btn-primary">valider</button>
            </form>
            </div>
        </div>
    </div>

</body>
</html>