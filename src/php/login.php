<?php

    session_start();

    include 'connection.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $password = hash('sha512', $password);

    $validation = mysqli_query($connection, "SELECT * FROM users WHERE email='$email'
    and password='$password'"); 

    if(mysqli_num_rows($validation) > 0){
        $_SESSION['user'] = $email;
        header("location: ../../views/desktop/desktop.php");
        exit;
    }else{
        echo '
        <script>
            alert("Usuario inexistente, verifique los datos");
            window.location = "../../../index.php";
        </script>
        ';
    }

?>