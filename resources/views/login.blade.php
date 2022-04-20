<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<style>
    .login-div{
        width: 330px;
        height: 500px;
        padding: 60px 35px 35px 35px;
        border-radius: 40px;
        background: #ecf0f3;
        box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #ffffff;
        position: absolute;
        margin-left: auto;
        margin-right: auto;
        bottom: 0;
        left: 0;
        right: 0;
        top:8%;
    }
    .logo{
        background-image: url("external-content.duckduckgo.com.jpg");
        background-size: 100%;
        width: 100px;
        height: 100px;
        border-radius: 50%;
        margin: 0 auto;
        box-shadow: 0 0 2px #5f5f5f, 0 0 0 5px #ecf0f3, -8px -8px 15px #ffffff, 8px 8px 15px #8e9998;
    }
    .title{
        text-align: center;
        font-size: 28px;
        padding-top: 24px;
        letter-spacing: 1px;
    }
    .sub-title{
        text-align: center;
        font-size: 15px;
        padding-top: 7px;
        letter-spacing: 3px;
    }

    .fields{
        width: 100%;
        padding: 75px 5px 5px 5px;
    }

    .fields input{
        border: none;
        outline: none;
        background: none;
        font-size: 18px;

        color: #555;
        padding: 20px 10px 20px 5px;
    }

    .username, .password{

        border-radius: 25px;
        margin: 10px;
        box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #ffffff;
    }

    .fields svg{
        height: 22px;
        margin: 0 10px -3px 25px;
    }

    .signIn-button{
        Outline: none;
        border: none;
        cursor: pointer;
        width: 100%;
        height: 60px;
        border-radius:35px;
        font-size:20px;
        font-weight: 700;
        font-family:'Lato',sans-serif;
        color: #fff;
        text-align:center;
        background: #24cfaa;
        box-shadow:3px 3px 8px #b1b1b1, -3px -3px 8px #ffffff;
        transition: 0.5s;
        padding: 1rem;
        margin-top: 2rem;
    }
    .signIn-button:hover{
        background: #2fdbb6;}
    .signIn-button:active{
        background: #1da88a;}
    .link{
        padding-top: 20px;
        text-align: center;
    }
    .link a {
        text-decoration: none;
        color: #aaa;
        font-size: 15px;
    }

</style>
<body>
<div class="center"></div>

<div class="login-div">
    <div class="logo"></div>
    <div class="title">S.R.I.E.I.T</div>
    <div class="sub-title"></div>
    <div class="fields">
        <div class="username"><label>
                <input type="text" class="user-input" placeholder=" Username"/>
            </label></div>
        <div class="password"><label>
                <input type="password" class="pass-input" placeholder="Password"/>
            </label></div>
        <div><button class="signIn-button" onclick="login()">Login</button>
            <div class="link"><a href="#"> Forgot password?</a> or <a href="#" >Signup</a>
            </div>
        </div>

    </div>
</div>
</body>
<script>
    function login(){

        //OnSuccess login
        window.location.href = "/home"
    }
</script>
</html>
