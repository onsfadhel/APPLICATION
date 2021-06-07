<?php
    session_start();
    include_once 'ConnexionBD.php';
    $connexion = ConnexionBD::getInstance();

    $query = "INSERT INTO `users` (`name`, `email`, `password`, `birth`, `university`, `country`) 
    VALUES (:username, :email, :passwword, :birth,:university, :country);";
    $req = $connexion->prepare($query);
    $req->execute([
        'username'=> $_POST['username'],
        'passwword' => $_POST['password'],
        'email' => $_POST['email'],
        'birth' => $_POST['birth'],
        'university'=> $_POST['university'],
        'country'=> $_POST['country']
    ]);
    header('location:home.php');