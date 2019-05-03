<?php require_once('../controllers/getOneChao.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../style/style.css">
    <meta charset="UTF-8">
    <title>Modifier les Chao</title>
</head>
<body>
    <?php require_once('../templates/nav.html'); ?> 
    <main class='main_form'>

        <h1>Evoluer vos Chao :</h1>

        <form action="../controllers/updateOneChao.php" method="POST">
            <input type="hidden" name="id" value="<?= $baby['id']?>">
            <div>
                <label for="name">Name:</label>
                <input type="text" name="name" value="<?= $baby['name'] ?>">
            </div>


            <div>
                <label for="swim">Swim:</label>
                <input type="text" name="swim" value="<?= $baby['swim'] ?>">
            </div>


            <div>
                <label for="fly">Fly:</label>
                <input type="text" name="fly" value="<?= $baby['fly'] ?>">
            </div>


            <div>
                <label for="run">Run:</label>
                <input type="text" name="run" value="<?= $baby['run'] ?>">
            </div>

            <div>
                <label for="power">Power:</label>
                <input type="text" name="power" value="<?= $baby['power'] ?>">
            </div>

            <input type="submit" value="Envoyer">
        </form>
</body>
</html>