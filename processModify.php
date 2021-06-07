<?php
    session_start();
    include_once 'ConnexionBD.php';
    $id=$_SESSION['id'];
    function Username(){
        if($_POST['username']!=''){
            $username=$_POST['username'];
            $_SESSION['name']=$username;
            return $username;
        }
    }
    Username();
    $username=$_POST['username'];
    function Email(){
        if($_POST['email']!=''){
            $email=$_POST['email'];
            $_SESSION['email']=$email;
            return $email;
        }
        if($_POST['email']=''){
            $email=$_SESSION['email'];
            return $email;

        }
    }
    Email();
    $email=$_POST['email'];
    function birth(){
        if($_POST['birth']!=''){
            $birth=$_POST['birth'];
            $_SESSION['birth']=$birth;
            return $birth;
        }
        if($_POST['birth']=''){
            $birth=$_SESSION['birth'];
            return $birth;

        }
    }
    birth();
    $birth=$_POST['birth'];
    function university(){
        if($_POST['university']!=''){
            $university=$_POST['university'];
            $_SESSION['university']=$university;
            return $university;
        }
        if($_POST['university']=''){
            $university=$_SESSION['university'];
            return $university;

        }
    }
    university();
    $university=$_POST['university'];
    function country(){
        if($_POST['country']!=''){
            $country=$_POST['country'];
            $_SESSION['country']=$country;
            return $country;
        }
        if($_POST['country']=''){
            $username=$_SESSION['country'];
            return $country;
        }
    }
    country();
    $country=$_POST['country'];
    $connexion = ConnexionBD::getInstance();
    $query = "UPDATE `users` SET `name` = '$username',`email` = '$email',`birth` = '$birth',`university` = '$university',`country` = '$country' WHERE id= $id ;";
    $req = $connexion->prepare($query);
    $req->execute([
        'password' => $_POST['password'],
        'email' => $_POST['email']
    ]);
    header('location:modifyprofile.php');