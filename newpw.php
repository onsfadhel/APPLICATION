<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules\bootstrap\dist\css\bootstrap.css"></link>
    <link rel="stylesheet" href="css\style.css">
    <title>Reset password</title>
</head>
<body>
    <div class="container">
        <div id="logop">
            <img src="images\logo.jpeg">
        </div>
        <div class="title">
             <h1>
                 <i>
                    Modify password
                 </i> 
            </h1>
        </div>
        <hr><br>
         <form id="border" style="height:350px;width:350px;"  method="post"action="processPassword.php" enctype="multipart/form-data">
            <div class="form-row" >
                <div class="form-group col-md-6">
                        <div style="text-align:center;color:pink;">
                            Modify your password
                        </div><hr>
                            <div style="color:red;text-align:center;" id="erreur"></div><br>
                                <label for="inputPassword">Password</label>
                                <input name="password" type="password" class="form-control" id="inputPassword">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputConfpassword">Confirm Password</label>
                                <input name="confPassword" type="password" class="form-control" id="inputConfpassword">
                            </div><br>
                            <div style="text-align:center;">
                                <button id="submit" type="submit" class="btn btn-warning" >modifier password</button>
                            </div>
                        </div>
                     </div>
                </div>
            </form>
    <script src="js/password.js"></script>
</body>
</html>