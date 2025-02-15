<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Styles/styles.css">
</head>
<body>
    <!-- Login Form -->
<div class="login-container" id="login-container" >
          <div class="alert alert-danger" id="error-message" role="alert">
            Invalid username or password!
          </div>
          <div class="login-form">
            <h2>Login</h2>
            <form id="login-form" method="POST" >
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="username" placeholder="Enter your username" required>
              </div>
              
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password" required>
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="remember-me">
                <label class="form-check-label" for="remember-me">Remember me</label>
              </div>
              <button type="submit" class="btn btn-primary btn-custom" name="Login">Login</button>
              <div class="mt-3 text-center">
                <a href="./Register.php" id="register-link">Register</a>
              </div>
            </form>
          </div>
        </div>
</body>
</html>


<?php


//database j file tai connect kora hoeche otake require

session_start();

require "../Database/dbConn.php";

//ata check korte hobe j adeo login button ta click hoeche naki

if(isset($_POST["Login"])){ //Login button tar value null kina

    //frontend theke amder kache email r password post request er dara asbe. segulo k amader $Email aar $Password bole variable golur modhe rakhbo
    $Email=$_POST['email'];
    $Password=$_POST['password'];
    

    //Amra er por agonor age check korbo j ei duti variable er modhe konota khali naki. Jodi khali hole login process agono jabe na

    if(empty($Email) || empty($Password)){
        die("Email or Password is missing");
    }

    //Abar amder ata check korte hobe, j user login korte chaiche se ki amader database e already registered ache ki nei

    $checkEmailQuery="SELECT * FROM `User-Details`WHERE Email='$Email'";
    $checkEmailResult=mysqli_query($dbConn,$checkEmailQuery);

    //jodi $checkEmailResult er number of rows zero hoi tahole er mane holo ei email id diye kono user registerd nei. Tai login process agono jabe na

    if(mysqli_num_rows($checkEmailResult)==0){
        die("No such user user exists");
    }
 
    /* User er sompurno data ta store ache hoche $checkEmailResult e( id, Email, Name, 
    Password). Amader oi data ta theke sudhu password take ber korte hobe diye check 
    korte hobe j, jei password ta database e store kora ache aar jei password ta frontend 
    theke user pathiyeche duto same kina */

    $user=mysqli_fetch_assoc($checkEmailResult); // raw user data jeta database theke newa hoechilo seta k asscociative array te convert kora holo
    $DatabaseHashedPassword=$user["Password"]; // oi associative array theke password ta ber kore $DatabaseHashedPassword er modhe rekhe dewa holo

    if(password_verify($Password,$DatabaseHashedPassword)){ // akhane user er pathano password r database er theke newa password k melano holo. jodi duto password ak hoi tahole user login hoe jbe nahole vul password dewar jonne login hote parbe na
        
       $_SESSION['UserID']=$user['id'];

        header("Location:../index.php");
    }else{
        die("Password incorrect");
    }
    
}



?>

