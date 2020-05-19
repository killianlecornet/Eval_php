<?php 

$db = new PDO('mysql:host=localhost;dbname=eval_php', 'root','');


$req = $db->query('SELECT * FROM junior_web_designer');
$test = $req->fetchAll();
?>