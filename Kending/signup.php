<?php
    session_start();
    ob_start();
?>

<html>
    <head>
        <title>註冊</title>
    </head><body bgcolor='#D5E5DE'>
	    <form action = '' method = 'post'>
            <center>
                <h1>註冊</h1>
                <table style = 'left'>
                    <tr><td>
                        帳號：<input type = 'text' name = 'username' pattern = '[a-zA-Z0-9]{4,20}' placeholder = '4~20字元長之英數' required><br>
                        密碼：<input type = 'password' name = 'password' pattern = '[a-zA-Z0-9]{4,20}' placeholder = '4~20字元長之英數' required><br>
                        email：<input type = 'email' name = 'email' required><br>
                        tel：<input type = 'tel' name = 'tel' pattern = '09[0-9]{8}' placeholder = '09開頭，10位' required><br>
                    </td></tr>
	                <tr><td align = 'center'><input type = 'submit' name = 'signup' value = '註冊'></td></tr>
                </table>
                <h5><a href = 'login.php'><font color = 'gray'>回到登入頁</font></a></h5>
            </center>
	    </form>
    </body>
</html>

<?php
    if (isset($_POST['signup'])){
        $_SESSION['signup'] = 'true';

        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['tel'] = $_POST['tel'];
        header('location:signupinfo.php');
    }
    ob_end_flush();
?>