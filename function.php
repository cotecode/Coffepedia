<?php
// connect database
$conn = mysqli_connect("localhost","root","", "coffepedia");

// func register
function register($data){
    global $conn;

    $name = stripslashes($data["name"]);
    $email = stripslashes($data["email"]);
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $cnf_password = mysqli_real_escape_string($conn, $data["cnf_password"]);


    // check email empty or ready use 
    $result = mysqli_query($conn, "SELECT email FROM users WHERE email = '$email'");

    if(mysqli_fetch_assoc($result)){
        echo "<script>
                swal ( 'Error' ,  'Email already used !' ,  'error' )
            </script>";
        return false;
    }

    // conf pass
    if($password !== $cnf_password ){
        echo "<script>
                swal ( 'Error' ,  'Password is different !' ,  'error' )
            </script>";
        return false;
    }

    // encryption password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // added new user to db
    mysqli_query($conn, "INSERT INTO users VALUES('', '$name', '$email', '$password')");

    return mysqli_affected_rows($conn);
}

// function form
function SEND($data){
    global $conn;

    $name = stripslashes($data["name"]);
    $email = stripslashes($data["email"]);
    $subject = stripslashes($data["subject"]);
    $message = stripslashes($data["message"]);
    

    mysqli_query($conn, "INSERT INTO form VALUES('', '$name', '$email', '$subject', '$message' )");

    return mysqli_affected_rows($conn);
}
?>