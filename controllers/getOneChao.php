<?php

$pdo = new PDO('mysql:host=localhost; dbname=chaos; charset=utf8' ,'root', '0000');
$stmt = $pdo->prepare('SELECT * FROM  chao WHERE id=:id');
$stmt->bindParam(':id',$_POST['id']);
$stmt->execute();
$baby = $stmt->fetch(PDO::FETCH_ASSOC);