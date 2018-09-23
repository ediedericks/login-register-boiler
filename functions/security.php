<?php

ini_set("log_errors", 1);
ini_set("error_log", "/tmp/php-error.log");
error_log( "Hello, errors!" );

session_start();



    // REGISTER FUNCTION
    if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirmPassword']) && $_POST['login'] == 0){
        register($_POST['email'], $_POST['password'], $_POST['confirmPassword']);
    };

    // LOGIN FUNCTION
    if(isset($_POST['email']) && isset($_POST['password']) && $_POST['login'] == 1){
        login($_POST['email'], $_POST['password']);
    };

    function register($email, $password, $confirmPassword){

        require('connections/db.php');

        $password = mysqli_real_escape_string($conn, $password);
        $hashed_pass = password_hash($password, PASSWORD_DEFAULT);

        $insert_query = 'INSERT INTO users (`email`, `password`) VALUES ("'.$email.'", "'.$hashed_pass.'")';

        if(mysqli_query($conn, $insert_query)){
            echo 'true';
        } else {
            echo 'false';
        }
        
    };


    function login($email, $password){

        require('connections/db.php');

        $password = mysqli_real_escape_string($conn, $password);

        $select = 'SELECT * FROM users WHERE email = "'.$email.'" LIMIT 1';
        $result = mysqli_query($conn, $select);
        
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                if(password_verify($password, $row['password'])){
                    $_SESSION['id'] = $row['id'];
                    echo 'true';
                } else {
                    echo 'false';
                }
            }
        } else {
            echo 'false';
        }
    };

?>