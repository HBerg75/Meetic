<?php

session_start();
require_once 'database.php';
// $db = new MyDatabase();
// $db = connectDB("localhost", "my_meetic", "heisenberg", "jjjj");

if (isset($_POST['email']) && isset($_POST['mot_de_passe'])) {
    // var_dump($_POST['login_user']);
    // $sql = 'SELECT email, password FROM membres_inscris WHERE email = ?';
    // GESTION DES CHARACTERES SPECIAUX MDP ET EMAIL
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['mot_de_passe']);
    // VERIFICATION SI LE MEMBRE EST BIEN INSCRIS 
    $check = $database->prepare('SELECT email, mot_de_passe FROM membres_inscris WHERE email = ?');
    $check->execute(array($email)); // ON MET LEMAIL DANS UN TABLEAU
    $database = $check->fetch(); // RECHERCHER AVEC FETCH
    $row = $check->rowCount(); //VERIFIE SI IL EXISTE DANS LA TABLE


    if ($row == 1)   // CONDITION SI LA VALEUR EGALE A UN IL EXISTE SINON BYEBYE
    {

        if (filter_var($email, FILTER_VALIDATE_EMAIL))  // VERIFIE SI LADRESSE MAIL ES VALIDE
        {
            $password = hash('sha256', $password); //HACHER LE MDP

            if ($database['mot_de_passe'] ===  $password)  // VERIFIE LE MDP == peux rencontrer des fails du coup ===
            {
                $_SESSION['email'] = $database['email'];
                header('Location:profil.php');
            } else header('Location:indexlogin.php?login_err=mot_de_passe'); //MSG DERREUR SI RECONNAIS PAS LE MDP

        } else header('Location:indexlogin.php?login_err=email');
    } else header('Location:indexlogin.php?login_err=alread');
} else header('Location:indexlogin.php');





// header('Location:profil.php?database=' . $database['mot_de_passe'] . '?input=' . $password);
