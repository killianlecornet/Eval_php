<?php 

$db = new PDO('mysql:host=localhost;dbname=eval_php', 'root','');


$req = $db->query('SELECT * FROM senior_web_developer');
$test = $req->fetchAll();
?>