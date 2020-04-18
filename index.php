<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html {
            font-size: 62.5%;
            height: 100%;
        }

        body {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-content: center;
            align-items: center;
            margin: 0;
            padding: 0;
        }
        label{
            font-size:1.4rem;
        }

        form {
            display: flex;
            flex-direction: column;
        }
    </style>
</head>

<body>
    <form name="login" id="login_form">
        <label for="uname">Username</label>
        <input name='uname' type="text">
        <label for="password">Password</label>
        <input type="text" name="password">
        <input type="hidden" value="<?php echo 'sumNum8' ?>">
    </form>
</body>

</html>