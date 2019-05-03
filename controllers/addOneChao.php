<?php

$pdo = new PDO('mysql:host=localhost; dbname=chaos; charset=utf8' ,'root', '0000');
$stmt = $pdo->prepare('INSERT INTO chao (name, swim, fly, run, power) 
                        VALUES (:name, :swim, :fly, :run ,:power)');
$stmt->bindParam(':name',$_POST['name']);
$stmt->bindParam(':swim',$_POST['swim']);
$stmt->bindParam(':fly',$_POST['fly']);
$stmt->bindParam(':run',$_POST['run']);
$stmt->bindParam(':power',$_POST['power']);
$stmt->execute();

header('Location: ../views/list.php');