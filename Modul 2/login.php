<!DOCTYPE html>
<html lang="en">
<head>
<style>
        body{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background: #6495ED;
        }
        .boxes{
            width:300px;
            padding:40px;
            position:absolute;
            top:50%;
            left:50%;
            background:#FFFAFA;
            transform: translate(-50%,-50%);
            text-align:center;
        }
        .boxes h3{
            color:#191919;
            font-weight:300;
        }
        .boxes input[type="text"],.boxes input[type="pwd"]{
        border:0;
        background:none;
        display:block;
        margin:20px auto;
        text-align:center;
        border:2px solid #3498db;
        padding:8px 5px;
        width:200px;
        outline:none;
        border-radius:24px;
        transition: 0.25s;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
</head>
<body>
    <form class="boxes" method="post" action="welcome.php">
    <h3>Sign In</h3>
    <input name="uname" type="text" placeholder="Username">
    <input name="pwd" type="pwd" placeholder="Password">
    <input name="Submit" type="submit" value="Sign In">
    </form>
</body>
</html>
