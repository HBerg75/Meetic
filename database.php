<?php

// class MyDatabase {

//     private $database;

//     public function  __construct(){

        try {
            $database = new pdo("mysql:host=localhost;dbname=my_meetic;charset=UTF8", "heisenberg", "jjjj", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch (Exception $e) {
        die("Erreur : " . $e->getMessage());
        }

    // }
// }

// function connectDB($host, $db, $user, $pass) {
//     try {
//         // utilisation du prefix mysql:
//         $options = array(
//           PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
//           PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
//         );
//         $cnx = new PDO("mysql:host=$host;dbname=$db", $user, $pass, $options);
//         return $cnx;
  
//     } catch (PDOException $e) {
//         print "Erreur !: " . $e->getMessage() . "<br/>";
//         exit();
//     }
//   }
