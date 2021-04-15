<?php include('server.php')
    ?>
<!DOCTYPE html>
<html>
    <head>
        <title>AC Classroom</title>
        <link rel="stylesheet" type="text/css" href="style1.css">
    </head>
    <body id="logbg">
        <div class="header">
            <h2>Login</h2>
        </div>
        <form method="post" action="login.php">
            <!-- validation errors -->
            <?php include('errors.php');?>
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username">
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password">
            </div>             
            <div class="input-group">
                <button type="submit" name="login" class="btn"> Login </button>
            </div>
            <p>
        Not yet Registered? <a href="register.php">Sign up</a> </p>
        </form>
    </body>
</html>