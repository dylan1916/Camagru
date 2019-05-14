<?php
require('includes/header1.php');
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
    <link rel="stylesheet" href="style/modifyAccount.css">
    <title>Modify Account</title>
</head>
<body>
    
<div class="card" style="width:40%; margin-left: 30%; margin-top: 7%;">
        <center><h4 class="title_card">Modification du profil</h4></center>
        <br/>
        <br/>
        <center style="color: #84837D;">Mettez votre compte Camagru à jour.</center>
        <br/>
        <br/>
        <form method="" action="">
            <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail">
                <br/>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nom d'utilisateur">
            </div>
            <br/>
            <br/>
            <center><button type="button" class="btn btn-outline-primary" style="padding-left:17%; padding-right:17%;">Mettre à jour</button></center>
            <br/>
            <hr width="90%">
            <center><a style="text-decoration:none; color:#385185;" href="modify_password.php">Modifier votre mot de passe</a></center>
            <br/>
        </form>
    </div>

</body>
</html>