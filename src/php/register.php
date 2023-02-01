<?php

    include 'connection.php';

    $name = $_POST['name'];
    $date = $_POST['date'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = hash('sha512', $password);

    $query = "INSERT INTO users(name, date, email, password) 
              VALUES('$name', '$date', '$email', '$password')";

    $execute = mysqli_query($connection, $query);

    if($execute){
        echo '
            <script>
                alert("Usuario Creado Exitosamente");
                window.location = "../../../index.php";
            </script>
        ';
    }
?>