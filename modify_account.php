<?php
session_start();
require('includes/header1.php');
require('includes/footer.php');
require('config/database.php');

if (isset($_SESSION['id']))
{
    $requser = $bdd->prepare("SELECT * FROM membres WHERE id = ?");
    $requser->execute(array($_SESSION['id']));
    $user = $requser->fetch();
 
    if (isset($_POST['newpseudo']) AND !empty($_POST['newpseudo']) AND $_POST['newpseudo'] != $user['pseudo'])
    {
        $newpseudo = htmlspecialchars($_POST['newpseudo']);
        $insertpseudo = $bdd->prepare("UPDATE membres SET pseudo = ? WHERE id = ?");
        $insertpseudo->execute(array($newpseudo, $_SESSION['id']));
        header("Location: modify_account.php?id=".$_SESSION['id']);
    }

    if (isset($_POST['newmail']) AND !empty($_POST['newmail']) AND $_POST['newmail'] != $user['mail'])
    {
        $newmail = htmlspecialchars($_POST['newmail']);
        $insertmail = $bdd->prepare("UPDATE membres SET mail = ? WHERE id = ?");
        $insertmail->execute(array($newmail, $_SESSION['id']));
        header("Location: modify_account.php?id=".$_SESSION['id']);
    }

    if (isset($_POST['newmdp1']) AND !empty($_POST['newmdp1']) AND isset($_POST['newmdp2']) AND !empty($_POST['newmdp2']))
    {
        $mdp1 = sha1($_POST['newmdp1']);
        $mdp2 = sha1($_POST['newmdp2']);

        if ($mdp1 == $mdp2)
        {
            $insertmdp = $bdd->prepare("UPDATE membres SET motdepasse = ? WHERE  id = ?");
            $insertmdp->execute(array($mdp1, $_SESSION['id']));
            header("Location: modify_account.php?id=".$_SESSION['id']);
        }
        else
        {
            $msg = "Vos deux mots de passes ne correspondent pas !";
        }
    }

    if (isset($_POST['newpseudo']) AND $_POST['newpseudo'] == $user['pseudo'])
    {
        header("Location: modify_account.php?id=".$_SESSION['id']);
    }
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
        <br/>
        <center><h4 class="title_card">Modification du profil</h4></center>
        <br/>
        <br/>
        <center style="color: #84837D;">Mettez votre compte Camagru à jour.</center>
        <br/>
        <br/>
        <form method="POST" action="">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Nom d'utilisateur" name="newpseudo" value="<?php echo $user['pseudo']; ?>">
                <br/>
                <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="E-mail" name="newmail" value="<?php echo $user['mail']; ?>">
                <br/>
                <input type="password" class="form-control" placeholder="Mot de passe" name="newmdp1">
                <br/>
                <input type="password" class="form-control" placeholder="Reconfirmer le mot de passe" name="newmdp2">
            </div>
            <br/>
            <br/>
            <center><input type="submit" class="btn btn-outline-primary" style="padding-left:17%; padding-right:17%;" value="Mettre à jour" onclick="myFunction()"></center>
            <br/>
        </form>
    </div>

</body>
</html>

<?php
}
else
{
header("Location: connexion.php");
}
?>