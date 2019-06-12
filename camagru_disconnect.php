<?php
require('includes/header.php');
require('includes/footer.php');
require('config/database.php');
?>


<?php

    $req = $bdd->prepare('SELECT * FROM images ORDER BY id DESC');
    $req->execute();
    while($d = $req->fetch(PDO::FETCH_OBJ)):?>

<!DOCTYPE html>
<html lang="en">
<body>
<center>
    <br/><br/>
    <!-- image -->
    <div class="card" style="width: 35rem;">
    <img class="card-img-top" src="<?php echo $d->data;?>"  alt="Card image cap" style="border: 1px solid black">
    <div class="card-body">
    <!-- like -->
    <ul class="list-group list-group-flush">
        <li class="list-group-item">J'aime</li>
        <li class="list-group-item">J'aime pas</li>
    </ul>
    <!-- commentaire -->
        <p class="card-text" align="left">Ajouter un commentaire ...<br/><br/><br/>
            Pour liker ou commenter veuillez
            vous <a id="link" href="connexion.php">connectez</a> ou <a id="link" href="index.php">céer un compte</a>.
        </p>
    </div>
    </div>
    <br/><br/><br/>
</center>
</body>
</html>

<?php endwhile;?>



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="stylesheet" href="style/camagruDisconnect.css">
    <title>Camagru Disconnected</title>
</head>