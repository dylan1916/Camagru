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
    <link rel="stylesheet" href="style/forget.css">
    <title>Forget Password</title>
</head>
<body>

<div class="card" style="width:40%; margin-left: 30%; margin-top: 7%;">
        <center><h4 class="title_card">Problème de connexion ?</h4></center>
        <br/>
        <br/>
        <center style="color: #84837D;">Entrez votre adresse e-mail et nous vous enverrons un<br/> lien pour récupérer votre compte.</center>
        <br/>
        <br/>
        <form method="" action="">
            <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail">
            </div>
            <br/>
            <br/>
            <center><button type="button" class="btn btn-outline-primary" style="padding-left:17%; padding-right:17%;">Envoyer un lien de connexion</button></center>
            <br/>
            <hr width="90%">
            <center><a style="text-decoration:none; color:#385185;" href="index.php">Créer un compte</a></center>
            <br/>
        </form>
    </div>

    
</body>
</html>