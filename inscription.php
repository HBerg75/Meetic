<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>

<body>
    <h1 class="title">Inscription</h1>
    <form class="create f-col" action="traitement_inscription.php" method="POST">

            <label for="nom"><b>Nom</b></label>
            <input type="text" placeholder="nom" name="name" required>

            <label for="prénom"><b>Prénom</b></label>
            <input type="text" placeholder="prenom" name="prenom" required>

            <label for="date"><b>date de naissance</b></label>
            <input type="date" placeholder="date de naissance" name="born" required>

            <label for="ville"><b>ville</b></label>
            <input type="text" placeholder="ville" name="ville" required>


            <label for="genre"><b>Genre</b></label>
            <select name="genre">
                <option value="">--choisir un genre--</option>
                <option value="masculin">masculin</option>
                <option value="feminin">feminin</option>
                <option value="autres">autres</option>
            </select>

            <label for="loisir"><b>loisir</b></label>
            <input type="text" placeholder="loisir" name="loisir" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Email valide" name="email" required>

            <label for="psw"><b>mot de passe</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <label for="psw-repeat"><b>repeter mot de passe</b></label>
            <input type="password" placeholder="repeter mot de passe" name="password_retype" required>

            <div class="f-row">
                <input class="btn" type="submit" class="signupbtn"><a href="indexlogin.php">Connexion</a></input>
            </div>
    </form>
</body>

</html>