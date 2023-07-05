<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="style/main.css">
</head>
<body>
    <header>
        <h1>Accueil quiz</h1>
    </header>

    <form action="config/login.php" method="POST">
        <label for="username">Entre ton prénom :</label>
        <input type="text" name="username" class="form-control" placeholder="Prénom" aria-label="Entre ton prénom :" required>
        <button class="playButton" type="submit">Play!</button>
    </form>
    
</body>
</html>