<?php

require_once 'database.php';

if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_retype'])) {
   // GESTION DES CHARACTERES SPECIAUX MDP ET EMAIL
   $nom = htmlspecialchars($_POST['name']);
   $prenom = htmlspecialchars($_POST['prenom']);
   $born = htmlspecialchars($_POST['born']);
   $ville = htmlspecialchars($_POST['ville']);
   $genre = htmlspecialchars($_POST['genre']);
   $loisir = htmlspecialchars($_POST['loisir']);
   $email = htmlspecialchars($_POST['email']);
   $password = htmlspecialchars($_POST['password']);
   $password_retype = htmlspecialchars($_POST['password_retype']);

   // VERIFICATION SI LE MEMBRE EST BIEN INSCRIS 
   $check = $database->prepare('SELECT email, mot_de_passe FROM membres_inscris WHERE email = ?');
   $check->execute(array($email)); // ON MET LEMAIL DANS UN TABLEAU
   $data = $check->fetch(); // RECHERCHER AVEC FETCH
   $row = $check->rowCount(); //VERIFIE SI IL EXISTE DANS LA TABLE

   if ($row == 0) {

      if (strlen($email) <= 100) {

         if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

            if ($password == $password_retype) {

               $password = hash('sha256', $password);

               $insert = $database->prepare("INSERT INTO `membres_inscris` (`nom`, `prenom`, `date_de_naissance`, `genre`, `ville`, `email`, `mot_de_passe`, `loisir`) VALUES (:nom, :prenom, :date_de_naissance, :genre, :ville, :email, :mot_de_passe, :loisir)");
               $insert->execute(
                  array(
                     'nom' => $nom,
                     'prenom' => $prenom,
                     'date_de_naissance' => $born,
                     'genre' => $genre,
                     'ville' => $ville,
                     'email' => $email,
                     'mot_de_passe' => $password,
                     'loisir' => $loisir
                  )
               );
               header('Location: indexlogin.php?reg_err=success');
            }
         } else header('Location: inscription.php?reg_err=email');

      } else header('Location: inscription.php?reg_err=email_length');

   } else header('Location: inscription.php?reg_err=already');

} else header('Location:inscription.php');
