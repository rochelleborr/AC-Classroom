<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>AC Classroom</title>
        <link rel="stylesheet" type="text/css" href="style1.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arimo&display=swap">
    </head>
    <body id="regbg">
        <div class="header">
            <h2>Register</h2>
        </div>
        <form method="post" action="register.php">
            <!-- validation errors -->
            <?php include('errors.php');?>
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" value="<?php echo $username; ?>" < div>
            </div>
            <div class="input-group">
                <label>Email</label>
                <input type="text" name="email" value="<?php echo $email; ?>" < div>
            </div>             
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password_1" value="<?php echo $password; ?>" < div>
            </div>             
            <div class="input-group">
                <label>Confirm Password</label>
                <input type="password" name="password_2" value="<?php echo $password; ?>" < div>
            </div>             
            <div class="input-group">
                <button type="submit" name="register" class="btn">Register</button>
            </div>             
            <p>
                Already a member? <a href="login.php"> Sign in</a> </p>
        </form>
    </body>
</html>