<?php
    session_start();
    require_once('conn.php');
?>

<html>
    <head>
        <title>登陸驗證</title>
    </head><body bgcolor='#D5E5DE'>
        <center><?php
            if (!isset($_SESSION['login'])){
                echo '非法登入！';
                header('refresh:3; url=login.php');
                exit();
            } 
            unset($_SESSION['login']);

            $username = $_SESSION['username'];
            $password = $_SESSION['password'];
            $result = $conn -> query("SELECT * FROM users WHERE username = '$username' AND password = '$password';");
            if ($result->num_rows == 1){
                setcookie('username', $username, (strtotime("+10 days", time())));
                if (mysqli_fetch_assoc($result)['admin'] == 1){
                    $_SESSION['admin'] = 'true';
                    header('location:admin.php');
                } else{
                    $_SESSION['register'] = 'true';
                    header('location:register.php');
                }
            } else{
                echo '用戶名或密碼輸入錯誤！<br> 3 秒後跳回登入介面';
                header('refresh:3; url=login.php');
                exit();
            }
            $conn -> close();
        ?></center>
    </body>
</html>