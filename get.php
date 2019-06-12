<?php

    $bdd = new PDO('mysql:host=localhost;dbname=espace_webcam','root','root');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    $bdd->exec('SET NAMES utf8');

    $req = $bdd->prepare('SELECT * FROM images');
    $req->execute();
    while($d = $req->fetch(PDO::FETCH_OBJ)):?>

    <center style="border: 3px solid black">
        <img src="<?php echo $d->data;?>">
        <h1>hello</h1>
    </center>

<?php endwhile;?>
