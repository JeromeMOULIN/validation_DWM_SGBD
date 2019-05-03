<?php require('../controllers/getAllChaos.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../style/style.css">
    <meta charset="UTF-8">
    <title>Les Chaos</title>
</head>
<body>
    <?php require_once('../templates/nav.html');?>
    <main class='home_list'>
            <h1>Voici tout les adorables Chao de votre collection:</h1>
        <div>
            <table>
                <tr>
                    <th>Nom</th>
                    <th>Swim</th>
                    <th>Fly</th>
                    <th>Run</th>
                    <th>Power</th>
                    <th>Abandonner</th>
                    <th>Evoluer</th>
                </tr>
                <?php foreach($chao as $baby): ?>
                <tr>
                    <td><?= $baby['name']?></td>
                    <td><?= $baby['swim']?></td>
                    <td><?= $baby['fly']?></td>
                    <td><?= $baby['run']?></td>
                    <td><?= $baby['power']?></td>
                    <td>
                        <form action="../controllers/deleteOneChao.php" method="POST">
                            <input type="hidden" name="id" value="<?= $baby['id']?>">
                            <input type="submit" value="X">
                        </form>
                    </td>
                    <td>
                        <form action="../views/updateChao.php" method="POST">
                            <input type="hidden" name="id" value="<?= $baby['id']?>">
                            <input type="submit" value="U">
                        </form>
                    </td>
                </tr>
                <?php endforeach ?>
            </table>
        </div>
    </main>
</body>
</html>