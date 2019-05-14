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
    <link rel="stylesheet" href="style/connexion.css">
    <title>Connexion</title>
</head>
<body>

<div class="card" style="width:40%; margin-left: 30%; margin-top: 7%;">
        <center><h4 class="title_card">Camagru</h4></center>
        <br/>
        <form method="" action="">
            <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
            </div>
            <br/>
            <center><a href="camagru_connect.php"><button type="button" class="btn btn-outline-primary" style="padding-left:17%; padding-right:17%;">Connexion</button></a></center>
            <br/>
            <center><a href="camagru_disconnect.php"><button type="button" class="btn btn-outline-primary">Accéder directement au Camagru</button></a></center>
            <hr width="90%">
            <br/>
            <center><a style="text-decoration:none; color:#385185;" href="forget_password.php">Mot de passe oublié ?</a></center>
            <hr width="40%">
            <br/>
            <center><h6>Vous n'avez pas de compte ? <a style="text-decoration:none; color:#88C2F5;" href="index.php">Inscrivez-vous</a></h6></center>
        </form>
    </div>

</body>
</html>