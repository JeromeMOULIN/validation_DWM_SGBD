<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../style/style.css">
    <meta charset="UTF-8">
    <title>Ajouter un chao</title>
</head>
<body>
    <?php require_once('../templates/nav.html'); ?>
    <main class='main_form'>
            <h1>Ajouter un Chao tout mignon a votre collection:</h1>
        <form action="../controllers/addOneChao.php" method="POST">
        <div>
            <label for="name">Nom:</label>
            <input type="text" name="name">
        </div>
        
        <div>
            <label for="swim">Swim:</label>
            <input type="text" name="swim">
        </div>
        
        <div>
            <label for="fly">Fly:</label>
            <input type="text" name="fly">
        </div>
        
        <div>
            <label for="run">Run:</label>
            <input type="text" name="run">
        </div>
        
        <div>
            <label for="power">Power:</label>
            <input type="text" name="power">
        </div>
        
        <input type="submit" value="Envoyer">
    </form>
</main>
</body>
</html>