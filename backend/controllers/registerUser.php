<?php

//dbonn.php te database er sathe backend k connect kore hoeche. oto boro code bar bar prottek ta file e lekha sombhob noi tai amra require diye otake behind the scenes prottek ta file e copy kore di
require '../Database/dbConn.php';
//$_POST[] : atar kaaj holo j frontend theke post request e ja ja values ase setake catch kora

if(isset($_POST['submit'])){ // register button r value ta check korche j null ache kina

    //frontend theme id email name r password eseche seta $id, $email, $name , $password bole variables e store kora hoeche
    $id=$_POST['id'];
    $email=$_POST['email'];
    $name=$_POST['name'];
    $password=$_POST['password'];

    if(empty($id) || empty($email) || empty($name) || empty($password)){
        die("Please fill all the fields");
    }

    //j email ta frontend theke eseche seta diye already amader database e onno user k register korano ache kina

    $checkEmail="SELECT * FROM User-Details WHERE Email='$email'";
    $checkEmailResult=mysqli_query($dbConn,$checkEmail); //jode kono user thake tahole tar puro data ta $checkEmailResult variable e store hoe jabe

    if(mysqli_num_rows($checkEmailResult)>0){// mysqli_num_rows($checkEmailResult) => $checkEmailResult e ja data ache seta koto gulo rows e store kora ache seta ber kora hoche. Akhane jodi rows er number 0 thake tahole kono user nei aar jodi taa na hoi tahole kono user oi email e registered ache
        die("Email already exists");
    }

    $hashPassword=password_hash($password,PASSWORD_DEFAULT) // password k hash kora hoche

    //user er details finally database e store kora hoche

    $query="INSERT INTO User-Details (id,Email,Name,Password) VALUES ('$id','$email','$name','$hashPassword')";

    $result=mysqli_query($dbConn,$query);

    if($result){
        echo "User Registered Successfully";
    }else{
        echo "Failed to Register User";
    }
}


?>