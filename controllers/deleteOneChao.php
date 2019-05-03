<?php
 
$pdo = new PDO('mysql:host=localhost; dbname=chaos; charset=utf8' ,'root', '0000');
$stmt = $pdo->prepare('DELETE FROM chao WHERE id=:id');
$stmt->bindParam(':id', $_POST['id']);
$stmt->execute();

header('Location: ../views/list.php');