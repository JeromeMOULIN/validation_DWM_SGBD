<?php

$pdo = new PDO('mysql:host=localhost; dbname=chaos; charset=utf8' ,'root', '0000');
$stmt = $pdo->prepare('SELECT * FROM chao');
$stmt->execute();
$chao = $stmt->fetchAll(PDO::FETCH_ASSOC);