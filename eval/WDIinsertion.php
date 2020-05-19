<?php 

$db = new PDO('mysql:host=localhost;dbname=eval_php', 'root','');

$req = $db->prepare('INSERT INTO web_design_intern  SET titre=:titre, sous_titre=:sous_titre, texte=:texte, date1=:date1');


$req->bindValue(':titre', $_POST['titre'], PDO::PARAM_STR);
$req->bindValue(':sous_titre', $_POST['sous_titre'], PDO::PARAM_STR);
$req->bindValue(':texte', $_POST['texte'], PDO::PARAM_STR);
$req->bindValue(':date1', $_POST['date1'], PDO::PARAM_STR);

$insertIsOk = $req->execute();

if($insertIsOk){
    $message = 'Le texte a été ajouter dans la base de donnée';
}
else{
    $message = 'Le texte n a pas été ajouter dans la base de donnée';
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<h1>Insertion dans la base de donné</h1>
<p><?= $message ?></p>
<a href="admin_page.php#experience">
<input type="submit" class="btn btn-warning" value="retour à la page">
</a> 
    
</body>
</html>