<?php 

$db = new PDO('mysql:host=localhost;dbname=eval_php', 'root','');


$req = $db->query('SELECT * FROM web_design_intern');
$test = $req->fetchAll();
?>