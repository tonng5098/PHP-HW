<html lang="zh-TW">
<head>
<title>changepasswoed</title>
<style type="text/css">

nav{
    float: right;
    padding: 24px 24px;
    color:black;
    font-family:monospace;
    display: flex;
    width: 100%;
    }
    ul{
    margin: 0;
    list-style-type: none;
    color:black;
    font-family:monospace;
    }
    nav li{
    padding: 26px 20px;
    float: left;
    color:black;
    font-family:monospace;
    }
    nav li:hover{ 
    background-color: #7A918D;
    opacity: 0.5; }   
    nav a{
    padding: 10px;
    }
    body {
            margin: 0px;
            padding: 0px;
        }

        .div_all {
            width: 100%;
            height: 100%;
            min-width: 1200px;
            margin-bottom: 50px;
        }

        .div_all_title {
            width: 100%;
            height: 60px;
            text-align: center;
            line-height: 60px;
            font-size: 26px;
            font-weight: bold;
        }

        .div_all_ke {
            width: 100%;
            height: 80px;
            margin-left: 20%;
            
            line-height: 40px;
            font-weight: bold;
            font-size: 24px;
            margin-top: 10px;
        }
        .initImg{
            width: 150px;
            height: 80px;
        }
        .fillImg{
            object-fit: fill;
        }
        .containImg{
            object-fit: contain;
        }
        .coverImg{
            object-fit: cover;
        }
        .noneImg{
            object-fit: none;
        }
        .scaleDownImg{
            object-fit: scale-down;
        }
        .outer {
        background-color: #95afba;
        }
        .inner {
        position: fixed; 
        background-color: #d5e1a3;
        display: flex;
        border: 1px solid #999999;          /* ★ */
        width: 100%;
        height: 80px;
        font-weight: bold;
        font-size: 24px;
        align-items: center;    /* ★ */
        }
        .fixmiddle {
        background-image:url(scale.jpg);
        background-repeat: no-repeat;
        
        background-position: 100% 60%;
        background-size: 100% 120%;
        display: flex;
        border: 1px solid #999999;          /* ★ */
        height: 400px;
        font-weight: bold;
        font-size: 24px;
        font-family:monospace;
        align-items: center;    /* ★ */
        }
        .middletext {
            width: 100%;
            height: 220px;
            margin-left: 0%;
            background:hsla(0,0%,25%,0.7);
            line-height: 20px;
            font-weight: bold;
            font-size: 24px;
            margin-top: 80px;
            display:flex;
        }
        .div_all_stan {
            width: 50%;
            height: 200px;
            margin-left: 10%;
            line-height: 40px;
            font-weight: bold;
            font-size: 24px;
            color:rgba(255,255,255,0.6);
            margin-top: 25px;
            flex:2;
            font-family:monospace;

        }
        .div_recommand {
            width: 10%;
            height: 200px;
            margin-left: 0%;
            flex:1;
            line-height: 40px;
            font-weight: bold;
            font-size: 24px;
            margin-top: 76px;
            color:rgba(255,255,255,0.6);
            font-family:monospace;
            
        }
    /* 下方是底部*/
html{
    height:100%;
}
* html body{
    height:100%;
}
body{
    margin:0;
    padding:0;
    font-family:Arial,sans-serif;
    min-height:100%;
    position:relative;
}
div a{
    text-decoration:none;
    color:#000000;
}
 
div.topNav span.home{
    font-size:11px;
    color:#c3c6c9;
    float:right;
}


div.content{
    margin:15px 0px 0px 60px;
    padding:5px 10px;
    border:1px solid #c8cfe1;
    overflow:hidden;
}
/* --Content 元素-- */
div.content h1{
    font-size:20px;
    /* color:#4d5363; */
    /* font-weight:normal; */
    letter-spacing:1px;
    margin:10px 0px 0px 0px;
    padding:3px 10px;
    background-color:#e4e5e7;
    text-shadow:0px 0px 0px #e4e5e7;
}
div.content h1 strong{
    font-size:12px;
    color:#fff;
    background-color:#4d5363;
    margin:-10px 0px 0px 0px;
    padding:4px 10px;
    float:right;
    border-radius:5px;
}
div.box-c{
    font-size:20px;
    line-height:60px;
    color:#4aa83b;
    background-color:#cacbd0;
    width:90px;
    height:90%;
    margin:0 auto;padding:0px 0px 0px 0px;
    text-align:center;
    border-radius:3px;
}

/* --Footer-- */
div.footer{
    clear:both;
    width:100%;
    position:absolute;
    bottom:0;
    height:80px;
    color:#fff;
    padding:20px 0px 0px 0px;
    text-align:center;
    background-color:#4d5363;

}
div.wrapper{
    padding-bottom:80px;
    margin-bottom: 0 5px; 
}
div.leftNav{
    width:200px;
    max-width:36%;
    height: 900px;
    margin:-40px 20px 0px 10px;
    padding:20px 30px;
    border:1px solid #c8cfe1;
    background-color:#fff;
    float:left;
}

div.footer b{font-weight:normal;font-size:13px;color:#a3a6a9;}
</style>
</head>

<header>
    <div class="inner">
    <a href="index.php" style="color:black;text-decoration:none"><img src="eric.png" class="initImg scaleDownImg"/></a>
        <nav>
            <ul>
              <li>
                <a href="test.php" style="color:black;text-decoration:none">Test</a>
              </li>
              <li>
                <a href="about.php" style="color:black;text-decoration:none">About</a>
              </li>
              <li style="float:right">
                <a href="login.php" style="color:black;text-decoration:none">User</a>
              </li>
            </ul>
          </nav>
        </div>

    <div class="fixmiddle containImg">
        <div class="middletext">
        <div class="div_all_stan">
            <img src="stan.png" class="initImg scaleDownImg"/>OH MY GOD! They've Killed Kenny!</br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You Bastard!<img src="kyle.png" class="initImg scaleDownImg"/>
        </br>
        </div> 
        <div class="div_recommand">
            "Recommend Classic South</br> 
            Park Episode For You!"
        </div>
        </div>
        
    </header>


<body>
<div class="leftNav">
    <a href='about.php'>About Us</a> <br />
    <br/>
    <a href='otherlink.php'>Other Link</a> <br />
    <br/>
    <a href='changepassword.php'>Personal Infor</a> <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
</div>
	<!--[Element Center Layout]-->
	<div class="content">
    <span><h1>User</h1></span>
		<br />
		<div class=>
        <form action="updateconfirm.php" method="post" enctype="multipart/form-data">
            Account：<input type="text" name="account" required></br>
            New Password：<input type="password" name="upsw" required></br>
            <input type="submit" value="Chande Password">
        </form>
        </div>
		<!--[Element Center Layout]--><br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
	</div>
</div>

</body>
</html>