<?php

    include_once 'ConnexionBD.php';
    function Password(){
        if($_POST['password']!=''){
            $password=$_POST['password'];
            
            return $password;
        }
    }
    Password();
    $password=$_POST['password'];
    $connexion = ConnexionBD::getInstance();
    $query = "UPDATE `users` SET `password` = '$password' WHERE email='rayenfadhel7@gmail.com' ;";
    $req = $connexion->prepare($query);
    $req->execute([
        'password' => $_POST['password'],

    ]);
    header('location:login.php');