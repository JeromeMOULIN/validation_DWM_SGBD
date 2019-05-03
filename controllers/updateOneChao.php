<?php

$pdo = new PDO('mysql:host=localhost; dbname=chaos; charset=utf8' ,'root', '0000');
$stmt = $pdo->prepare(
                        'UPDATE chao 
                        SET name=:name, swim=:swim, fly=:fly, run=:run, power=:power 
                        WHERE id=:id');
$stmt->bindParam(':name',$_POST['name']);
$stmt->bindParam(':swim',$_POST['swim']);
$stmt->bindParam(':fly',$_POST['fly']);
$stmt->bindParam(':run',$_POST['run']);
$stmt->bindParam(':power',$_POST['power']);
$stmt->bindParam(':id',$_POST['id']);
$stmt->execute();

header('Location: ../views/list.php');