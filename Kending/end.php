<?php
    session_start();
?>

<html>
    <head>
        <title>報名表單確認</title>
    </head><body bgcolor='#D5E5DE'>
        <center>
            <?php
                if (!isset($_SESSION['end'])){
                    echo 'Error';
                    header('refresh:3; url=trip.php');
                    exit();
                }
                $_SESSION['trip'] = 'true';
            ?>
            <h3>墾丁三日遊報名資料</h3>
            請確認您所填寫的資料是否皆正確：
            <table style='left'>
            <tr><td><?php
            echo '<br>';
            echo '您的姓名為：　'.$_SESSION['name'].'<br>';
            echo '您的電子郵箱為：　'.$_SESSION['email'].'<br>';
            echo '您的連絡電話為：　'.$_SESSION['tel'].'<br>';
            echo '您的性別為：　'.$_SESSION['gender'].'<br>';
            if (isset($_SESSION['food'])){
                echo '您的食物偏好為：　';
                for($i = 0; $i < count($_SESSION['food']); $i++){
                    if($i != 0){
                        echo '、';
                    }
                    switch($_SESSION['food'][$i]){
                        case 'vegetables':
                            $_SESSION['food'][$i] = '蔬菜';
                            break;
                        case 'fruit':
                            $_SESSION['food'][$i] = '水果';
                            break;
                        case 'meat':
                            $_SESSION['food'][$i] = '肉類';
                            break;
                        case 'seafood':
                            $_SESSION['food'][$i] = '海鮮';
                            break;
                        case 'diary':
                            $_SESSION['food'][$i] = '蛋、奶類';
                            break;
                        case 'snacks':
                            $_SESSION['food'][$i] = '甜點類';
                            break;
                        case 'starches':
                            $_SESSION['food'][$i] = '澱粉類';
                            break;
                    }
                    echo $_SESSION['food'][$i];
                }
                echo '<br>';
            }
            if ($_SESSION['size'] != '不需要'){
                echo '您要求的 T-shirt 尺寸為：　'.$_SESSION['size'].'<br>';
                echo '您要求的 T-shirt 顏色為：　'.$_SESSION['color'].'<br>';
            }
            if ($_SESSION['date'] != null){
                echo '您的生日為：　'.$_SESSION['date'].'<br>';
            }
            echo '報名人數為:　'.$_SESSION['number'].'<br>';
            if ($_SESSION['file']['tmp_name'] != null){
                echo '您的檔案tmp名稱為：　'.$_SESSION['file']['tmp_name'].'<br>';
                echo '您的檔案名稱為：　'.$_SESSION['file']['name'].'<br>';
                echo '您的檔案副檔名為：　'.$_SESSION['file']['type'].'<br>';
                echo '您的檔案大小為：　'.$_SESSION['file']['size'].'<br>';
                if (file_exists($_SESSION['file']['name'])){
                    echo '已有同名檔案存在。<br>';
                } else{
                    move_uploaded_file($_SESSION['file']['tmp_name'], $_SESSION['file']['name']);
                }
            }
            if ($_SESSION['comment'] != null){
                echo '您的意見為：<br>'.nl2br($_SESSION['comment'].'<br>');
            }
            echo '<br><center>按確認回到登入頁面。</center><br>';
            ?>
            </td></tr>
            </table>
            <form action = '' method = 'post'>
                <input type = 'submit' name = 'submit' value = '確認'>
            </form>
        </center>
    </body>
</html>
<?php
    if (isset($_POST['submit'])){
        unset($_SESSION['end']);
        header('location:login.php');
    }
?>