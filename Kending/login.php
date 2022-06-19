<?php
    session_start();
?>

<html>
    <head>
        <title>登入</title>
    </head><body bgcolor='#D5E5DE'>
	    <form action = '' method = 'post'>
            <center>
                <h1>登入</h1>
                <?php
                    if (isset($_COOKIE['username'])){
                        echo .$_COOKIE['username'].'回到系統';
                    } else {
                        echo '歡迎初次來本系統';
                    }
                ?>
                <table style = 'left'>
                    <tr><td>
                        帳號：<input type = 'text' name = 'username' pattern = '[a-zA-Z0-9]{4, 20}' required><br>
                        密碼：<input type = 'password' name = 'password' pattern = '[a-zA-Z0-9]{4, 20}' required><br>
                    </td></tr>
	                <tr><td align = 'center'><input type = 'submit' name = 'login' value = '登入'></td><td></td></tr>
                </table>
                <h5><a href = 'signup.php'><font color = 'gray'>註冊</font></a></h5>
            </center>
	    </form>
    </body>
</html>

<?php
    if (isset($_POST['login'])){
        $_SESSION['login'] = 'true';
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
        header('location:logincheck.php');
    }
?>