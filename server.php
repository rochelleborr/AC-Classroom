<?php
session_start();
$errors = array();
$username= "";
$email = "";
// connect to the database 
$db = mysqli_connect('localhost', 'root', '', 'registration');
// if the register button is clicked
if (isset($_POST['register'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db,$_POST['password_2']);
    
if (empty($username)) {
    array_push($errors, "Username is Required");
}
if (empty($email)){
    array_push($errors, "Email is Required");
}
if (empty($password_1)){
    array_push($errors,"Password is required");
}
if ($password_1 != $password_2){
    array_push($errors,"The passwords doesn't match");
}
// if there are no errors, data will be proceed in the database
if (count ($errors) == 0) {
    $password = md5($password_1); // encrypt password before storing in database (security)
    $sql = "INSERT INTO teachers (username, email , password) 
            VALUE ('$username' , '$email' , '$password')"; 
            mysqli_query($db, $sql);
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header ('location: login.php'); // redirect to home page  
    }
}

//log in
if (isset($_POST['login'])){
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db,$_POST['password']);
    
if (empty($username)) {
    array_push($errors, "Username is Required");
}
if (empty($password)){
    array_push($errors, "Password is Required");
}
if (count($errors)== 0 ){
    $password = md5($password);
    $query = "SELECT * FROM teachers WHERE username= '$username' AND password='$password'";
    $result= mysqli_query($db, $query);
    if (mysqli_num_rows($result) == 1 ){
        // log teacher in 
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header ('location: index.php'); // redirect to home page  
    }
    else{
        array_push($errors, "Wrong username/password combination");
    }
}
}
//logout
if (isset($_GET['logout'])){
    session_destroy();
    unset ($_SESSION ['username']);
    header('location: login.php');
}
?>