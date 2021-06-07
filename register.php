<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules\bootstrap\dist\css\bootstrap.css"></link>
    <link rel="stylesheet" href="css\style.css">
    <title>register</title>
</head>
<body>
    <div class="container">
        <div id="logop">
            <img src="images\logo.jpeg">
        </div>
        <div class="title">
             <h1>
                 <i>
                    Create A New Account
                 </i> 
            </h1>
        </div>
        <hr><br>
         <form id="border" style="height: 630px;width: 450px;"  action="processRegister.php" method="post" enctype="multipart/form-data">
            <div class="form-row" >
                <div style="text-align:center;color:pink;">
                   Fill all the blanks
                </div><hr>
                <div style="color:red;text-align:center;" id="erreur"></div><br>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input name="email" type="email" class="form-control" id="inputEmail">
                </div>
            </div>
            <div class="form-group">
                 <label for="inputUsername">UserName</label>
                <input name="username" type="text" class="form-control" id="inputUsername" >
            </div>
            <div class="form-group col-md-6">
                <label for="inputBirth">Birth Date</label>
                <input name="birth" type="date" class="form-control" id="inputBirth">
            </div>
            <div class="form-group col-md-4">
                 <label for="inputCountry">Country</label>
                 <select name="country" id="inputCountry" class="form-control">
                    <option selected>Tunisia</option>
                    <option>USA</option>
                    <option>france</option>
                </select>
            </div>
             <div class="form-group col-md-2">
                 <label for="inputUniversity">University</label>
                 <input name="university" type="text" class="form-control" id="inputUniversity">
            </div>
            <div class="form-group col-md-6">
                    <label for="inputPassword">Password</label>
                    <input type="password" class="form-control" id="inputPassword">
            </div>
            <div class="form-group col-md-6">
                    <label for="inputConfpassword">Confirm Password</label>
                    <input name="password" type="password" class="form-control" id="inputConfpassword">
            </div><br>
            <div style="text-align:center;">
                <button id="submit" type="submit" class="btn btn-warning" >Register</button>
            </div>
        </form>
    </div>
    <script src="js/register.js"></script>
</body>
</html>