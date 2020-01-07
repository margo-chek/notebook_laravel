<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="app.scss">
        <title>Notebook input</title>
        <script src="app.js"></script>
    </head>
    <body>
        <div class="mainContainer">
            <div class="header">SUPER NOTEBOOK</div>
            <div class="content">
                <form id=form class="formBlock" method="post">
                    <input placeholder="Username" class="inputForm" name="inputUsername" type="text">
                    <input placeholder="Password" class="inputForm" name="inputPassword" autocomplete="off" type="password">
                    <input class="buttonInput buttonLog" type="submit" name="buttonLogin" value="Login">
                    <input class="buttonInput buttonReg" name="buttonRegister" onclick="register()" value="Register">
                </form>
            </div>
            <div class="header footer">Copyright by ..., 2016</div>
        </div>
    </body>
</html>
