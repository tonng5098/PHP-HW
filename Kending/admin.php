<?php
    session_start();
?>

<html>
    <head>
        <title>歡迎</title>
    </head><body bgcolor='#D5E5DE'>
        <?php
            if (!isset($_SESSION['admin'])){
                echo 'Error';
                header('refresh:3; url=login.php');
                exit();
            }
            $_SESSION['trip'] = 'true';
        ?>
        <h1><a href = 'logout.php'>log out</a></h1>
            Welcome to admin!
            <center><h1><a href = 'trip.php'>點我查看「墾丁三日遊」行程說明及報名表單</a></h1></center>
    </body>
</html>