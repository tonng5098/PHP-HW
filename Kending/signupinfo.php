<?php
    session_start();
    require_once('conn.php');
?>

<html>
    <head>
        <title>註冊確認</title>
    </head><body bgcolor='#D5E5DE'>
        <center>
            <table style = 'left'>
                <tr><td>
                    <?php
                        if ($_SESSION['signup'] != 'true'){
                            echo 'error!';
                            header('location:signup.php');
                            exit();
                        }
                        unset($_SESSION['signup']);

                        $hostname = 'localhost';
                        $username = 'trip';
                        $password = 'trip';
                        $dbname = 'php_hw_users';
                        $conn = mysqli_connect($hostname,$username, $password, $dbname);
                        $conn -> set_charset("UTF8");
                        $array = ['username', 'password', 'email', 'tel'];
                        $value = [$_SESSION[$array[0]], $_SESSION[$array[1]], $_SESSION[$array[2]], $_SESSION[$array[3]]];

                        for ($i = 0; $i < count($array); $i++){
                            $str = sprintf("SELECT * FROM users WHERE %s = '%s';", $array[$i], $value[$i]);
                            $result = $conn -> query($str);
                            if ($result->num_rows != 0){
                                echo $array[$i].'已被占用！<br><br>';
                                if ($i == 0){
                                    echo '3 秒後跳回登入介面。';
                                    header('refresh:3; url=login.php');
                                } else if ($i == 1){
                                    continue;
                                } else{
                                    echo '3 秒後跳回註冊介面。';
                                    header('refresh:3; url=signup.php');
                                }
                                exit();
                            }
                        }
                        echo '
                            註冊完成！<br>
                            您的用戶名為：　'.$value[0].'<br>
                            您的密碼為：　'.$value[1].'<br>
                            您的電子郵箱為：　'.$value[2].'<br>
                            您的連絡電話為：　'.$value[3].'<br><br>
                            按確認回到登入頁面。<br>
                        ';

                        $conn -> query("INSERT INTO users(username, password, email, tel) VALUES('$value[0]', '$value[1]', '$value[2]', '$value[3]');");
                        $conn -> close();
                    ?>
                </td></tr>
            </table>
            <a href = 'login.php'>確認</a>
        </center>
    </body>
</html>