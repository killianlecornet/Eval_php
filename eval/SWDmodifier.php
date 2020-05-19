<?php 

$db = new PDO('mysql:host=localhost;dbname=eval_php', 'root','');


$req = $db->prepare('SELECT *FROM senior_web_developer WHERE id=:num');

$req->bindValue(':num',$_GET['IDtable'],PDO::PARAM_INT);

$executeIsOk = $req->execute();

$liste = $req->fetch();

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<center><h1>Modifier</h1></center>

<form action="SWDconfirm_modif.php" method="post">
    <input type="hidden"  name="IDtable" value="<?= $liste['id'] ?>">

    <p>
        
        <label for="titre">Titre</label><br>
        <input type="text" name="titre" class="form-control"  id="exampleFormControlInput1 titre" value="<?= $liste['titre'] ?>">

    </p>
    <p>
        <label for="sous_titre">Sous-Titre</label><br>
        <input type="text" name="sous_titre" class="form-control"  id="exampleFormControlInput1 sous_titre" value="<?= $liste['sous_titre'] ?>">
    
    </p>
    <p>
        <label for="texte">Text</label><br>
        <input type="text" name="texte" class="form-control"  id="exampleFormControlInput1 texte" value="<?= $liste['texte'] ?>">

    </p>
    <p>
        <label for="date1">Date</label><br>
        <input type="text" name="date1" class="form-control"  id="exampleFormControlInput1 date1" value="<?= $liste['date1'] ?>">

    </p>
    <p><center><input type="submit" class="btn btn-success" value="Enregistrer"></p></center>

</form>    
</body>
</html>




