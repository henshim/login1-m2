<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .login{
            height:180px;
            width:230px;
            margin: 0px;
            padding: 10px;
            border:1px #ccc solid;
        }
        .login input{
            padding: 5px;
            margin: 5px;
        }
        span{
            color:red;
        }
    </style>
</head>
<body>
<form action="" method="get">
    <div class="login">
        <h2>Login</h2>
        <input type="text" name="username" size="30" placeholder="username">
        <input type="password" name="password" size="30" placeholder="password">
        <input type="submit" value="Sign in">
    </div>
</form>
<?php
if($_SERVER['REQUEST_METHOD']=='GET'){
    $username=$_GET['username'];
    $password=$_GET['password'];

    if($username==='admin' && $password==='admin'){
        echo"<h2>Welcome <span>".$username." </span>to website</h2>";
    }else{
        echo"<h2><span>Login error</span></h2>";
    }
}
?>
</body>
</html>

