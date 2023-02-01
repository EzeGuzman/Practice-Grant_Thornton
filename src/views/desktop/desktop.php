<?php

    session_start();

    include '../../php/connection.php';

    if(isset($_SESSION['user'])) {
      $email = $_SESSION['user'];
      $query_name = mysqli_query($connection, "SELECT name FROM users WHERE email='$email'");
      $query_year = mysqli_query($connection, "SELECT date FROM users WHERE email='$email'");
    }

    if(!isset($_SESSION['user'])){
      echo'
        <script>
          alert("Por favor, inicia sesión");
          window.location = "../../../index.php"
        </script>
      ';

      session_destroy();
      die();
    }

    $name_array = mysqli_fetch_array($query_name);
    $name = $name_array[0];

    $year_array = mysqli_fetch_array($query_year);

    $birthday = new DateTime(date('Y/m/d',strtotime($year_array[0])));
    $now =  new DateTime(date('Y/m/d',time()));
    $age = date_diff($now,$birthday);

    $year = date('Y');
    $month = date('m', strtotime($year_array[0]));
    $day = date('d', strtotime($year_array[0]));

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="../../../assets/logo.png" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
    <link rel="stylesheet" href="../../css/normalize.css" />
    <link rel="stylesheet" href="./css/style-desktop.css" />
    <title>Back to the Time - Bienvenida</title>
  </head>
  <body>
  
    <div class="presentation">
        <div class="header">
            <h1>Bienvenido <?php echo $name; ?></h1>
            <p class="years">Tu edad es: <?php echo $age->format("%y") ?>, ¡Cuánta juventud junta!</p>
            <h3>Tu cumpleaños es en</h3>
        </div>
        <div class="birthday"></div>
        <div class="sign-out">
          <a href="./php/sign_out.php" class="close">Salir</a>
        </div>
    </div>

    <script src="./js/simplyCountdown.min.js"></script>
    <script>

      simplyCountdown('.birthday', {
        year: <?php echo $year ?>, // required
        month: <?php echo $month ?>, // required
        day: <?php echo $day ?>, // required
        hours: 0, // Default is 0 [0-23] integer
        minutes: 0, // Default is 0 [0-59] integer
        seconds: 0, // Default is 0 [0-59] integer
        words: { 
          //words displayed into the countdown
                days: { singular: 'Día', plural: 'Días' },
                hours: { singular: 'Hora', plural: 'Horas' },
                minutes: { singular: 'Minuto', plural: 'Minutos' },
                seconds: { singular: 'Segundo', plural: 'Segundos' }
            },
        plural: true, //use plurals
        inline: false, //set to true to get an inline basic countdown like : 24 days, 4 hours, 2 minutes, 5 seconds
        inlineClass: 'simply-countdown-inline', //inline css span class in case of inline = true
        // in case of inline set to false
        enableUtc: true, //Use UTC as default
        onEnd: function () {
          document.getElementById('portada').classList.add('oculta');
          return;
        }, //Callback on countdown end, put your own function here
        refresh: 1000, // default refresh every 1s
        sectionClass: 'simply-section', //section css class
        amountClass: 'simply-amount', // amount css class
        wordClass: 'simply-word', // word css class
        zeroPad: false,
        countUp: false,
      });

    </script>
  </body>
</html>
