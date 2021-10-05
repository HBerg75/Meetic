<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    <title>MY MEETIC</title>
</head>
<body>
    <div>
        <nav>
            <a href="inscription.php">Inscription</a>
        </nav>
    </div>
        <div id="container">    
            <form class="create f-col" action=login.php method="POST">
                <h1 class="title">Connexion</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="email" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="mot_de_passe" required>

                <input class="btn" type="submit" id='submit' value='LOGIN' main="login_user">
            </form>
        </div> 
</body>
</html>