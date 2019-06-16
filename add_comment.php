<?php
session_start();
require('config/database.php');

if (isset($_GET['id']) AND !empty($_GET['id']))
{
    $idImg = $_GET['id'];
    $pseudo = $_SESSION['pseudo'];

    echo $pseudo;
    echo $idImg;


    if (isset($_POST['valider']))
    {
        if (isset($_POST['phrase']) AND !empty($_POST['phrase']))
        {
            $commentaire = htmlspecialchars($_POST['phrase']);

            $check = $bdd->prepare("SELECT id from images WHERE id = ?");
            $check->execute(array($idImg));

            if ($check->rowCount() == 1)
            {
                $check_like = $bdd->prepare("SELECT id FROM commentaire WHERE id_images = ? AND pseudo = ?");
                $check_like->execute(array($idImg, $pseudo));

                if ($check_like)
                {
                    $ins= $bdd->prepare("INSERT INTO commentaire(pseudo, commentaire, id_images, creation) VALUES(?, ?, ?, NOW())");
                    $ins->execute(array($pseudo, $commentaire, $idImg));
                }
                else
                {
                    echo "le check like ne fonctionne pas, echec d'ajout a la bdd";
                }

            }
            else
            {
                "le check ne fonctionne pas";

            }

        }
        else
        {
            echo "commentaire pas rempli";
        }
    }
    else
    {
        echo "error";
    }

    }
else
{
    echo "Probleme de lien id";
}


?>

<!DOCTYPE html>
<html lang="en">
<body>
    <form action="" method="post">
        <input type="text" name="phrase">
        <input type="submit" name="valider">
    </form>
</body>
</html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>