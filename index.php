<?php
require('includes/header.php');
require('includes/footer.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="stylesheet" href="style/index.css">
    <title>Index/Inscription</title>
</head>
<body>
    

<div class="center">
    
    <div>
        <img src="img/polaroid.png" alt="" class="img_polaroid">
    </div>
    
    <div class="card" style="width:35rem; margin-left: 130px; margin-top: 110px;">
        <center><h4 class="title_card">Camagru</h4></center>
        <br/>
        <form method="" action="">
            <div class="form-group">
                <input type="text" class="form-control"  placeholder="Nom d'utilisateur">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Reconfirmer le mot de passe">
            </div>
            <center><button type="button" class="btn btn-outline-primary" style="padding-left:19%; padding-right:19%;">Suivant</button></center>
            <br/>
            <center><a href="camagru_disconnect.php"><button type="button" class="btn btn-outline-primary">Accéder directement au Camagru</button></a></center>
            <hr width="90%">
            <br/>
            <center><h6>Vous avez déjà un compte ? <a style="text-decoration:none; color:#88C2F5;" href="connexion.php">Connectez-vous</a></h6></center>
        </form>
    </div>

</div>
</body>
</html>