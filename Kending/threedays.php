<?php
    session_start();
    ob_start();
?>
<html>
<head>
<title>
    hello
</title>
<meta name = "keywords" content="hello">
<style type="text/css">
#container { margin: 0 auto; width: 80%; }
</style>
</head>

<body>
<div id="container">
<h1>墾丁三日遊</h1>
1.行程內容
<br>
 第一天:南灣
<br>
 第二天:白沙灘
<br>
 第三天:墾丁大街
<br>
<TABLE BORDER>
<TR>
<TH><A HREF="http://www.nuk.edu.tw"><IMG SRC=https://upload.wikimedia.org/wikipedia/commons/e/e0/Nanwan_%28South_Bay%29.jpg width="500" height="600"></IMG></A></TH>
<TH><A HREF="http://www.nuk.edu.tw"><IMG SRC=https://upload.wikimedia.org/wikipedia/commons/e/e0/Nanwan_%28South_Bay%29.jpg width="500" height="600"></IMG></A></TH>
</TR>
</TABLE>
<br>
2.報名表單
<br>
 <form action="/end.php" method="post">

    <p>Name:</p>
    <p><input type="text" name="name" value="你的名字"></p>

    <p>Email:</p>
    <p><input name="species" type="text"></p>

    <p>Telphone: </p>
    <p><input type="text" id="telphone" name="telphone"></p>
    <p>生理性別: </p>
    <p><input type="radio" name="gender" value="male"> 男</p>
    <p><input type="radio" name="gender" value="female"> 女</p>
    <p>飲食需求: </p>
    <p><input type="radio" name="food" value="meat"> 葷</p>
    <p><input type="radio" name="food" value="vegetable"> 素</p>
    <p>請選擇你最適合的衣服尺寸:</p>
    <select name="clothes_size">
    <option value="">請選擇你的衣服尺寸</option>
    <option value="S">S</option>
    <option value="M" selected>M</option>
    <option value="L">L</option>
    <option value="XL">XL</option>
    <option value="2L">2L</option>
    </select>
    <p>衣服顏色: </p>
    <p><input type="text" name="color" placeholder="衣服顏色"></p>
    <p>生日: </p>
    <p><input type="date" name="date" value="2022-03-17"></p>
    
    <p>Ticket: </p>
    <p><input type="number" id="ticket" name="ticket"
       min="0"></p>
    <p><input type="submit" value="送出"></p>

</body>
</html>