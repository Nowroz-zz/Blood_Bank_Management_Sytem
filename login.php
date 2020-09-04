<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Blood Bank | Login</title>
        <link rel="stylesheet" href="css/login.css">
    </head>
    <body>
        <div class="wrapper">
            <div class="form-body">
                <div class="form-body-left">
                    <div class="logo">
                        <img src="img/logo.png" style="width: 100px; height: 100px;">
                    </div>
                    <div class="text">
                        <h1>Welcome to Blood Bank</h1>
                        <br>
                        <h3>Please login</h3>
                    </div>
                </div>
                <div class="form-body-right">
                    <div class="table-body">
                        <form action="access.php" method="post">
                            <table border="0" cellspacing="15">
                                <tr>
                                    <td><input class="write" type="text" name="uname" placeholder="username" required></td>
                                </tr>
                                <tr>
                                    <td><input class="write"type="password" name="upass" placeholder="password" required></td>
                                </tr>
                                <tr>
                                    <td><input class="login-button" type="submit" name="loginBtn" value="LOGIN"></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        
        
        <?php
        
        ?>
    </body>
</html>