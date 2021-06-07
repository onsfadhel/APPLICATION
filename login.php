<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules\bootstrap\dist\css\bootstrap.css">
    <link rel="stylesheet" href="css\style.css">
    <title>Log in</title>
</head>
<body>
    <div class="container">
    
        <div id="logop">
            <img src="images\logo.jpeg">
        </div>
        <div class="title">
            <h1>
                <i>
                     Welcome to EduCasa
                </i> 
            </h1>
        </div>
        <hr>
        <br>
        <form action="processLogin.php" method="post" enctype="multipart/form-data">
            <div id="border">
                <div style="text-align:center;color:pink;">
                   Enter your login and password
                </div>
                <hr>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                 </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                     <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <div style="text-align:center;">
                    <button type="submit" class="btn btn-warning">
                        Log In
                    </button>
                </div>
                     <br>
                <hr>
               First Time Here?<li><a href="register.php" class="link text-warning">Create an account</a></li>
               <a href="forgot_password.php" class="link text-warning">Mot de passe oublié</a></li>
               <?php
                    if(isset($_GET['errorMessage'])) {
                ?>
                <div class="alert alert-danger">
                    <?=$_GET['errorMessage'] ?>
                </div>
                 <?php
                     }
                 ?>
            </div>

        </form>
    </div>
    
</body>
</html>